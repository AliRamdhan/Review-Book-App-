<div
    class="mt-5 mb-12 gap-2 flex justify-between items-center border border-l-0 border-black w-full h-56 rounded-3xl rounded-l-none">
    <img src="image/buku2.jpg" alt="Image" class="w-52 h-72 border border-black">
    <div class="w-full h-48 flex flex-col justify-evenly">
        @include('components.reviews.review-rating')
        <div class="w-full pr-2">
            <div class="font-semibold text-xl">title</div>
            <div class="font-medium text-base">genre</div>
            <div class="font-medium"
                style=" display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4;overflow: hidden;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorum et asperiores repudiandae
                similique debitis sint illum, corporis placeat fuga ad, alias accusamus voluptate officia consequatur
                odio, hic nisi quia.</div>
        </div>
        <div>
            <a href="{{route('book.details')}}">
                <div class=" text-center p-1.5 w-full mt-2 text-sm font-medium text-black rounded-lg border">See
                    More
                </div>
            </a>
        </div>
    </div>
</div>
