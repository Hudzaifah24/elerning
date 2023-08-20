@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
<div class="sm:ml-64 bg-gray-900">
    <div class="p-4 rounded-lg mt-14">
        <div class="w-full max-w-screen-xl mx-auto mb-4">
            <!-- Start coding here -->
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                    <div>
                        <h5 class="mr-3 font-semibold dark:text-white">Detail Transaksi</h5>
                        <p class="text-gray-500 dark:text-gray-400">Menampilkan Data Transaksi</p>
                    </div>
                    <a href="{{ route('admin.transaction.index') }}"
                        class="flex bg-gray-700 items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
            <div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="no_invoice" id="no_invoice"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ $transaction->no_invoice }}" disabled required />
                    <label for="no_invoice"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomer
                        Invoice</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="user_id" id="user_id"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ $transaction->user->name }}" disabled required />
                    <label for="user_id"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                        User</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <div
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        @if ($transaction->status == 'PENDING')
                            <span class="inline-flex items-center bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                                <span class="w-2 h-2 mr-1 bg-yellow-500 rounded-full"></span>
                                {{ $transaction->status }}
                            </span>
                        @elseif ($transaction->status == 'SUCCESS')
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                                {{ $transaction->status }}
                            </span>
                        @else
                            <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                                {{ $transaction->status }}
                            </span>
                        @endif
                    </div>
                    <label for="email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Status</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="amount" id="amount"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="Rp {{ $transaction->amount }}" disabled required />
                    <label for="amount"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="created_at" id="created_at"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ $transaction->created_at }}" disabled required />
                    <label for="created_at"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Waktu
                        Membayar</label>
                </div>
            </div>

            <div class="w-full max-w-screen-xl mx-auto mb-4 mt-10">
                <!-- Start coding here -->
                <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                    <div
                        class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                        <div>
                            <h5 class="mr-3 font-semibold dark:text-white">Table Videos</h5>
                            <p class="text-gray-500 dark:text-gray-400">Menampilkan video yang dibeli</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-center justify-end pb-4 bg-white dark:bg-gray-900">
                    <div>
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
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
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
                        @foreach ($transaction_details as $transaction_detail)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $transaction_detail->video->title }}
                                </th>
                                <td class="px-6 py-4">
                                    Rp {{ $transaction_detail->video->price }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ Str::substr($transaction_detail->video->desc, 0, 15) . '...' }}
                                </td>
                                <td class="flex items-center px-6 py-4 space-x-3">
                                    <a href="{{ route('admin.video.show', $transaction_detail->video->id) }}"
                                        class="font-medium text-green-600 dark:text-green-500 hover:underline">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
