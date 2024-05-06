@extends('partials.sidebar-admin')

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
    <div class="mt-8">
        <div class="mb-2">
            <h2 class="text-center font-bold text-2xl ">Data Akun</h2>

        </div>

        <div>
            <a class="w-[50px] bg-sky-300 py-2 px-5 rounded-lg border border-sky-950 text-sky-50 shadow-lg" href="">Tambah data</a>       
        </div>

        <div class="mb-2 ">         
            <form action="">
                <input class="w-[280px] ml-[325px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2.5" type="text" name="" id="">
                <input class="py-1 border border-gray-400 px-6 text-base bg-sky-300 rounded-lg hover:bg-opacity-95 hover:shadow-lg transition ease-in-out hover:scale-x-95" type="submit" value="cari">
            </form>
        </div>

        <div class="relative shadow-md sm:rounded-lg overflow-x-auto w-full">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50 border-b border-slate-200 ">
                    <tr>
                        <th scope="col" class="px-6 py-2">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Password
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="odd:bg-white even:bg-gray-50  border-b ">
                        <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap ">
                            Fikri Dzaki Ali
                        </th>
                        <td class="px-6 py-3">
                            0889899
                        </td>
                        <td class="px-6 py-3 ">
                            -------
                        </td>
                        <td class="  py-3 whitespace-nowrap">

                            <a href="#" >
                                <span class="font-medium text-gray-300 bg-blue-600 rounded-lg  hover:underline px-4 py-2">Edit</span>
                            </a>
                            
                            <a href="#" class="px-4 py-2 font-medium text-gray-100  bg-red-600 rounded-lg  hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
