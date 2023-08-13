@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 mb-4">
                <div class="flex items-center flex-col rounded-lg justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Balance</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Rp {{ number_format($response->Data->MerchantBalance) }}</p>
                </div>
                <div class="flex items-center flex-col rounded-lg justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Murid</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">100 Orang</p>
                </div>
                <div class="flex items-center flex-col rounded-lg justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Video</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">200 Video</p>
                </div>
            </div>
        </div>
    </div>
@endsection
