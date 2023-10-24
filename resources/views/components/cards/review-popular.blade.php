<div class="swiper w-[72vw] py-4 px-8">
    <div class="swiper-wrapper w-full">

        @foreach ($reviewses as $review)
            @if ($review->repliesReviewBooks->count() > 2)
                <div class="swiper-slide w-[400px] mt-6">
                    <div href="#">
                        <div class="w-[400px] px-4 py-2 border rounded-lg bg-white shadow-lg">
                            <div class="relative flex gap-4">
                                <img src="{{ asset('image/penulis1.jpg') }}"
                                    class="relative rounded-lg -top-6 -mb-4 bg-white border h-24 w-20" alt=""
                                    loading="lazy">
                                <div class="flex flex-col w-full">
                                    <p class=" text-lg font-bold">By
                                        {{ $review->userReviewBooks->name }} </p>
                                    <p class=" text-lg font-medium text-gray-500 whitespace-nowrap truncate ">
                                        <span class="text-gray-600 font-semibold">
                                            {{ $review->bookReviewBooks->bookTitle }} book </span>
                                    </p>
                                    <p class="text-gray-400 text-sm">
                                        {{ \Carbon\Carbon::parse($review->created_at)->format('j F Y, \a\t g:i A') }}
                                    </p>
                                </div>
                            </div>
                            <p class="mt-2 text-gray-500" style=" display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;overflow: hidden;">{{ $review->reviewText }} Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Aliquid temporibus obcaecati distinctio odit atque dolor
                                unde explicabo iste nam reiciendis quis, officiis itaque dicta et autem adipisci qui
                                illum voluptatum.</p>
                            <p class=" text-md font-medium text-gray-500 mt-1">
                                <span
                                    class="text-gray-600 font-semibold">{{ $review->repliesReviewBooks->count() }}</span> replies
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>
</div>
