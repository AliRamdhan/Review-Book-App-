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
        <div class="w-full flex justify-center gap-4 px-4 my-4">
            {{-- RATINGS BOOKS TABLE --}}
            <div class="w-full flex flex-col bg-white shadow-xl px-2 border-2">
                <div class="w-full flex justify-between items-center p-4">
                    <div class="text-3xl font-bold">List Genre</div>
                    <div>
                        <a href="{{ route('page-create.genre') }}">
                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3.5 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                                + </button>
                        </a>
                    </div>
                </div>
                <div class="bg-white my-6">
                    <table class="text-left w-full border-collapse">
                        <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead class="bg-gray-600">
                            <tr>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-white border-b border-grey-light">
                                    Genre</th>
                                <th
                                    class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                    Description</th>
                                <th
                                    class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                    Image</th>
                                <th
                                    class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="border-2">
                            @foreach ($genre as $item)
                                <tr>
                                    <td class="py-2 px-6 border-b border-grey-light">{{ $item->genreName }}</td>
                                    <td class="py-2 px-6 text-center border-b border-grey-light">
                                        {{ $item->genreDescription }}
                                    </td>
                                    <td
                                        class="py-2 px-6 text-center border-b border-grey-light w-20 h-20 border border-black">
                                        <img src="{{ asset('storage/genre_Image/' . $item->genreImage) }}"
                                            alt="Genre" class="w-full h-full object-cover">
                                    </td>
                                    <td class="py-2 h-20 w-full flex justify-around items-center">
                                        <a href="{{ route('page-update.genre', $item->genre_id) }}">
                                            <button type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-20 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
                                        </a>
                                        <form method="POST" action="{{ route('delete.genre', [$item->genre_id]) }}"
                                            onsubmit="return confirm('Are you sure you want to delete this genre?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm w-20 py-1.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            {{-- RATINGS GRAFIK --}}
            <div class="w-full bg-white shadow-xl border border-black">
                <div>
                    <div class="text-xl font-semibold">Genre Book Data</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>
                <!-- banyaknya buku dari tiap genre -->
                @include('Admin.partials.chart.genre-book-data')
            </div>
        </div>

        {{-- RATINGS LIST & GRAFIK LANGUAGE --}}
        <div class="w-full flex justify-center gap-4 px-4 my-4">
            {{-- LANGUAGE GRAFIK --}}
            <div class="w-full bg-white shadow-xl">
                <div>
                    <div class="text-xl font-semibold">Language Book Data</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>
                <!-- banyaknya buku dari tiap bahasa -->
                @include('Admin.partials.chart.language-book-data')
            </div>
            {{-- LIST LANGUAGE TABLE --}}
            <div class="w-full flex justify-center gap-4 px-4 my-4">
                <div class="w-full flex flex-col bg-white shadow-xl px-2 border-2">
                    <div class="w-full flex justify-between items-center p-4">
                        <div class="text-3xl font-bold">List Language</div>
                        <div>
                            <a href="{{ route('page.language') }}">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3.5 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                                    + </button>
                            </a>
                        </div>
                    </div>
                    <div class="bg-white my-6">
                        <table class="text-left w-full border-collapse">
                            <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead class="bg-gray-600">
                                <tr>
                                    <th
                                        class="py-4 px-6 font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Language</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="border-2">
                                @foreach ($language as $item)
                                    <tr>
                                        <td class="py-2 px-6 border-b border-grey-light">{{ $item->languageName }}</td>
                                        <td class="py-2 w-full flex justify-around items-center">
                                            <a href="{{ route('page-update.language', $item->language_id) }}">
                                                <button type="button"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-20 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
                                            </a>
                                            <form method="POST"
                                                action="{{ route('delete.language', [$item->language_id]) }}"
                                                onsubmit="return confirm('Are you sure you want to delete this language?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm w-20 py-1.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

        {{-- RATINGS LIST & GRAFIK PUBLISHER --}}
        <div class="w-full flex justify-center gap-4 px-4 my-4">
            {{-- LIST PUBLISHER TABLE --}}
            <div class="w-full flex justify-center gap-4 px-4 my-4">
                <div class="w-full flex flex-col bg-white shadow-xl px-2 border-2">
                    <div class="w-full flex justify-between items-center p-4">
                        <div class="text-3xl font-bold">List Publisher</div>
                        <div>
                            <a href="{{ route('page.publisher') }}">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3.5 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                                    + </button>
                            </a>
                        </div>
                    </div>
                    <div class="bg-white my-6">
                        <table class="text-left w-full border-collapse">
                            <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead class="bg-gray-600">
                                <tr>
                                    <th
                                        class="py-4 px-6 font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Name</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Description</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Address</th>
                                    <th
                                        class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="border-2">
                                @foreach ($publisher as $item)
                                    <tr>
                                        <td class="py-2 px-6 border-b border-grey-light">{{ $item->publisherName }}
                                        </td>
                                        <td class="py-2 px-6 text-center border-b border-grey-light">
                                            {{ $item->publisherDescription }}
                                        </td>
                                        <td class="py-2 px-6 text-center border-b border-grey-light">
                                            {{ $item->publisherAddress }}
                                        </td>
                                        <td class="py-2 w-full flex justify-around items-center gap-2">
                                            <a href="{{ route('page-update.publisher', $item->publisher_id) }}">
                                                <button type="button"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-20 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
                                            </a>
                                            <form method="POST"
                                                action="{{ route('delete.publisher', [$item->publisher_id]) }}"
                                                onsubmit="return confirm('Are you sure you want to delete this publisher?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm w-20 py-1.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            {{-- RATINGS GRAFIK --}}
            <div class="w-full bg-white shadow-xl">
                <div>
                    <div class="text-xl font-semibold">Publisher Book Data</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>
                <!-- banyaknya buku dari tiap bahasa -->
                @include('Admin.partials.chart.language-book-data')
            </div>
        </div>


    </div>
</x-admin-layout>
