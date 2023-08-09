@extends('layouts.parent')

@section('title', 'Home')

@section('content')
    <section class="mt-16">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('template_elerning/assets/banner-1.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('template_elerning/assets/banner-2.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('template_elerning/assets/banner-3.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>


        <section class="mt-10" id="about">
            <div class="flex justify-between gap-5 p-10 items-center">
                <div class="gap-5 flex flex-col w-1/2">
                    <p class="text-4xl font-black text-gray-900">About E-Learning</p>
                    <p class="text-xl font-medium text-gray-900">E-Learning merupakan Sistem pembelajaran elektronik atau e-pembelajaran (Inggris: Electronic learning disingkat E-learning) dapat didefinisikan sebagai sebuah bentuk teknologi informasi yang diterapkan di bidang pendidikan berupa website yang dapat diakses di mana saja.</p>
                    <div class="mt-10">
                        <a target="_blank" href="https://id.wikipedia.org/wiki/Pendidikan_jarak_jauh#:~:text=Pembelajaran%20elektronik%20(e%2Dlearning),jauh%20selama%20Pandemi%20COVID%2D19." class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Cari Tau Tentang E-Learning</a>
                    </div>
                </div>
                <div class="w-1/2">
                    <img src="{{asset('template_elerning/assets/about-elerning.jpg')}}" class="w-full rounded-lg" alt="about-elerning">
                </div>
            </div>
        </section>

        <section class="mt-10">
            <div class="flex flex-row-reverse justify-between gap-5 p-10 items-center">
                <div class="gap-5 flex flex-col w-1/2">
                    <p class="text-4xl font-black text-gray-900">Kelebihan E-Learning</p>
                    <p class="text-xl font-medium text-gray-900">
                        Dapat diakses dengan mudah,
                        Biaya lebih terjangkau,
                        Waktu belajar fleksibel,
                        Wawasan yang luas.
                    </p>
                    <div class="mt-10">
                        <a target="_blank" href="https://id.wikipedia.org/wiki/Pendidikan_jarak_jauh#:~:text=Pembelajaran%20elektronik%20(e%2Dlearning),jauh%20selama%20Pandemi%20COVID%2D19." class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Cari Tau Tentang E-Learning</a>
                    </div>
                </div>
                <div class="w-1/2">
                    <img src="{{asset('template_elerning/assets/excess-elerning.jpeg')}}" class="w-full rounded-lg" alt="about-elerning">
                </div>
            </div>
        </section>

        <section class="mt-10">
            <div class="flex justify-between gap-5 p-10 items-center">
                <div class="gap-5 flex flex-col w-1/2">
                    <p class="text-4xl font-black text-gray-900">Kekurangan E-Learning</p>
                    <p class="text-xl font-medium text-gray-900">
                        Keterbatasan akses internet, Berkurangnya interaksi dengan pengajar, Pemahaman terhadap materi, Minimnya Pengawasan dalam Belajar.
                    </p>
                    <div class="mt-10">
                        <a target="_blank" href="https://id.wikipedia.org/wiki/Pendidikan_jarak_jauh#:~:text=Pembelajaran%20elektronik%20(e%2Dlearning),jauh%20selama%20Pandemi%20COVID%2D19." class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Cari Tau Tentang E-Learning</a>
                    </div>
                </div>
                <div class="w-1/2">
                    <img src="{{asset('template_elerning/assets/lack-elearning.jpeg')}}" class="w-full rounded-lg" alt="about-elerning">
                </div>
            </div>
        </section>

        <section class="my-20">
            <p class="text-6xl font-black text-gray-900 text-center my-8">Pengajar</p>
            <div class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <!-- <img class="rounded-t-lg" src="./assets/teacher-1.jpeg" alt="" /> -->
                                    <div class="w-full h-56" style="background-size: cover; background-image: url('{{asset('template_elerning/assets/teacher-1.jpeg')}}');"></div>
                                </a>
                                <div class="p-5">
                                    <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mbak Nayla</h5>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <!-- <img class="rounded-t-lg" src="./assets/teacher-2.jpeg" alt="" /> -->
                                    <div class="w-full h-56" style="background-size: cover; background-image: url('{{asset('template_elerning/assets/teacher-2.jpeg')}}');"></div>
                                </a>
                                <div class="p-5">
                                    <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mbak Kayla</h5>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </section>
@endsection

@push('add-script')
    <script>
        var splide = new Splide( '.splide', {
        type   : 'loop',
        perPage: 3,
        perMove: 1,
        } );

        splide.mount();

        let year = new Date().getFullYear();
        document.getElementById('year').innerHTML = year;
    </script>
@endpush
