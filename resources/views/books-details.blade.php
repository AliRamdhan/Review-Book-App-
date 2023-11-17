<x-client-layout>
    @if ($book)
        <div class="w-full flex justify-between min-h-screen">
            <div class="w-2/6 h-screen flex flex-col pt-4">
                <div class="w-full text-lg text-gray-500 px-4 py-4 flex items-center gap-4"> E-book <span
                        class="w-2 h-2 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>{{ $book->bookPages }}
                    pages
                </div>
                <div class="w-full flex justify-end pt-2 relative z-20">
                    <img src="{{ asset('image/buku1.jpg') }}" alt="images"
                        style="background-size: cover; object-position: center center;"
                        class="w-80 h-[400px] border border-black -mr-48">
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
            <div class="w-full flex flex-col items-center border-2 py-4">
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
                <div class="w-full pl-52 mt-8">
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
                            <div class="font-semibold text-base">
                                @foreach ($book->languages as $index => $language)
                                    <span>{{ $language->languageName }}</span>
                                    {{ $index < count($book->languages) - 1 ? ', ' : '' }}
                                @endforeach
                            </div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Publisher</div>
                            <div class="font-semibold text-base">{{ $book->publisher->publisherName }}</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Release date</div>
                            <div class="font-semibold text-base">date</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>ISBN</div>
                            <div class="font-semibold text-base">ISBN 817525766-0</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Format</div>
                            <div class="font-semibold text-base">kindle</div>
                        </div>
                        <div class="h-14 p-2 flex flex-col justify-between items-center ">
                            <div>Features</div>
                            <div class="font-semibold text-base">
                                Sastra
                                {{-- gaya bahasa sastra, bercerita atau bertutur (story telling) --}}
                            </div>
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
                    <div role="form" class="w-full px-4">
                        <form id="commentForm" class="w-full rounded-lg pt-4"
                            action="{{ route('post.book.review', ['bookId' => $book->book_id]) }}" method="POST">
                            @csrf
                            <div class="flex flex-col">
                                <div class="w-full flex justify-center px-2">
                                    <div class="w-14 h-14">
                                        <img src="{{ asset('image/user.jpg') }}" alt="profile"
                                            class="w-full h-full rounded-full border border-black">
                                    </div>
                                    <div class="w-full px-4 mb-2">
                                        <textarea
                                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full font-medium placeholder-gray-700 focus:outline-none focus:bg-white p-2"
                                            name="reviewText" placeholder='Type Your opinion about the book' rows="4" required></textarea>
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
                                        Review</button>
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
                                                    src="{{ asset('image/user.jpg') }}" alt="profile">
                                            </div>

                                            <div class="flex-1 px-4 py-2 leading-relaxed">
                                                <strong>{{ $review->userReviewBooks->name }}</strong> <span
                                                    class="text-xs text-gray-400 mx-2">
                                                    {{ \Carbon\Carbon::parse($review->created_at)->format('g:i A') }}
                                                </span>
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
                                                                @for ($i = 0; $i < $review->replyReviews->count(); $i++)
                                                                    <img class="rounded-full w-6 h-6 border border-white"
                                                                        src="{{ asset('image/user.jpg') }}"
                                                                        alt="">
                                                                @endfor
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
                                                </div>

                                                <!-- Reply Review Book -->
                                                <div class="space-y-4 hidden menuReply transition duration-800">
                                                    <h4
                                                        class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">
                                                        Replies</h4>
                                                    <div class="w-full max-h-[400px] overflow-y-auto">
                                                        @foreach ($review->replyReviews as $replyReview)
                                                            <div class="w-full flex justify-between items-center">
                                                                <div class="flex my-2">
                                                                    <div class="flex-shrink-0 mr-3">
                                                                        <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                                                            src="{{ asset('image/user.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div
                                                                        class="flex-1 rounded-lg px-4 py-2 leading-relaxed">
                                                                        <strong>{{ $replyReview->userReplyReviewBooks->name }}</strong>
                                                                        <span class="text-xs text-gray-400">
                                                                            {{ \Carbon\Carbon::parse($replyReview->created_at)->format('g:i A') }}</span>
                                                                        <p class="text-xs sm:text-sm">
                                                                            {{ $replyReview->replysText }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    @if ($replyReview->replysUser == Auth::user()->id)
                                                                        <form id="deleteReviewForm"
                                                                            action="{{ route('delete.book.reply.review', ['replyId' => $replyReview->replys_id, 'userId' => $replyReview->replysUser, 'bookId' => $book->book_id]) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button"
                                                                                onclick="confirmDelete()"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    height="1em"
                                                                                    viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                    <path
                                                                                        d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
                                                                                </svg></button>
                                                                        </form>
                                                                    @else
                                                                        <div></div>
                                                                    @endif
                                                                </div>
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
                                                                    name="replysText" placeholder='Type Your Reply of review ' rows="2" required></textarea>
                                                            </div>
                                                            <div class="w-full flex justify-end items-center">
                                                                <button type="submit"
                                                                    class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100">Reply
                                                                    Review</button>
                                                            </div>
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

<script>
    function confirmDelete() {
        var result = confirm("Are you sure you want to delete this review?");
        if (result) {
            document.getElementById('deleteReviewForm').submit();
        }
    }
    document.getElementById('commentForm').addEventListener('keydown', function(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            submitForm();
        }
    });
</script>
