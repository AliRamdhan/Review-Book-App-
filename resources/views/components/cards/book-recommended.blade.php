<div class="swiper w-[75vw] py-4 px-4">
    <div class="swiper-wrapper w-full">
        @foreach ($books as $book)
            <div class="swiper-slide w-52 mx-4">
                <a href="#">
                    <div class="w-56 bg-white border border-gray-200 rounded-lg shadow-xl">
                        <img style="background-size: cover; object-position: center;" class="w-full h-56"
                            src="image/login.png" alt="product image" />
                        <div class="px-5">
                            <div class="text-base font-bold text-gray-600">
                                Romantic Books
                            </div>
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900">{{ $book->bookTitle }}</h5>
                            <span class="text-base font-bold text-gray-600">by polar</span>
                            <div class="flex items-center mt-2.5 mb-5">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($book->averageRating > 0)
                                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    @else
                                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    @endif
                                @endfor
                                <span
                                    class="text-xs font-semibold mr-2 px-2.5 rounded shadow-md hover:bg-gray-200 ml-3">
                                    {{ number_format($book->averageRating, 2) }} out of {{ number_format(5, 2) }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
