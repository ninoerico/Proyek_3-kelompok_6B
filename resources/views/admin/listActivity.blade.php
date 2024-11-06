<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Sikahim | List Kegiatan</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Daftar Kegiatan</h1>

        <!-- Tombol Tambah Kegiatan -->
        <button onclick="toggleForm()" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Tambah Kegiatan</button>

        <!-- Form Tambah Kegiatan (Tersembunyi secara default) -->
        <div id="formTambahKegiatan" style="display: none;" class="border p-4 mb-4 bg-gray-100 rounded">
            <form action="{{ route('kegiatan.store') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="nama_kegiatan" class="block">Nama Kegiatan</label>
                    <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="border p-2 w-full" required>
                </div>
                <div class="mb-2">
                    <label for="kategori_id" class="block">Kategori</label>
                    <select id="kategori_id" name="kategori_id" class="border p-2 w-full" required>
                        <!-- Ambil data kategori dari controller -->
                        @foreach ($kategori as $kat)
                            <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="tanggal_mulai" class="block">Tanggal Mulai</label>
                    <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="border p-2 w-full" required>
                </div>
                <div class="mb-2">
                    <label for="tanggal_selesai" class="block">Tanggal Selesai</label>
                    <input type="date" id="tanggal_selesai" name="tanggal_selesai" class="border p-2 w-full">
                </div>
                <div class="mb-2">
                    <label for="lokasi" class="block">Lokasi</label>
                    <input type="text" id="lokasi" name="lokasi" class="border p-2 w-full" required>
                </div>
                <div class="mb-2">
                    <label for="status" class="block">Status</label>
                    <select id="status" name="status" class="border p-2 w-full">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
                <button type="button" onclick="toggleForm()" class="bg-red-500 text-white px-4 py-2 rounded">Batal</button>
            </form>
        </div>

        <!-- Tabel Kegiatan -->
        <table class="min-w-full border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">Nama Kegiatan</th>
                    <th class="border border-gray-300 p-2">Kategori</th>
                    <th class="border border-gray-300 p-2">Tanggal Mulai</th>
                    <th class="border border-gray-300 p-2">Tanggal Selesai</th>
                    <th class="border border-gray-300 p-2">Lokasi</th>
                    <th class="border border-gray-300 p-2">Status</th>
                    <th class="border border-gray-300 p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kegiatan as $item)
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $item->nama_kegiatan }}</td>
                        <td class="border border-gray-300 p-2">{{ $item->kategori->nama_kategori }}</td>
                        <td class="border border-gray-300 p-2">{{ $item->tanggal_mulai }}</td>
                        <td class="border border-gray-300 p-2">{{ $item->tanggal_selesai ?? '-' }}</td>
                        <td class="border border-gray-300 p-2">{{ $item->lokasi }}</td>
                        <td class="border border-gray-300 p-2">
                            {{ $item->status ? 'Aktif' : 'Tidak Aktif' }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            <a href="{{ route('kegiatan.edit', $item->id) }}" class="text-blue-500">Edit</a> |
                            <form action="{{ route('kegiatan.destroy', $item->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function toggleForm() {
            const form = document.getElementById('formTambahKegiatan');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
