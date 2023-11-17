<div class="w-full h-full overflow-hidden">
    <div class="swiper px-96" style="width: 85vw; height:116px">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($genres as $genre)
                <div class="swiper-slide bg-white border-2 rounded">
                    <div class="w-full flex justify-between items-center">
                        <div class="text-base font-bold text-gray-600 px-5">
                            {{ $genre->genreName }}
                        </div>
                        <img class="w-56 h-28 bg-cover bg-center" src="{{ asset('storage/genre_image/' . $genre->genreImage) }}"
                            alt="genre image" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
