<x-admin-layout>
    <div class="w-full min-h-screen flex flex-col items-center">
        <div class="w-full px-4 py-4 border-b-2">
            <div class="grid grid-cols-2 row-gap-8 md:grid-cols-4">
                <div class="text-center md:border-r-2">
                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">144K</h6>
                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                        Totals Books
                    </p>
                </div>
                <div class="text-center md:border-r-2">
                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">12.9K</h6>
                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                        Reviews
                    </p>
                </div>
                <div class="text-center md:border-r-2">
                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">48.3K</h6>
                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                        Users
                    </p>
                </div>
                <div class="text-center">
                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">24.5K</h6>
                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                        Cookies
                    </p>
                </div>
            </div>
        </div>
        {{-- RATINGS LIST & GRAFIK GENRE --}}
        <div class="w-full flex justify-center gap-4 my-4">
            {{-- RATINGS BOOKS TABLE --}}
            <div class="w-full flex flex-col bg-white shadow-md px-2 border-2">
                <div class="mb-2 border-b-4">
                    <div class="text-xl font-semibold ">Popular Forum</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>
                <div class="w-full bg-white shadow-xl rounded-lg cursor-default mt-2">
                    <div class="p-3">
                        <p class="text-blue-600 font-semibold"> Deploy a Django App Using Gunicorn to App
                            Platform
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center"><a href="#"
                                    class="w-8 group flex items-center text-gray-500 text-base leading-6 font-medium rounded-full hover:text-gray-500">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </a>
                                <div class="text-sm text-gray-500 font-semibold">
                                    5 Likes
                                </div>

                            </div>

                            <div class="flex items-center">
                                <div class="flex -space-x-2 mr-2">
                                    <img class="rounded-full w-6 h-6 border border-white" src="image/penulis1.jpg"
                                        alt="">
                                    <img class="rounded-full w-6 h-6 border border-white" src="image/penulis1.jpg"
                                        alt="">
                                </div>
                                <div class="text-sm text-gray-500 font-semibold">
                                    5 Reply
                                </div>
                            </div>

                            <p class="text-sm font-medium">
                                author by : Sonali Hirave
                                <span class="text-sm leading-5 font-medium text-gray-400">
                                    16 April
                                </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            {{-- RATINGS GRAFIK --}}
            <div class="w-full bg-white shadow-xl border-2">
                <!-- Pertumbuhan forum discuss-->
                <div>
                    <div class="text-xl font-semibold">Community Data</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>
                <!-- banyaknya buku dari tiap genre -->
                @include('Admin.partials.chart.community-data')
            </div>
        </div>


        <div class="w-full flex flex-col bg-white shadow-md p-2 border-2">
            <div class="flex justify-between items-center mb-2 px-4 border-b-4">
                <div>
                    <div class="text-xl font-semibold ">Community Data</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>

                <div>
                    <div>
                        <button id="filterProgressButton" data-dropdown-toggle="filterMenu"
                            class="font-medium text-lg rounded-lg text-sm w-36 px-2 py-2.5 text-center inline-flex justify-between items-center border-2"
                            type="button">Filter <svg id="toggleFilter" class="w-2.5 h-2.5 ml-2.5 duration-200"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="filterMenu"
                            class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-36 absolute z-10">
                            <ul class="py-2 text-sm flex flex-col gap-1 px-1" aria-labelledby="filterProgressButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 bg-gray-300 rounded-md hover:bg-blue-400">Title
                                        <!--Abjad--></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 bg-gray-300 rounded-md hover:bg-blue-400">Likes
                                        <!--Banyaknya likes--></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 bg-gray-300 rounded-md hover:bg-blue-400">Reply
                                        <!--Banyaknya reply--></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 bg-gray-300 rounded-md hover:bg-blue-400">Penulis
                                        <!--Penulis Abjad--></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 bg-gray-300 rounded-md hover:bg-blue-400">Date
                                        <!--Waktu dibuatnya--></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="w-full bg-white flex flex-col gap-2 shadow-xl border-2 rounded-lg cursor-default p-4">
                <div class="w-full flex justify-between items-center gap-2">
                    <div class="w-4/5 flex justify-between items-center">
                        <p class="text-blue-600 text-lg font-semibold"> Deploy a Django App Using Gunicorn to App
                            Platform
                        </p>
                        <div class="flex items-center">
                            <a href="#"
                                class="w-8 group flex items-center text-gray-500 text-base leading-6 font-medium rounded-full hover:text-gray-500">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </a>
                            <div class="text-md text-gray-500 font-semibold">
                                5 Likes
                            </div>

                        </div>

                        <div class="flex items-center">
                            <div class="flex -space-x-2 mr-2">
                                <img class="rounded-full w-6 h-6 border border-white"
                                    src="{{ asset('image/penulis1.jpg') }}" alt="">
                                <img class="rounded-full w-6 h-6 border border-white"
                                    src="{{ asset('image/penulis1.jpg') }}" alt="">
                            </div>
                            <div class="text-md text-gray-500 font-semibold">
                                5 Reply
                            </div>
                        </div>

                        <p class="text-md font-medium">
                            Sonali Hirave
                        </p>
                        <p class="text-md font-medium">
                            16 April
                        </p>
                    </div>
                    <div class="w-1/5 text-right">
                        <button type="button"
                            class="w-32 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
