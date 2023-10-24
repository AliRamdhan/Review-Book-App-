<x-client-layout>
    @if ($book)

        <div class="w-full flex justify-between min-h-screen">
            <div class="w-2/6 h-screen flex flex-col pt-4">
                {{ $book->book_id }}
                <div class="w-full text-lg text-gray-500 px-4 py-4 flex items-center gap-4"> E-book <span
                        class="w-2 h-2 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>{{ $book->bookPages }}
                    pages
                </div>
                <div class="w-full flex justify-end pt-2">
                    <img src="{{ asset('image/buku1.jpg') }}" alt="images"
                        style="background-size: cover; object-position: center center;"
                        class="w-80 h-[400px] border border-black absolute left-40 bg-white">
                </div>
                <div class="flex flex-col w-64 h-4/5 flex justify-end pb-8 px-4">
                    <div class="flex flex-row">
                        <div class="select-none cursor-pointer hover:bg-gray-50 flex flex-1 items-center p-2">
                            <div class="flex flex-col w-10 justify-center items-center mr-4">
                                <img src="{{ asset('image/buku1.jpg') }}" alt="Image">
                            </div>
                            <div class="flex-1 pl-1 mr-16">
                                <div class="font-medium">dwddwadwa</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col items-center border border-black py-4">
                <div class="w-full px-8 text-3xl font-bold">{{ $book->bookTitle }}</div>
                <div class="w-full flex items-center gap-2 px-16">by <span
                        class="text-left font-semibold">{{ $book->author->authorName }}</span>
                    <span class="w-2 h-2 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                    <div>
                        <!--Rating Book-->
                        <div class="flex items-center">
                            @if ($book->averageRating)
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $book->averageRating)
                                        <svg class="w-4 h-3 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    @else
                                        <svg class="w-4 h-3 text-gray-600" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    @endif
                                @endfor

                                <p class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-500">
                                    {{ number_format($book->averageRating, 2) }} out of {{ number_format(5, 2) }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <span class="w-2 h-2 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                    @php
                        $totalReview = 0;
                        if ($reviews->count() > 0) {
                            $totalReview = $reviews->count();
                        } else {
                            $totalReview;
                        }
                    @endphp
                    <p class="text-sm font-semibold text-gray-900"><span> {{ $totalReview }} </span>
                        reviews</p>
                </div>
                <div class="w-full pl-36 mt-8">
                    <div>
                        <div class="font-bold text-xl">Synopsis</div>
                        <div class="text-gray-700 my-2">
                            {{ $book->bookSynopsis }}
                        </div>
                    </div>
                    <div class="mt-6">
                        <div>
                            <div class="swiper" style="width:58vw; height:80px">
                                <div class="swiper-wrapper w-full">
                                    @foreach ($book->genres as $genre)
                                        <div class="swiper-slide w-1/4">
                                            <div
                                                class="w-44 h-16  flex justify-between items-center rounded border border-black">
                                                <div class="px-3 w-1/2">
                                                    <div class="text-base font-bold text-gray-600">
                                                        {{ $genre->genreName }}
                                                    </div>
                                                </div>
                                                <div class="w-40 h-16">
                                                    <img class="w-full h-full rounded"
                                                        src="{{ asset('storage/genre_Image/' . $genre->genreImage) }}"
                                                        alt="product image" />
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 w-full flex justify-between items-center pr-12">
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Editors </div>
                            <div class="font-semibold text-base">dsadas</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Language</div>
                            <div class="font-semibold text-base">dsadas</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Publisher</div>
                            <div class="font-semibold text-base">dsadas</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Release date</div>
                            <div class="font-semibold text-base">dsadas</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>ISBN</div>
                            <div class="font-semibold text-base">dsadas</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Format</div>
                            <div class="font-semibold text-base">dsadas</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Features</div>
                            <div class="font-semibold text-base">dsadas</div>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-36 px-4">
                    <div class="font-semibold text-2xl">Author</div>
                    <div class="flex flex-col w-64 flex justify-end px-4">
                        <div class="flex flex-row">
                            <div
                                class="select-none cursor-pointer hover:bg-gray-50 flex flex-1 items-center py-2 px-4 gap-3">
                                <img src="{{ asset('storage/authors_image/' . $book->author->authorImage) }}"
                                    alt="" class="rounded-full w-10 h-10">
                                <div class="font-medium">{{ $book->author->authorName }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="pl-8">{{ $book->author->authorDescription }}</div>
                    <div class="w-full py-4 pl-8">
                        <div>
                            <div class="swiper" style="width:58vw; height:340px">
                                <div class="swiper-wrapper w-full">
                                    @foreach ($booksByAuthor as $authorBook)
                                        <div class="swiper-slide w-[240px]">
                                            <div class="w-full bg-white border border-gray-200 rounded-lg shadow">
                                                <a href="#">
                                                    <img style="background-size: cover; object-position: center;"
                                                        class="w-full h-44"
                                                        src="{{ asset('storage/books_image/' . $authorBook->bookImage) }}"
                                                        alt="product image" />
                                                </a>
                                                <div class="px-5">
                                                    <div class="text-base font-bold text-gray-600 truncate">
                                                        <span class="text-sm">
                                                            @foreach ($authorBook->genres as $index => $genre)
                                                                <span>{{ $genre->genreName }}</span>
                                                                {{ $index < count($authorBook->genres) - 1 ? ', ' : '' }}
                                                            @endforeach
                                                        </span>
                                                    </div>
                                                    <a href="#">
                                                        <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                                            {{ $authorBook->bookTitle }}</h5>
                                                    </a>
                                                    <span class="text-base font-bold text-gray-600">by
                                                        {{ $authorBook->author->authorName }}</span>
                                                    <div class="w-full flex justify-between items-center mt-2.5 mb-5">
                                                        <div class="flex">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $authorBook->averageRating)
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
                                                        <span class="text-sm font-medium px-2 text-gray-700">
                                                            {{ number_format($authorBook->averageRating, 2) }} out of
                                                            {{ number_format(5, 2) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full mt-4 px-4">
                    <div class="font-semibold text-2xl">Buku yang terkait</div>
                    <div class="w-full py-4 pl-8">
                        <div>
                            <div class="swiper" style="width:58vw; height:340px">
                                <div class="swiper-wrapper w-full">
                                    @foreach ($relatedBooksByGenre as $bookGenre)
                                        <div class="swiper-slide w-[240px]">
                                            <div class="w-full bg-white border border-gray-200 rounded-lg shadow">
                                                <a href="#">
                                                    <img style="background-size: cover; object-position: center;"
                                                        class="w-full h-44"
                                                        src="{{ asset('storage/books_image/' . $bookGenre->bookImage) }}"
                                                        alt="product image" />
                                                </a>
                                                <div class="px-5">
                                                    <div class="text-base font-bold text-gray-600 truncate">
                                                        <span class="text-sm">
                                                            @foreach ($bookGenre->genres as $index => $genre)
                                                                <span>{{ $genre->genreName }}</span>
                                                                {{ $index < count($bookGenre->genres) - 1 ? ', ' : '' }}
                                                            @endforeach
                                                        </span>
                                                    </div>
                                                    <a href="#">
                                                        <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                                            {{ $bookGenre->bookTitle }}</h5>
                                                    </a>
                                                    <span class="text-base font-bold text-gray-600">by
                                                        {{ $bookGenre->author->authorName }}</span>
                                                    <div class="w-full flex justify-between items-center mt-2.5 mb-5">
                                                        <div class="flex">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $bookGenre->averageRating)
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
                                                        <span class="text-sm font-medium px-2 text-gray-700">
                                                            {{ number_format($bookGenre->averageRating, 2) }} out of
                                                            {{ number_format(5, 2) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-4 border-t border-black ">
                    <div class="w-full px-4">
                        <form class="w-full rounded-lg pt-4"
                            action="{{ route('post.book.review', ['bookId' => $book->book_id]) }}" method="POST">
                            @csrf
                            <div class="flex flex-col">
                                <div class="w-full flex justify-center px-2">
                                    <div class="w-14 h-14">
                                        <img src="{{ asset('image/buku2.jpg') }}" alt="image"
                                            class="w-full h-full rounded-full border border-black">
                                    </div>
                                    <div class="w-full px-4 mb-2">
                                        <textarea
                                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full font-medium placeholder-gray-700 focus:outline-none focus:bg-white p-2"
                                            name="reviewText" placeholder='Type Your Comment' rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="w-full flex gap-4 px-20 ">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <label for="rating-{{ $i }}" class="star text-xl relative">
                                            <input type="radio" name="reviewRates" id="rating-{{ $i }}"
                                                value="{{ $i }}"
                                                class="absolute w-12 h-8 opacity-0 cursor-pointer" />
                                            <div
                                                class="flex justify-center  items-center w-14 rounded-lg text-lg border gap-1">
                                                <span class="">{{ $i }}</span>
                                                <span class="text-2xl text-yellow-500">&#9733;</span>
                                            </div>
                                        </label>
                                    @endfor
                                </div>

                                <div class="w-full flex justify-between px-5">
                                    <div></div>
                                    <button type="submit"
                                        class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100">Post
                                        Comment</button>
                                </div>
                            </div>
                        </form>
                        <!-- Review Book -->
                        <div class="antialiased w-full px-4">
                            <div class="space-y-4">
                                @if ($reviews->count() > 0)
                                    @foreach ($reviews as $review)
                                        <div class="flex">
                                            <div class="flex-shrink-0 mr-3">
                                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                                    src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                                    alt="">
                                            </div>

                                            <div class="flex-1 px-4 py-2 leading-relaxed">
                                                <strong>{{ $review->userReviewBooks->name }}</strong> <span
                                                    class="text-xs text-gray-400 mx-2">3:34
                                                    PM</span>
                                                <span>
                                                    @php
                                                        $reviewRates = $review->reviewRates ?? 0; // Default to 0 if null
                                                    @endphp

                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $reviewRates)
                                                            <span class="text-yellow-400 ">&#9733;</span>
                                                        @else
                                                            <span class="text-gray-400 ">&#9733;</span>
                                                        @endif
                                                    @endfor

                                                    @if ($reviewRates > 0)
                                                        <span
                                                            class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-500">{{ $reviewRates }}
                                                            out of 5</span>
                                                    @else
                                                        <span
                                                            class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-500">
                                                            0 out of 5</span>
                                                    @endif
                                                </span>


                                                <p class="text-sm">
                                                    {{ $review->reviewText }}
                                                </p>
                                                <div class="mt-4 w-60 flex justify-between items-center">
                                                    <div
                                                        class="flex items-center
                                                    buttonReply cursor-pointer">
                                                        @if ($review->replyReviews->count() > 0)
                                                            <div class="flex -space-x-2 mr-2">
                                                                <img class="rounded-full w-6 h-6 border border-white"
                                                                    src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                                                                    alt="">
                                                                <img class="rounded-full w-6 h-6 border border-white"
                                                                    src="https://images.unsplash.com/photo-1513956589380-bad6acb9b9d4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                                                                    alt="">
                                                            </div>

                                                            <div class="text-sm text-gray-500 font-semibold mr-2">
                                                                {{ $review->replyReviews->count() }} Replies
                                                            </div>
                                                        @else
                                                            <div class="text-sm text-gray-500 font-semibold mr-2">
                                                                0 Replies
                                                            </div>
                                                        @endif

                                                        <div class="toggleReplyIcon transition duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-5 w-5 text-gray-800" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div
                                                            class="w-8 group flex items-center text-gray-500 text-base leading-6 font-medium rounded-full cursor-pointer ">
                                                            <svg class="text-center h-7 w-6" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-sm text-gray-500 font-semibold mr-2">
                                                            5 Likes
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Reply Review Book -->
                                                <div class="space-y-4 hidden menuReply transition duration-800">
                                                    <h4
                                                        class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">
                                                        Replies</h4>
                                                    <div class="w-full max-h-[400px] overflow-y-auto">

                                                        @foreach ($review->replyReviews as $replyReview)
                                                            <div></div>
                                                            <div class="flex my-2">
                                                                <div class="flex-shrink-0 mr-3">
                                                                    <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                                                        src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                                                        alt="">
                                                                </div>
                                                                <div
                                                                    class="flex-1 rounded-lg px-4 py-2 leading-relaxed">
                                                                    <strong>{{ $replyReview->userReplyReviewBooks->name }}</strong>
                                                                    <span class="text-xs text-gray-400">3:34
                                                                        PM</span>
                                                                    <p class="text-xs sm:text-sm">
                                                                        {{ $replyReview->replysText }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                @if ($replyReview->replysUser == Auth::user()->id)
                                                                    <form
                                                                        action="{{ route('delete.book.reply.review', ['replyId' => $replyReview->replys_id, 'userId' => $replyReview->replysUser, 'bookId' => $book->book_id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit">Delete</button>
                                                                    </form>
                                                                @else
                                                                    <div></div>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div>
                                                        <form
                                                            action="{{ route('post.book.reply.review', ['reviewId' => $review->review_id, 'bookId' => $book->book_id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="w-full pl-14 mb-2">
                                                                <textarea
                                                                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full font-medium rounded-lg placeholder-gray-700 focus:outline-none focus:bg-white p-2"
                                                                    name="replysText" placeholder='Type Your Comment' rows="2" required></textarea>
                                                            </div>
                                                            <button type="submit">submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div>book not found</div>
    @endif
</x-client-layout>
