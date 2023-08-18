@extends('layouts.app')

@section('title', 'Videos')

@section('content')
<div class="sm:ml-64 bg-gray-900">
    <div class="p-4 rounded-lg mt-14">
        <div class="w-full max-w-screen-xl mx-auto mb-4">
            <!-- Start coding here -->
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                    <div>
                        <h5 class="mr-3 font-semibold dark:text-white">Table Videos</h5>
                        <p class="text-gray-500 dark:text-gray-400">Menampilkan semua video</p>
                    </div>
                    <a href="{{ route('admin.video.create') }}"
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        Add new video
                    </a>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
                <div>
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                        class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">
                        <span class="sr-only">Action button</span>
                        Action
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAction"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-1">
                            <button form="select"
                                class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                Video</button>
                        </div>
                    </div>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search-videos"
                        class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search for videos">
                </div>
            </div>
            @foreach ($videos as $video)
                <form id="remove{{ $video->id }}" action="{{ route('admin.video.destroy', $video->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
            @endforeach
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" onclick="selects(this)" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <form id="select" action="{{ route('admin.video.destroy.all') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @forelse ($videos as $data)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" name="id[{{ $data->id }}]" type="checkbox"
                                            class="chk w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->title }}
                                </th>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($data->price) }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ Str::substr($data->desc, 0, 20) . '...' }}
                                </td>
                                <td class="flex items-center px-6 py-4 space-x-3">
                                    <a href="{{ route('admin.video.show', $data->id) }}"
                                        class="font-medium text-green-600 dark:text-green-500 hover:underline">Detail</a>
                                    <a href="{{ route('admin.video.edit', $data->id) }}"
                                        class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit</a>
                                    <button form="remove{{ $data->id }}" onclick="confirm('Anda yakin ingin menghapus data?') ? setAttribute('type', 'submit') : ''" type="button"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td colspan="5" class="text-center py-5"><p>Data is null</p></td>
                            </tr>
                        @endforelse
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('add-script')
    <script>
        function selects(param) {
            var chk = document.getElementsByClassName('chk');
            for (var i = 0; i < chk.length; i++) {
                if (chk[i].type=='checkbox') {
                    if (!param.checked) {
                        chk[i].checked=false;
                    } else {
                        chk[i].checked=true
                    }
                }
            }
        }
    </script>
@endpush