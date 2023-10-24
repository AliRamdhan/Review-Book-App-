<div class="swiper w-[72vw] py-4 px-8">
    <div class="swiper-wrapper w-full">
        @foreach ($discusses as $discuss)
            <div class="swiper-slide w-[480px] mt-6">
                <div>
                    <div class="w-[480px] p-4 border rounded-lg bg-white shadow-lg">
                        <div class="relative flex gap-4">
                            <img src="{{ asset('image/penulis1.jpg') }}"
                                class="relative rounded-lg -top-12 -mb-4 bg-white border h-20 w-20" alt=""
                                loading="lazy">
                            <div class="flex flex-col w-full">
                                <div class="flex flex-row justify-between">
                                    <p class="-mt-4 text-xl"  style=" display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;overflow: hidden;">{{ $discuss->discussMessage }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique et molestiae vero odio cupiditate. Cumque numquam doloribus aliquam aut nostrum, sequi repudiandae sit ad, dolores dolor placeat modi? Molestias, ducimus!
                                    </p>
                                </div>
                                <p class="text-gray-600 text-sm font-semibold">
                                    {{ $discuss->totalReply ? $discuss->totalReply : 0 }}
                                    <span class="text-gray-500 font-medium"> Replies </span>
                                </p>
                            </div>
                        </div>
                        <p class="w-full text-right text-gray-400 text-sm">
                            {{ \Carbon\Carbon::parse($discuss->created_at)->format('j F Y, \a\t g:i A') }}
                        </p>

                        <p class=" text-lg font-medium text-gray-500 whitespace-nowrap truncate overflow-hidden">By
                            <span class="text-gray-600 font-semibold">{{ $discuss->userDiscuss->name }}</span> </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
