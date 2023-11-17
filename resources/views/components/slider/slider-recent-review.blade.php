<div class="w-full h-full overflow-hidden">
    <div class="swiper px-64 py-5" style="width: 80vw; height: 350px;">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($reviewses as $review)
                @if ($review->repliesReviewBooks->count() > 2)
                    <div class="swiper-slide mx-2 h-52 rounded-lg bg-white shadow-md border-2"
                        style="width: 600px; height:300px">
                        <div class="p-4">
                            <div class="flex items-center gap-3">
                                <img class="w-10 h-10 rounded-full" src="image/buku1.jpg" alt="profile picture">
                                <div class="font-medium">
                                    <p>{{ $review->userReviewBooks->name }} </p>
                                </div>
                            </div>
                            <div class="flex justify-evenly">
                                <div class="w-full">
                                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                        <p>Reviewed of <span class="text-gray-800">
                                                {{ $review->bookReviewBooks->bookTitle }} </span> <br /> <time
                                                datetime="2017-03-03 19:00">{{ \Carbon\Carbon::parse($review->created_at)->format('j F Y, \a\t g:i A') }}</time>
                                        </p>
                                    </div>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400"
                                        style=" display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 6;overflow: hidden;">
                                        {{ $review->reviewText }}</p>
                                </div>

                                <div class="w-2/5 h-48"><img
                                        src="{{ asset('storage/books_image/' . $review->bookReviewBooks->bookImage) }}"
                                        alt="product image" class="w-32 h-full">
                                </div>
                            </div>
                            <a href="#"
                                class="w-[330px] text-right block mb-2 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                more</a>
                            <aside>
                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                                    <span>{{ $review->repliesReviewBooks->count() }}</span> people reply this
                                </p>
                            </aside>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
