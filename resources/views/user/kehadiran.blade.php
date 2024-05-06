@extends("partials.sidebar")

@section('profile')
<div class="border-b border-gray-500 pb-3">
    <div class="flex items-center justify-center  mb-2">
        <div class="w-[80px] h-[80px] rounded-full bg-gray-100 text-center py-7">
            <span class="text-lg">F</span>
        </div>
    </div>
    <div class="px-2 py-2">
        <h2 class="text-xl font-bold text-gray-700 text-center">Fikri Dzaki Ali</h2>
        <h2 class="text-sm font-medium text-gray-700 text-center">XI PPLG A</h2>
    </div>
</div>
@endsection

@section('content')
<div class="h-screen  flex justify-center ">
    <div class="mt-[120px]">
        <div class="inline-block py-5 px-4 bg-gray-50 border border-sky-100 rounded-lg ">
            <form action="" method="">
                <div class="mb-2">
                    <h1 class="text-lg font-semibold text-gray-500">Kamis May 2023</h1>
                </div>
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
@endsection