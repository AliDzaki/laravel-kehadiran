<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-sky-50">
    <div class="absolute top-4 left-12">
        <a href=""
            class=" py-2 px-4 bg-sky-400 bg-opacity-70 rounded-lg border border-cyan-600 text-sm text-slate-100 hover:shadow-xl hover:shadow-sky-200 transition ease-in-out">kembali</a>

    </div>
    <div class="h-screen  flex justify-center ">

        <div
            class="border border-sky-200 w-[400px]  py-10 px-8 m-[80px] bg-white  shadow-lg rounded-md 
         h-[495px] backdrop-blur-lg">
            <form action="" method="">
                <div class="mb-2 py-2">
                    <h3 class="text-xl font-semibold text-gray-600 text-center ">Tambah Data Siswa</h3>
                    <p class="text-base font-normal text-gray-400 text-center mt-2">Masukanlah data siswa dengan baik!
                    </p>
                </div>
                <div class="mt-2">
                    <label class="block text-base font-medium text-gray-700 " for="nisn">Nisn</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        type="text" name="nisn" id="nisn">
                </div>
                <div class="mt-2">
                    <label for="nama">Nama</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        type="text" name="nama" id="nama">
                </div>
                <div class="mt-2">
                    <label for="JenisKelamin">Jenis Kelamin</label>
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        name="jenis-kelamin" id="JenisKelamin">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="mt-2">
                    <label for="TanggalLahir">Tanggal Lahir</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        type="date" name="TanggalLahir" id="TanggalLahir">
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="py-1 border border-gray-400 px-6 text-base bg-sky-300 rounded-lg hover:bg-opacity-95 hover:shadow-lg transition ease-in-out hover:scale-x-95">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
