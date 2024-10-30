<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Kegiatan</title>

    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white h-screen flex items-center justify-center">

    <!-- Modal Trigger -->
    <button id="openModalButton" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        Buat Kegiatan
    </button>

    <!-- Modal -->
    <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg max-w-4xl w-full">
            <div class="flex justify-between">
                <!-- Left Side -->
                <div class="w-1/2 pr-2">
                    <div class="mb-4">
                        <label for="eventName" class="block mb-2 text-sm font-medium">Nama Kegiatan</label>
                        <input type="text" id="eventName" class="bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2" placeholder="Masukkan nama kegiatan" required>
                    </div>
                    <div class="mb-4">
                        <label for="organizer" class="block mb-2 text-sm font-medium">Penyelenggara Kegiatan</label>
                        <input type="text" id="organizer" class="bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2" placeholder="Masukkan penyelenggara" required>
                    </div>
                    <div class="mb-4">
                        <label for="quota" class="block mb-2 text-sm font-medium">Kuota Kegiatan</label>
                        <input type="number" id="quota" class="bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2" placeholder="Masukkan kuota" required>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="w-1/2 pl-2">
                    <div class="mb-4">
                        <label for="type" class="block mb-2 text-sm font-medium">Jenis Kegiatan</label>
                        <select id="type" class="bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2" required>
                            <option value="">Pilih jenis kegiatan</option>
                            <option value="seminar">Seminar</option>
                            <option value="workshop">Workshop</option>
                            <option value="webinar">Webinar</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="speaker" class="block mb-2 text-sm font-medium">Pemateri</label>
                        <input type="text" id="speaker" class="bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2" placeholder="Masukkan nama pemateri" required>
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block mb-2 text-sm font-medium">Tanggal Dilaksanakan</label>
                        <input type="date" id="date" class="bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2" required>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label for="description" class="block mb-2 text-sm font-medium">Deskripsi</label>
                <textarea id="description" class="bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2" rows="4" placeholder="Tulis deskripsi kegiatan di sini"></textarea>
            </div>

            <div class="mb-4">
                <label for="material" class="block mb-2 text-sm font-medium">Materi (Upload File)</label>
                <input type="file" id="material" class="bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2">
            </div>

            <div class="mb-4">
                <label for="poster" class="block mb-2 text-sm font-medium">Poster</label>
                <input type="file" id="poster" class="bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2">
            </div>

            <div class="flex justify-end">
                <button type="button" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded mr-2" id="closeModalButton">Batal</button>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Simpan Kegiatan</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('openModalButton').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });

        document.getElementById('closeModalButton').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });
    </script>
</body>
</html>
