<x-client-layout>
    <div class="w-full flex justify-between min-h-screen">
        <div class="w-4/6 h-full flex flex-col items-center border-r border-black">
            @if ($discuss)
                {{-- <p>{{ $discuss->discussMessage }}</p>
                <p>Posted by: {{ $discuss->userDiscuss->name }}</p> --}}
                <div class="w-full border-b-2 py-4">
                    <div class="flex flex-shrink- px-4 pb-0">
                        <a href="{{ route('profile.page') }}" class="flex-shrink-0 group block">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block h-10 w-10 rounded-full"
                                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                        alt="" />
                                </div>
                                <div class="flex-1 px-4 py-2 leading-relaxed">
                                    <strong>{{ $discuss->userDiscuss->name }}</strong> <span
                                        class="text-xs text-gray-400 mx-2">{{ $discuss->created_at->diffForHumans() }}</span>

                                    <p class="text-md">
                                        {{ $discuss->discussMessage }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center pt-4 mb-2">
                    <form class="w-full rounded-lg"
                        action="{{ route('post.reply.discuss', ['discussId' => $discuss->discuss_id]) }}"
                        method="POST">
                        @csrf
                        <div class="flex flex-col">
                            <div class="w-full flex justify-center pl-4 pr-2">
                                <img class="inline-block h-10 w-10 rounded-full"
                                    src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                    alt="" />
                                <div class="w-full px-4 mb-2">
                                    <textarea
                                        class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full font-medium placeholder-gray-700 focus:outline-none focus:bg-white p-2"
                                        name="replyText" placeholder='Type Your Comment' rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="w-full flex justify-between px-5">
                                <div></div>
                                <button type="submit"
                                    class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100">Post
                                    Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                @if ($replies->count() > 0)
                    @foreach ($replies as $reply)
                        <div class="w-full px-4">
                            <div class="w-full flex items-center border-b-2 mt-1">
                                <div class="w-full flex">
                                    <div class="flex-shrink-0 mr-3">
                                        <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                            src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                            alt="">
                                    </div>
                                    <div class="flex-1 rounded-lg px-4 py-1 leading-relaxed">
                                        <strong>{{ $reply->users->name }}</strong> <span
                                            class="text-xs text-gray-400 mx-2">{{ $reply->created_at->diffForHumans() }}</span>
                                        <p class="text-sm">
                                            {{ $reply->replyText }}
                                        </p>
                                    </div>
                                </div>
                                @if ($reply->replyUser == Auth::user()->id)
                                    <form
                                        action="{{ route('delete.reply.discuss', ['replyDiscussId' => $reply->replyDiscuss_id, 'discussId' => $discuss->discuss_id, 'userId' => Auth::user()->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                @else
                                    <div></div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>not any reply </div>
                @endif
            @else
                <div>discuss not found</div>
            @endif
        </div>
        <div class="w-2/6 h-full">
            <!--right menu-->
            <div class="w-full flex flex-col justify-center items-center gap-4">
                <!--second-trending tweet section-->

                <div class="w-11/12 rounded-lg  overflow-hidden shadow-md px-4 mt-4 bg-white">
                    <div class="flex">
                        <div class="flex-1 m-2">
                            <h2 class="px-4 py-2 text-xl w-48 font-semibold ">Germany trends</h2>
                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href="" class=" text-2xl rounded-full  hover: hover:text-blue-300 float-right">
                                <svg class="m-2 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>


                    <hr class="border-gray-600">

                    <!--first trending tweet-->
                    <div class="flex">
                        <div class="flex-1">
                            <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">1 . Trending</p>
                            <h2 class="px-4 ml-2 w-48 font-bold ">#Microsoft363</h2>
                            <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">5,466 Tweets</p>

                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href=""
                                class=" text-2xl rounded-full text-gray-400 hover: hover:text-blue-300 float-right">
                                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr class="border-gray-600">

                    <!--show more-->

                    <div class="flex">
                        <div class="flex-1 p-4">
                            <h2 class="px-4 ml-2 w-48 font-bold text-blue-400">Show more</h2>
                        </div>
                    </div>

                </div>

                <div class="w-11/12 rounded-lg overflow-hidden shadow-md px-4 mt-4  bg-white">
                    <div class="flex">
                        <div class="flex-1 m-2">
                            <h2 class="px-4 py-2 text-xl w-48 font-semibold ">Topik Terkait</h2>
                        </div>
                    </div>


                    <hr class="border-gray-600">

                    <!--first trending tweet-->
                    <div class="flex">
                        <div class="flex-1">
                            <h2 class="px-4 ml-2 mt-3 w-48 font-bold ">#Microsoft363</h2>
                            <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">5,466 Tweets</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- TOPIK TERKAIT --}}
        </div>
    </div>
</x-client-layout>
