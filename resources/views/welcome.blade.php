<x-guest-layout>
    <div class="w-full flex items-center justify-center h-screen">
        <div class="w-3/5 pl-8 flex justify-between items-center h-screen ">
            @include('partials.search')
        </div>
        <div class="w-2/5 overflow-hidden flex justify-center items-center mt-12 mr-8">
            @include('components.slider.slider-book')
        </div>
    </div>
    <div class="w-full flex justify-center min-h-screen border-t-2">
        <div class="w-80 px-2 border-r-2">
            <div class="flex flex-col gap-4 mt-5">
                <div class="w-full px-2">
                    <h2 class="font-bold text-xl">Author of the Week</h2>
                    <ul class="flex flex-col divide-y w-64">
                        <li class="flex flex-row">
                            <a href="#">
                                <div
                                    class="flex-1 select-none cursor-pointer hover:bg-gray-50 flex items-center gap-4 p-2">
                                    <img class="w-12 h-12 rounded-full" src="image/penulis1.jpg" alt="Image">
                                    <div class="font-semibold text-lg">lorem ipsum</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="w-full text-right mt-3">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">See all</a>
                    </div>
                </div>
                <div class="w-full px-2">
                    <h2 class="font-bold text-xl">Book of the Week</h2>
                    <ul class="flex w-full h-20 flex-col gap-5">
                        <li class="flex justify-center items-center">
                            <div class="select-none cursor-pointer hover:bg-gray-50 flex items-center p-2 w-full gap-4">
                                <img src="image/buku1.jpg" alt="Image" class="w-18 h-20">
                                <div>
                                    <div class="font-semibold text-lg">Lorem Ipsum</div>
                                    <div class="font-medium text-sm"><span class="text-gray-500">by</span> lorem ipsum
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="w-full text-right mt-3">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">See all</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full px-4 py-12 flex flex-col justify-between items-center">
            <div class=" grid gap-10 grid-cols-2 popular-books">
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorum et asperiores
                                repudiandae
                                similique debitis sint illum, corporis placeat fuga ad, alias accusamus voluptate
                                officia consequatur
                                odio, hic nisi quia.</div>
                        </div>
                        <div>
                            <a href="#">
                                <div
                                    class=" text-center p-1.5 w-full mt-2 text-sm font-medium text-black rounded-lg border">
                                    See
                                    More
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full text-right">
                <a href="#" class="text-lg font-medium text-blue-600 hover:underline dark:text-blue-500">See
                    all</a>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col justify-center items-center h-[200px] border-t-2 border-b-2">
        <div class="w-full px-8 flex items-center text-2xl font-bold">Recommended Genre</div>
        <div class="w-full flex justify-center items-center ">
            @include('components.slider.slider-genre')
        </div>
    </div>
    <div class="w-full flex flex-col justify-center items-center h-[400px] border-t-2 border-b-2">
        <div class="w-full px-8 flex items-center text-2xl font-bold">Popular Review</div>
        <div class="w-full flex justify-center items-center ">
            @include('components.slider.slider-recent-review')
        </div>
    </div>
</x-guest-layout>
