<div class="relative">
    <div class="swiper" style="height:40px">
        <div class="swiper-wrapper w-full">
            @foreach ($genres as $genre)
                <div class="swiper-slide w-1/6">
                    <div class="text-base font-bold text-gray-600 text-center rounded border border-black">
                       {{$genre->genreName}} Books
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
