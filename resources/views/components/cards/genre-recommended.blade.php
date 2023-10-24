<div class="swiper w-[72.5vw] py-4 px-4">
    <div class="swiper-wrapper w-full">
        @foreach ($genres as $genre)
            <div class="swiper-slide w-72">
                <a href="/book/genre">
                    <div class="w-64 border border-black h-24 rounded">
                        <div class="w-full flex justify-between ">
                            <div class="px-5 py-2">
                                <div class="text-base font-bold text-gray-600">
                                    {{$genre->genreName}}
                                </div>
                            </div>
                            <div class="w-56 h-24">
                                <img class="w-full h-full" src="{{asset("storage/genre_image/".$genre->genreImage)}}" alt="product image" />
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
