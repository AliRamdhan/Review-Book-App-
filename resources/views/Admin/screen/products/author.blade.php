<x-admin-layout>
    <div class="w-full min-h-screen flex flex-col items-center">

        <div class="w-full flex justify-center gap-4 px-4 my-4">
            {{-- RATINGS AUTHORS OF WEEK --}}
            <div class="w-full bg-white shadow-xl px-2 border-2">
                <div>
                    <div class="text-xl font-semibold ">Popular Authors</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>
                <div class="w-full bg-white shadow-md rounded-lg cursor-default ">
                    <div class="flex justify-between items-center gap-2 mt-3 p-3">
                        <div><img src="{{ asset('image/buku1.jpg') }}" alt="images" style="width:120px;height:120px;">
                        </div>
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
                                        <img class="rounded-full w-6 h-6 border border-white" src="image/penulis1.jpg"
                                            alt="">
                                        <img class="rounded-full w-6 h-6 border border-white" src="image/penulis1.jpg"
                                            alt="">
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
            {{-- RATINGS GRAFIK --}}
            <div class="w-full bg-white shadow-xl border border-black">
                <div>
                    <div class="text-xl font-semibold">Books Authors Data</div>
                    <div class="text-base font-medium">This is the latest Improvement</div>
                </div>
                <!-- banyak buku dari tiap" penulis-->
                @include('Admin.partials.chart.book-authors-data')
            </div>
        </div>

        <div class="w-full flex justify-center">
            <div class="w-full flex justify-center gap-4 px-4 my-4">
                <div class="w-full flex flex-col justify-center bg-white shadow-xl px-2 border-2">
                    <div class="w-full flex justify-between items-center py-2 px-4">
                        <div class="text-3xl font-bold">CRUD Authors</div>
                        <div>
                            <a href="{{ route('page-create.authors') }}">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3.5 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                                    + </button>
                            </a>
                        </div>
                    </div>
                    <table class="text-left w-full">
                        <thead class="bg-gray-600">
                            <tr>
                                <th class="py-4 px-6 font-bold uppercase text-sm text-white border-b border-grey-light">
                                    Name</th>
                                <th
                                    class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                    Images</th>
                                <th
                                    class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                    Description</th>
                                <th
                                    class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                    Books of Author</th>
                                <th
                                    class="py-4 px-6 text-center font-bold uppercase text-sm text-white border-b border-grey-light">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($author as $item)
                                <tr class="border border-black">
                                    <td class="py-2 px-6 text-center">{{ $item->authorName }}</td>
                                    <td class="py-2 px-6 w-32 h-32 flex justify-center items-center text-center border border-black">
                                        <img class="h-[80px] w-32"
                                            src="{{ asset('storage/authors_image/' . $item->authorImage) }}"
                                            alt="">
                                    </td>
                                    <td class="text-center">
                                        {{ $item->authorDescription }}
                                    </td>
                                    <td class="py-2 h-32 w-full border border-black flex justify-around items-center">
                                            <a href="{{ route('page-update.author', $item->author_id) }}">
                                                <button
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    Update</button>
                                            </a>
                                            <form method="POST" action="{{ route('delete.author', [$item->author_id]) }}"
                                                onsubmit="return confirm('Are you sure you want to delete this author?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                                            </form>
                                    </td>
                                    <td class="text-center">
                                        {{ $item->authorDescription }}
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
</x-admin-layout>
