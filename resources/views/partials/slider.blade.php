<div class="w-full overflow-hidden">
    <div class="swiper-container w-96 px-12 py-5">
        <div class="swiper-wrapper  h-full">
            {{-- @foreach ($dataBook as $item) --}}
                <div class="swiper-slide bg-cover bg-center w-full h-full">
                    {{-- @if ($item->image) --}}
                        {{-- <img src="{{ asset('storage/imageBook/' . $item->image) }}" alt="Image"> --}}
                        <div>sadsadadsadsadsadsadasdsada</div>
                    {{-- @else --}}
                        <div>No image available</div>
                    {{-- @endif --}}
                </div>
            {{-- @endforeach --}}
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
