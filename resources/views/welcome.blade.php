<x-guest-layout>
    <div class="w-full flex items-center justify-center h-screen">
        <div class="w-3/5 pl-8 flex justify-between items-center h-screen ">
            @include('partials.search')
        </div>
        <div class="w-2/5 overflow-hidden flex justify-center items-center mt-12 mr-8">
            @include('components.slider.slider-book')
        </div>
    </div>
    <div class="w-full flex justify-center min-h-screen border-t-2">
        <div class="w-80 px-2 border-r-2">
            <div class="flex flex-col gap-4 mt-5">
                <div class="w-full px-2">
                    <h2 class="font-bold text-xl">Author of the Week</h2>
                    <ul class="flex flex-col divide-y w-64">
                        @foreach ($authorsOfWeek as $author)
                            <li class="flex flex-row">
                                <a href="#" class="flex-1">
                                    <div
                                        class="flex-1 select-none cursor-pointer hover:bg-gray-50 flex items-center gap-4 p-2">
                                        <img class="w-12 h-12 rounded-full"
                                            src="{{ asset('storage/authors_image/' . $author->authorImage) }}"
                                            alt="Image">
                                        <div class="font-semibold text-lg">{{ $author->authorName }}</div>
                                    </div>
                                    {{-- <p>Total Reviews: {{ $author->totalReviews }}</p>
                                <p>Total Replies: {{ $author->totalReplies }}</p> --}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="w-full text-right mt-3">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">See all</a>
                    </div>
                </div>
                <div class="w-full px-2">
                    <h2 class="font-bold text-xl">Book of the Week</h2>
                    <ul class="flex w-full h-20 flex-col gap-5">
                        @foreach ($booksOfWeek->sortByDesc('review_count')->take(5) as $book)
                            <a href="{{ route('book.details', $book->bookTitle) }}" class="w-full">
                                <li class="flex justify-center items-center">
                                    <div
                                        class="select-none cursor-pointer hover:bg-gray-50 flex items-center p-2 w-full gap-4">
                                        <img src="{{ asset('storage/books_image/' . $book->bookImage) }}" alt="Image"
                                            class="w-18 h-20">
                                        <div>
                                            <div class="font-semibold text-lg">{{ $book->bookTitle }}</div>
                                            <div class="font-medium text-sm"><span class="text-gray-500">by</span>
                                                {{ $book->author->authorName }}</div>
                                            {{-- <p>Review Count: {{ $book->review_count }}</p>
                                        <p>Reply Count: {{ $book->reply_count }}</p> --}}
                                        </div>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    </ul>

                    <div class="w-full text-right mt-3">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">See all</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full px-4 py-12 flex flex-col justify-between items-center">
            <div class=" grid gap-10 grid-cols-2 popular-books">
                @foreach ($books as $book)
                    <div
                        class="mt-5 mb-12 gap-2 flex justify-between items-center border border-l-0 border-black w-full h-56 rounded-3xl rounded-l-none">
                        <img src="{{ asset('storage/books_image/' . $book->bookImage) }}" alt="product image"
                            class="w-52 h-72 border border-black bg-white">
                        <div class="w-full h-48 flex flex-col justify-evenly">
                            <div class="w-full flex justify-between items-center mt-2.5 mb-5">
                                <div class="flex">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $book->averageRating)
                                            <svg class="w-3.5 h-3.5 text-yellow-300 mr-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                        @else
                                            <svg class="w-3.5 h-3.5 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                        @endif
                                    @endfor
                                </div>
                                <span class="text-xs font-semibold px-2 rounded shadow-md hover:bg-gray-200 ">
                                    {{ number_format($book->averageRating, 2) }} out of
                                    {{ number_format(5, 2) }}</span>
                            </div>
                            <div class="w-full pr-2">
                                <div class="text-lg font-semibold tracking-tight text-gray-900">{{ $book->bookTitle }}
                                </div>
                                <div class="text-base font-medium text-gray-600 truncate">
                                    <span class="text-sm">
                                        @foreach ($book->genres as $index => $genre)
                                            <span>{{ $genre->genreName }}</span>
                                            {{ $index < count($book->genres) - 1 ? ', ' : '' }}
                                        @endforeach
                                    </span>
                                </div>
                                <div class="font-medium"
                                    style=" display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4;overflow: hidden;">
                                    {{ $book->bookSynopsis }}</div>
                            </div>
                            <div>
                                <a href="{{ route('book.details', $book->bookTitle) }}">
                                    <div
                                        class=" text-center p-1.5 w-full mt-2 text-sm font-medium text-black rounded-lg border">
                                        See
                                        More
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="w-full text-right">
                <a href="#" class="text-lg font-medium text-blue-600 hover:underline dark:text-blue-500">See
                    all</a>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col justify-center items-center h-[200px] border-t-2 border-b-2">
        <div class="w-full px-8 flex items-center text-2xl font-bold">Recommended Genre</div>
        <div class="w-full flex justify-center items-center ">
            @include('components.slider.slider-genre')
        </div>
    </div>
    <div class="w-full flex flex-col justify-center items-center h-[400px] border-t-2 border-b-2">
        <div class="w-full px-8 flex items-center text-2xl font-bold">Popular Review</div>
        <div class="w-full flex justify-center items-center ">
            @include('components.slider.slider-recent-review')
        </div>
    </div>
</x-guest-layout>
