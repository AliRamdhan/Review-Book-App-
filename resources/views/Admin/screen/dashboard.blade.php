<x-admin-layout>
    <div class="w-full min-h-screen mt-20">
        <div class="tracking-normal border-b-2">
            <div class="font-bold text-2xl"> Hello, {{ Auth::user()->name }}</div>
            <div class="font-medium text-xl"> Welcome to Dashboard</div>
        </div>
        <div class="w-full flex justify-center items-center py-2 gap-4">
            <div class="w-4/5">
                <div class="w-full h-96 bg-white rounded-lg shadow-xl px-2">
                    <div class="w-full flex justify-between py-4">
                        <div>
                            <div class="text-xl font-semibold">Daily Progress</div>
                            <div class="text-base font-medium">This is the latest Improvement</div>
                        </div>
                        <div>
                            <button id="filterProgressButton" data-dropdown-toggle="filterMenu"
                                class="font-medium text-lg rounded-lg text-sm w-36 px-2 py-2.5 text-center inline-flex justify-between items-center border-2"
                                type="button">Filter <svg id="toggleFilter" class="w-2.5 h-2.5 ml-2.5 duration-200"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="filterMenu"
                                class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-36 absolute z-10">
                                <ul class="py-2 text-sm flex flex-col gap-1 px-1"
                                    aria-labelledby="filterProgressButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 bg-gray-300 rounded-md hover:bg-blue-400">Today</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 bg-gray-300 rounded-md hover:bg-blue-400">Yesterday</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 bg-gray-300 rounded-md hover:bg-blue-400">Last 7
                                            Days</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 bg-gray-300 rounded-md hover:bg-blue-400">Last 30
                                            Days</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center gap-2">
                        <div class="w-full text-center border border-black">
                            <div class="w-full h-64">
                                {{-- rate : berapa ada yang rate + review tiap waktu --}}
                                @include('Admin.partials.chart.review-data-chart')
                            </div>
                            <div>Reviews</div>
                        </div>
                        <div class="w-full text-center border border-black">
                            <div class="w-full h-64">
                                {{-- rate : berapa ada yang penambahan atau update tiap waktu --}}
                                @include('Admin.partials.chart.book-data-chart')
                            </div>
                            <div> Books</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-2/5">
                <div class="w-full h-96 bg-white rounded-lg shadow-xl p-5">
                    {{-- List ulasan berdasarkan peringkat (bintang), kata kunci, atau tanggal.
                    # tagar --}}
                    <div>User Activity</div>
                    @include('Admin.partials.chart.user-activity')
                </div>
            </div>
        </div>
        <div class="w-full py-2">
            <div class="grid grid-cols-2 row-gap-8 gap-2 md:grid-cols-4 h-28">
                <div class="text-center bg-white rounded-lg shadow-xl flex flex-col justify-center items-center">
                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">144K</h6>
                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                        Totals Books
                    </p>
                </div>
                <div class="text-center bg-white rounded-lg shadow-xl flex flex-col justify-center items-center">
                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">12.9K</h6>
                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                        Reviews
                    </p>
                </div>
                <div class="text-center bg-white rounded-lg shadow-xl flex flex-col justify-center items-center">
                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">48.3K</h6>
                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                        Users
                    </p>
                </div>
                <div class="text-center bg-white rounded-lg shadow-xl flex flex-col justify-center items-center">
                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">24.5K</h6>
                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                        Cookies
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-between py-2 gap-4">
            <div class="w-full min-h-0 border border-black p-3">
                <div class="text-xl font-bold py-3 border-b-4">Popular Review</div>
                <div class="w-full bg-white shadow-md rounded-lg cursor-default p-3 mt-3">
                    <h2 class="font-bold mb-2">#1</h2>
                    <p class="text-blue-600 font-semibold"> Deploy a Django App Using Gunicorn to App Platform
                    </p>
                    <div class="w-full text-right mb-2">
                        <p class="text-sm leading-5 font-medium">
                            by : Sonali Hirave
                            <span class="text-sm leading-5 font-medium text-gray-400">
                                16 April
                            </span>
                        </p>
                    </div>
                    <p class="text-sm text-gray-800 font-light "> Build a Python app using Django and then deploy
                        the app to App Platform using a Gunicorn HTTP server. </p>
                    <div class="flex items-center gap-4 mt-2">
                        <div class="flex items-center"><a href="#"
                                class="w-8 group flex items-center text-gray-500 text-base leading-6 font-medium rounded-full hover:text-gray-500">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
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
                    </div>
                </div>
            </div>
            <div class="w-full min-h-0 border border-black p-3">
                <div class="text-xl font-bold py-3 border-b-4">Popular Discussion</div>
                <div class="w-full bg-white shadow-md rounded-lg cursor-default p-3 mt-3">
                    <h2 class="font-bold mb-2">#1</h2>
                    <p class="text-blue-600 font-semibold"> Deploy a Django App Using Gunicorn to App Platform
                    </p>
                    <div class="w-full text-right mb-2">
                        <p class="text-sm leading-5 font-medium">
                            by : Sonali Hirave
                            <span class="text-sm leading-5 font-medium text-gray-400">
                                16 April
                            </span>
                        </p>
                    </div>
                    <p class="text-sm text-gray-800 font-light "> Build a Python app using Django and then deploy
                        the app to App Platform using a Gunicorn HTTP server. </p>
                    <div class="flex items-center gap-4 mt-2">

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
                                5 Discuss
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full min-h-0 border border-black p-3">
                <div class="text-xl font-bold py-3 border-b-4">Popular Forum</div>
                <div class="w-full bg-white shadow-md rounded-lg cursor-default p-3 mt-4">
                    <h2 class="font-bold mb-2">#1</h2>
                    <p class="font-semibold"> Deploy a Django App Using Gunicorn to App Platform
                    </p>
                    <div class="flex items-center">
                        <div class="flex -space-x-2 mr-2">
                            <img class="rounded-full w-6 h-6 border border-white" src="image/penulis1.jpg"
                                alt="">
                            <img class="rounded-full w-6 h-6 border border-white" src="image/penulis1.jpg"
                                alt="">
                        </div>
                        <div class="text-sm text-gray-500 font-semibold">
                            5 Peoples
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
