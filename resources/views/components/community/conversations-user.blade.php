<!-- component -->
<div class="flex flex-shrink-0 p-4 pb-0 px-8">
    <a href="{{ route('profile.page') }}" class="flex-shrink-0 group block">
        <div class="flex items-center">
            <div>
                <img class="inline-block h-10 w-10 rounded-full"
                    src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
            </div>
            <div class="ml-3">
                <p class="text-base leading-6 font-medium">
                    Sonali Hirave
                    <span
                        class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                        @ShonaDesign . 16 April
                    </span>
                </p>
            </div>
        </div>
    </a>
</div>
<div class="pl-16">
    <p class="text-base width-auto font-medium  flex-shrink">
        Day 07 of the challenge <span class="text-blue-400">#100DaysOfCode</span>
        I was wondering what I can do with <span class="text-blue-400">#tailwindcss</span>, so just started building
        Twitter UI using Tailwind and so far it looks so promising. I will post my code after completion.
        [07/100]
        <span class="text-blue-400"> #WomenWhoCode #CodeNewbie</span>
    </p>
    <div class="flex">
        <div class="w-full">
            <div class="flex items-center">
                <div class="text-center">
                    <a href="#"
                        class="w-12  group flex items-center text-gray-500 text-base leading-6 font-medium rounded-full hover:text-gray-500">
                        <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="text-center m-2">
                    <a href="#"
                        class="w-12  group flex items-center text-gray-500 text-base leading-6 font-medium rounded-full hover:text-gray-500">
                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="antialiased w-full pl-16">
    {{-- <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments</h3> --}}

    <div class="space-y-4">

        <div class="flex">
            <div class="flex-shrink-0 mr-3">
                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                    src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                    alt="">
            </div>
            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua.
                </p>
                <div class="mt-4 flex items-center">
                    <div class="flex -space-x-2 mr-2">
                        <img class="rounded-full w-6 h-6 border border-white"
                            src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                            alt="">
                        <img class="rounded-full w-6 h-6 border border-white"
                            src="https://images.unsplash.com/photo-1513956589380-bad6acb9b9d4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                            alt="">
                    </div>
                    <div class="text-sm text-gray-500 font-semibold">
                        5 Replies
                    </div>
                </div>
                <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>

                <div class="space-y-4">
                    <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                            <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                alt="">
                        </div>
                        <div class="flex-1 border border-black rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                            <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                            <p class="text-xs sm:text-sm">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
