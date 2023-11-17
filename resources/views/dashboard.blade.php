<x-client-layout>
    <div class="w-full flex justify-between min-h-screen">
        <div class="w-1/5 min-h-screen border-r border-black pt-10 px-4">
            <div>
                <div class="text-2xl font-semibold py-4">Author of the Week</div>
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
                    {{-- <div class="w-full text-right text-blue-600">
                        <a href="">See all</a>
                    </div> --}}
                </ul>
            </div>
            <div>
                <div class="text-2xl font-semibold py-4">Book of the Week</div>
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
            </div>
        </div>
        <div class="w-full px-8 pt-4 flex flex-col gap-2">
            <div class="tracking-wider border-b-4 py-2">
                <div class="text-3xl font-semibold "> Welcome in Reebook, {{ Auth::user()->name }}</div>
                <div class="text-lg font-medium ">Baca dan tulislah review kamu</div>
            </div>
            <div class="w-full flex flex-col gap-2">
                <div class="text-3xl font-semibold py-4"> Recommendation Books </div>
                <div class="w-full grid grid-cols-4 ml-4">
                    <div class="swiper w-[75vw] py-4 px-4">
                        <div class="swiper-wrapper w-full">
                            @foreach ($books as $book)
                                <div class="swiper-slide w-56 mx-4">
                                    <a href="{{ route('book.details', $book->bookTitle) }}">
                                        <div class="w-60 bg-white border border-gray-200 rounded-lg shadow-xl">
                                            <img style="background-size: cover; object-position: center;"
                                                class="w-full h-56"
                                                src="{{ asset('storage/books_image/' . $book->bookImage) }}"
                                                alt="product image" />
                                            <div class="px-4">
                                                <div class="text-base font-bold text-gray-600 truncate">
                                                    <span class="text-sm">
                                                        @foreach ($book->genres as $index => $genre)
                                                            <span>{{ $genre->genreName }}</span>
                                                            {{ $index < count($book->genres) - 1 ? ', ' : '' }}
                                                        @endforeach
                                                    </span>
                                                </div>
                                                <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                                    {{ $book->bookTitle }}</h5>
                                                <p class="text-base font-bold text-gray-500">by <span
                                                        class="text-lg text-gray-600">{{ $book->author->authorName }}</span>
                                                </p>
                                                <div class="w-full flex justify-between items-center mt-2.5 mb-5">
                                                    <div class="flex">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $book->averageRating)
                                                                <svg class="w-3.5 h-3.5 text-yellow-300 mr-1"
                                                                    aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @else
                                                                <svg class="w-3.5 h-3.5 text-gray-200 dark:text-gray-600"
                                                                    aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <span
                                                        class="text-xs font-semibold px-2 rounded shadow-md hover:bg-gray-200 ">
                                                        {{ number_format($book->averageRating, 2) }} out of
                                                        {{ number_format(5, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col gap-2">
                <div class="text-3xl font-semibold py-4"> Latest Books </div>
                <div class="w-full grid grid-cols-4 ml-4">
                    <div class="swiper w-[75vw] py-4 px-4">
                        <div class="swiper-wrapper w-full">
                            @foreach ($books as $book)
                                <div class="swiper-slide w-56 mx-4">
                                    <a href="{{ route('book.details', $book->bookTitle) }}">
                                        <div class="w-60 bg-white border border-gray-200 rounded-lg shadow-xl">
                                            <img style="background-size: cover; object-position: center;"
                                                class="w-full h-56"
                                                src="{{ asset('storage/books_image/' . $book->bookImage) }}"
                                                alt="product image" />
                                            <div class="px-4">
                                                <div class="text-base font-bold text-gray-600 truncate">
                                                    <span class="text-sm">
                                                        @foreach ($book->genres as $index => $genre)
                                                            <!--$index itu untuk urutan array 0 hingga sekian -->
                                                            <span>{{ $genre->genreName }}</span>
                                                            {{ $index < count($book->genres) - 1 ? ', ' : '' }}
                                                        @endforeach
                                                    </span>
                                                </div>
                                                <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                                    {{ $book->bookTitle }}</h5>
                                                <p class="text-base font-bold text-gray-500">by <span
                                                        class="text-lg text-gray-600">{{ $book->author->authorName }}</span>
                                                </p>
                                                <div class="w-full flex justify-between items-center mt-2.5 mb-5">
                                                    <div class="flex">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $book->averageRating)
                                                                <svg class="w-3.5 h-3.5 text-yellow-300 mr-1"
                                                                    aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @else
                                                                <svg class="w-3.5 h-3.5 text-gray-200 dark:text-gray-600"
                                                                    aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <span
                                                        class="text-xs font-semibold px-2 rounded shadow-md hover:bg-gray-200">
                                                        {{ number_format($book->averageRating, 2) }} out of
                                                        {{ number_format(5, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col gap-2">
                <div class="text-3xl font-semibold py-4">Recommendation Categories</div>
                <div class="w-full ml-4">
                    <div class="swiper w-[72.5vw] py-4 px-4">
                        <div class="swiper-wrapper w-full">
                            @foreach ($genres as $genre)
                                <div class="swiper-slide w-72">
                                    <a href="{{ route('book.genre', ['genreId' => $genre->genreName]) }}">
                                        <div class="w-64 border border-black h-24 rounded">
                                            <div class="w-full flex justify-between ">
                                                <div class="px-5 py-2">
                                                    <div class="text-base font-bold text-gray-600">
                                                        {{ $genre->genreName }}
                                                    </div>
                                                </div>
                                                <div class="w-56 h-24">
                                                    <img class="w-full h-full"
                                                        src="{{ asset('storage/genre_image/' . $genre->genreImage) }}"
                                                        alt="genre image" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col gap-2">
                <div class="text-3xl font-semibold py-4">Popular Discussion </div>
                <div class="mt-4">
                    <div class="swiper w-[72vw] py-4 px-8">
                        <div class="swiper-wrapper w-full">
                            @foreach ($discusses as $discuss)
                                <div class="swiper-slide w-[480px] mt-6">
                                    <a href="{{ route('community.details', $discuss->discuss_id) }}">
                                        <div class="w-[480px] p-4 border rounded-lg bg-white shadow-lg">
                                            <div class="relative flex gap-4">
                                                <img src="{{ asset('image/penulis1.jpg') }}"
                                                    class="relative rounded-lg -top-10 -mb-4 bg-white border h-24 w-20"
                                                    alt="" loading="lazy">
                                                <div class="flex flex-col w-full">
                                                    <div class="flex flex-row justify-between">
                                                        <p class="-mt-3 text-lg"
                                                            style=" display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;overflow: hidden;">
                                                            {{ $discuss->discussMessage }} Lorem, ipsum dolor sit amet
                                                            consectetur adipisicing elit. Similique et molestiae vero
                                                            odio cupiditate. Cumque numquam doloribus aliquam aut
                                                            nostrum, sequi repudiandae sit ad, dolores dolor placeat
                                                            modi? Molestias, ducimus!
                                                        </p>
                                                    </div>
                                                    <p class="text-gray-600 text-sm font-semibold mt-2">
                                                        {{ $discuss->totalReply ? $discuss->totalReply : 0 }}
                                                        <span class="text-gray-500 font-medium"> Replies </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="w-full text-right text-gray-400 text-sm">
                                                {{ \Carbon\Carbon::parse($discuss->created_at)->format('j F Y, \a\t g:i A') }}
                                            </p>

                                            <p
                                                class=" text-lg font-medium text-gray-500 whitespace-nowrap truncate overflow-hidden">
                                                By
                                                <span
                                                    class="text-gray-600 font-semibold">{{ $discuss->userDiscuss->name }}</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col gap-2">
                <div class="text-3xl font-semibold py-4"> Popular Reviews </div>
                <div>
                    <div class="swiper w-[72vw] py-4 px-8">
                        <div class="swiper-wrapper w-full">
                            @foreach ($reviewses as $review)
                                @if ($review->repliesReviewBooks->count() > 2)
                                    <div class="swiper-slide w-[400px] mt-6">
                                        <div href="#">
                                            <div class="w-[400px] px-4 py-2 border rounded-lg bg-white shadow-lg">
                                                <div class="relative flex gap-4">
                                                    <img src="{{ asset('image/penulis1.jpg') }}"
                                                        class="relative rounded-lg -top-8 -mb-4 bg-white border h-24 w-20"
                                                        alt="" loading="lazy">
                                                    <div class="flex flex-col w-full">
                                                        <p class=" text-lg font-bold">By
                                                            {{ $review->userReviewBooks->name }} </p>
                                                        <p
                                                            class=" text-lg font-medium text-gray-500 whitespace-nowrap truncate ">
                                                            <span class="text-gray-600 font-semibold">
                                                                {{ $review->bookReviewBooks->bookTitle }} book </span>
                                                        </p>
                                                        <p class="text-gray-400 text-sm">
                                                            {{ \Carbon\Carbon::parse($review->created_at)->format('j F Y, \a\t g:i A') }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mt-2 text-gray-500"
                                                    style=" display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;overflow: hidden;">
                                                    {{ $review->reviewText }} Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Aliquid temporibus obcaecati
                                                    distinctio odit atque dolor
                                                    unde explicabo iste nam reiciendis quis, officiis itaque dicta et
                                                    autem adipisci qui
                                                    illum voluptatum.</p>
                                                <p class=" text-md font-medium text-gray-500 mt-1">
                                                    <span
                                                        class="text-gray-600 font-semibold">{{ $review->repliesReviewBooks->count() }}</span>
                                                    replies
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-client-layout>
