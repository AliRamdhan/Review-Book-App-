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
        {{-- RATINGS LIST & GRAFIK --}}
        <div class="w-full flex justify-center gap-4 px-4 my-4">
            <!--RATINGS BOOKS TABLE-->
            <div class="w-full bg-white shadow-xl">
                <div class="w-full mx-auto">
                    <div>
                        <div class="text-xl font-semibold ">Popular Books</div>
                        <div class="text-base font-medium">This is the latest Improvement</div>
                    </div>

                    <div class="font-bold w-8 h-8 border-2 flex justify-center items-center rounded-full">#1</div>
                    <div class="w-full bg-white shadow-md rounded-lg cursor-default ">
                        <div class="flex justify-between items-center gap-2 mt-3 p-3">
                            <div><img src="{{ asset('image/buku1.jpg') }}" alt="images"
                                    style="width:120px;height:120px;"></div>
                            <div>
                                <p class="text-blue-600 font-semibold"> Deploy a Django App Using Gunicorn to App
                                    Platform
                                </p>
                                <div class="w-full text-right mb-2 pr-10">
                                    <p class="text-sm leading-5 font-medium">
                                        author by : Sonali Hirave
                                        <span class="text-sm leading-5 font-medium text-gray-400">
                                            16 April
                                        </span>
                                    </p>
                                </div>
                                <p class="text-sm text-gray-800 font-light "> Build a Python app using Django and
                                    then
                                    deploy
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
                                            <img class="rounded-full w-6 h-6 border border-white"
                                                src="image/penulis1.jpg" alt="">
                                            <img class="rounded-full w-6 h-6 border border-white"
                                                src="image/penulis1.jpg" alt="">
                                        </div>
                                        <div class="text-sm text-gray-500 font-semibold">
                                            5 Review
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--RATINGS GRAFIK-->
            <div class="w-full bg-white shadow-xl">
                <!-- statistik ratings category-->
                <div>
                    <div class="text-xl font-semibold ">Category Ratings</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>
                @include('Admin.partials.chart.category-books-ratings')
            </div>
        </div>
        {{-- CATEGORY & RECENT --}}
        <div class="w-full flex justify-center gap-4 px-4 my-4">
            <!-- CATEGORY BOOKS-->
            <div class="w-full bg-white shadow-xl border border-black">
                <div>
                    <div class="text-xl font-semibold ">Category Books</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>
                <!--jumlah buku ditiap category-->
                @include('Admin.partials.chart.books-category-data')
            </div>
            <!--UPDATE-AN RECENT BOOKS CREATE-->
            <div class="w-full bg-white shadow-xl">
                <div class="w-full mx-auto">
                    <div>
                        <div class="text-xl font-semibold ">Recent Books</div>
                        <div class="text-base font-medium">This is the latest Improvement</div>
                    </div>
                    <div class="font-bold w-8 h-8 border-2 flex justify-center items-center rounded-full">#1</div>
                    <div class="w-full bg-white shadow-md rounded-lg cursor-default ">
                        <div class="flex justify-between items-center gap-2 mt-3 p-3">
                            <div><img src="{{ asset('image/buku1.jpg') }}" alt="images"
                                    style="width:120px;height:120px;"></div>
                            <div>
                                <p class="text-blue-600 font-semibold"> Deploy a Django App Using Gunicorn to App
                                    Platform
                                </p>
                                <div class="w-full text-right mb-2 pr-10">
                                    <p class="text-sm leading-5 font-medium">
                                        author by : Sonali Hirave
                                        <span class="text-sm leading-5 font-medium text-gray-400">
                                            16 April
                                        </span>
                                    </p>
                                </div>
                                <p class="text-sm text-gray-800 font-light "> Build a Python app using Django and
                                    then
                                    deploy
                                    the app to App Platform using a Gunicorn HTTP server. </p>
                                <div class="mt-2">
                                    <p class="text-sm leading-5 font-medium">
                                        Published by : Sonali Hirave
                                        <span class="text-sm leading-5 font-medium text-gray-400">
                                            at 16 April
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- CRUD BOOKS --}}
        <div class="w-full px-4 py-4 flex justify-center">
            <div class="container bg-white">
                <div class="w-full">
                    <div class="bg-white">
                        <div class="w-full flex justify-between items-center py-4">
                            <div class="text-3xl font-bold">CRUD BOOKS</div>
                            <div>
                                <a href="{{ route('page-create.books') }}">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3.5 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                                        + </button>
                                </a>
                            </div>
                        </div>
                        <table class="text-left w-full border-collapse border-b-2">
                            <thead class="bg-gray-600">
                                <tr>
                                    <th
                                        class="py-4 px-6 font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Titles</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Images</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Synopsis</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Pages</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Authors</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Genres</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Languages</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Publishers</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($book as $item)
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">{{ $item->bookTitle }}</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            <img src="{{ asset('storage/books_image/' . $item->bookImage) }}"
                                                alt="">
                                        </td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            {{ $item->bookSynopsis }}
                                        </td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            {{ $item->bookPages }}
                                        </td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            {{ $item->author->authorName ?? 'N/A' }}
                                        </td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            @foreach ($item->genres as $genre)
                                                <span>{{ $genre->genreName }}</span>
                                            @endforeach
                                        </td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            @foreach ($item->languages as $language)
                                                <span>{{ $language->languageName }}</span>
                                            @endforeach
                                        </td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            {{ $item->publisher->publisherName }}
                                        </td>
                                        <td class="flex justify-between">
                                            <button type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
                                            <button type="button"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="w-full text-right">
                            <a href="#">
                                <div class="text-blue-600 text-md font-medium">
                                    See All
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=""></div>
    </div>
</x-admin-layout>
