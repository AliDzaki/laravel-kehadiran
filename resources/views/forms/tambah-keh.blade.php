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
        <div class="mt-[120px]">
            <div class="inline-block py-5 px-4 bg-gray-50 border border-sky-100 rounded-lg ">
                <form action="" method="">
                    <div class="mb-2">
                        <h3 class="text-xl font-semibold text-gray-600 text-center">Fikri Dzaki Ali</h3>
                        <input type="text" name="" id="" value="0074089" hidden>
                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-x-2 gap-y-3">
                        <div>
                            <input type="radio" name="keterangan" id="Hadir" class="flex-col col-span-12">
                            <label for="Hadir">Hadir</label>
                        </div>
                        <div>
                            <input type="radio" name="keterangan" id="sakit">
                            <label for="sakit">Sakit</label>
                        </div>
                        <div>
                            <input type="radio" name="keterangan" id="izin">
                            <label for="izin">Izin</label>
                        </div>
                        <div>
                            <input type="radio" name="keterangan" id="terlambat">
                            <label for="terlambat">Terlambat</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit"
                            class="py-1 border border-gray-400 px-6 text-base bg-sky-300 rounded-lg hover:bg-opacity-95 hover:shadow-lg transition ease-in-out hover:scale-x-95">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
