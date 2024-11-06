<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Sikahim | List Kegiatan</title>
        @vite("resources/css/app.css")
    </head>
    <body>
        <div class="mx-10 mt-5">
            <h1 class="mb-4 text-2xl font-bold">Daftar Kegiatan</h1>

            <button
                onclick="toggleForm()"
                class="mb-4 rounded-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-700"
            >
                Tambah Kegiatan
            </button>

            <div
                id="formTambahKegiatan"
                style="display: none"
                class="mb-4 rounded border bg-gray-100 p-4"
            >
                <form action="{{ route("kegiatan.store") }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="nama_kegiatan" class="block">
                            Nama Kegiatan
                        </label>
                        <input
                            type="text"
                            id="nama_kegiatan"
                            name="nama_kegiatan"
                            class="w-full border p-2"
                            autocomplete="off"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label for="kategori_id" class="block">Kategori</label>
                        <select
                            id="kategori_id"
                            name="kategori_id"
                            class="w-full border p-2"
                            required
                        >
                            @foreach ($kategori as $kat)
                                <option value="{{ $kat->id }}">
                                    {{ $kat->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="tanggal_mulai" class="block">
                            Tanggal Mulai
                        </label>
                        <input
                            type="date"
                            id="tanggal_mulai"
                            name="tanggal_mulai"
                            class="w-full border p-2"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label for="tanggal_selesai" class="block">
                            Tanggal Selesai
                        </label>
                        <input
                            type="date"
                            id="tanggal_selesai"
                            name="tanggal_selesai"
                            class="w-full border p-2"
                        />
                    </div>
                    <div class="mb-2">
                        <label for="lokasi" class="block">Lokasi</label>
                        <input
                            type="text"
                            id="lokasi"
                            name="lokasi"
                            class="w-full border p-2"
                            autocomplete="off"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label for="status" class="block">Status</label>
                        <select
                            id="status"
                            name="status"
                            class="w-full border p-2"
                        >
                            <option value="1">Berlangsung</option>
                            <option value="0">Selesai</option>
                        </select>
                    </div>
                    <button
                        type="submit"
                        class="rounded bg-green-500 px-4 py-2 text-white"
                    >
                        Simpan
                    </button>
                    <button
                        type="button"
                        onclick="toggleForm()"
                        class="rounded bg-red-500 px-4 py-2 text-white"
                    >
                        Batal
                    </button>
                </form>
            </div>

            <table class="min-w-full border-collapse border border-gray-200">
                <thead>
                    <tr>
                        <th class="border border-gray-300 p-2">
                            Nama Kegiatan
                        </th>
                        <th class="border border-gray-300 p-2">Kategori</th>
                        <th class="border border-gray-300 p-2">
                            Tanggal Mulai
                        </th>
                        <th class="border border-gray-300 p-2">
                            Tanggal Selesai
                        </th>
                        <th class="border border-gray-300 p-2">Lokasi</th>
                        <th class="border border-gray-300 p-2">Status</th>
                        <th class="border border-gray-300 p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kegiatan as $item)
                        <tr>
                            <td class="border border-gray-300 p-2">
                                {{ $item->nama_kegiatan }}
                            </td>
                            <td class="border border-gray-300 p-2">
                                {{ $item->kategori->nama_kategori }}
                            </td>
                            <td class="border border-gray-300 p-2">
                                {{ $item->tanggal_mulai }}
                            </td>
                            <td class="border border-gray-300 p-2">
                                {{ $item->tanggal_selesai ?? "-" }}
                            </td>
                            <td class="border border-gray-300 p-2">
                                {{ $item->lokasi }}
                            </td>
                            <td class="border border-gray-300 p-2">
                                {{ $item->status ? "Berlangsung" : "Selesai" }}
                            </td>
                            <td class="border border-gray-300 p-5 text-center">
                                <button
                                    onclick="openEditModal('{{ $item->id }}', '{{ $item->nama_kegiatan }}', '{{ $item->kategori_id }}', '{{ $item->tanggal_mulai }}', '{{ $item->tanggal_selesai }}', '{{ $item->lokasi }}', '{{ $item->status }}')"
                                    class="rounded-lg bg-blue-500 px-8 py-1 text-white hover:bg-blue-700"
                                >
                                    Edit
                                </button>
                                <form
                                    action="{{ route("kegiatan.destroy", $item->id) }}"
                                    method="POST"
                                    class="inline-block"
                                >
                                    @csrf
                                    @method("DELETE")
                                    <button
                                        type="submit"
                                        class="rounded-lg bg-red-500 px-5 py-1 text-white hover:bg-red-700"
                                    >
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div
            id="editModal"
            class="fixed inset-0 hidden items-center justify-center bg-gray-900 bg-opacity-50"
        >
            <div class="w-1/2 rounded-lg bg-white p-6">
                <h2 class="mb-4 text-lg font-semibold">Edit Kegiatan</h2>
                <form id="editForm" method="POST">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="id" id="editId" />
                    <div class="mb-2">
                        <label for="editNamaKegiatan" class="block">
                            Nama Kegiatan
                        </label>
                        <input
                            type="text"
                            id="editNamaKegiatan"
                            name="nama_kegiatan"
                            class="w-full border p-2"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label for="editKategoriId" class="block">
                            Kategori
                        </label>
                        <select
                            id="editKategoriId"
                            name="kategori_id"
                            class="w-full border p-2"
                            required
                        >
                            @foreach ($kategori as $kat)
                                <option value="{{ $kat->id }}">
                                    {{ $kat->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="editTanggalMulai" class="block">
                            Tanggal Mulai
                        </label>
                        <input
                            type="date"
                            id="editTanggalMulai"
                            name="tanggal_mulai"
                            class="w-full border p-2"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label for="editTanggalSelesai" class="block">
                            Tanggal Selesai
                        </label>
                        <input
                            type="date"
                            id="editTanggalSelesai"
                            name="tanggal_selesai"
                            class="w-full border p-2"
                        />
                    </div>
                    <div class="mb-2">
                        <label for="editLokasi" class="block">Lokasi</label>
                        <input
                            type="text"
                            id="editLokasi"
                            name="lokasi"
                            class="w-full border p-2"
                            required
                        />
                    </div>
                    <div class="mb-2">
                        <label for="editStatus" class="block">Status</label>
                        <select
                            id="editStatus"
                            name="status"
                            class="w-full border p-2"
                        >
                            <option value="1">Berlangsung</option>
                            <option value="0">Selesai</option>
                        </select>
                    </div>
                    <button
                        type="submit"
                        class="rounded bg-green-500 px-4 py-2 text-white"
                    >
                        Simpan
                    </button>
                    <button
                        type="button"
                        onclick="closeEditModal()"
                        class="rounded bg-red-500 px-4 py-2 text-white"
                    >
                        Batal
                    </button>
                </form>
            </div>
        </div>

        <script>
            function toggleForm() {
                const form = document.getElementById('formTambahKegiatan');
                form.style.display =
                    form.style.display === 'none' ? 'block' : 'none';
            }

            function openEditModal(
                id,
                nama,
                kategori_id,
                tanggal_mulai,
                tanggal_selesai,
                lokasi,
                status,
            ) {
                document.getElementById('editNamaKegiatan').value = nama;
                document.getElementById('editKategoriId').value = kategori_id;
                document.getElementById('editTanggalMulai').value =
                    tanggal_mulai;
                document.getElementById('editTanggalSelesai').value =
                    tanggal_selesai;
                document.getElementById('editLokasi').value = lokasi;
                document.getElementById('editStatus').value = status;

                document.getElementById('editId').value = id;

                const formAction = `/admin/kegiatan/${id}`;
                document.getElementById('editForm').action = formAction;

                document.getElementById('editModal').classList.remove('hidden');
            }

            function closeEditModal() {
                document.getElementById('editModal').classList.add('hidden');
            }
        </script>
    </body>
</html>
