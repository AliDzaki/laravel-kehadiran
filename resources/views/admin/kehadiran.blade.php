@extends('partials.sidebar-admin')

@section('content')
    <div class="mt-8">
        <div></div>


        <div class="relative shadow-md sm:rounded-lg overflow-x-auto w-full">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50 border-b border-slate-200 ">
                    <tr>
                        <th scope="col" class="px-6 py-2">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Kehadiran
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
                            19-Maret-2024
                        </td>
                        <td class="px-6 py-3 ">
                            Sakit
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
