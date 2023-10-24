<x-client-layout>
    <div class="w-full flex justify-between min-h-screen">
        <div class="w-4/6 h-full flex flex-col justify-center px-4">
            <div class="p-4 border-b-2">
                <div class="text-3xl font-semibold">All Forum Discussion</div>
                <div class="text-lg font-medium ">Diskusikan buku dengan pengguna lain</div>
            </div>

            <div class="w-full flex justify-center items-center py-4 border-b border-black">
                <form class="w-full rounded-lg" action="{{ route('post.discuss') }}" method="POST">
                    @csrf
                    <div class="flex flex-col pb-4">
                        <div class="w-full flex justify-center px-2">
                            <div class="w-14 h-14">
                                <img src="{{ asset('image/buku2.jpg') }}" alt="image"
                                    class="w-full h-full rounded-full border border-black">
                            </div>
                            <div class="w-full px-4 mb-2">
                                <textarea
                                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full font-medium placeholder-gray-700 focus:outline-none focus:bg-white p-2"
                                    name="discussMessage" placeholder='Type Your Comment' rows="4" required></textarea>
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
            @foreach ($discusses as $discuss)
                <div class="border-b-2 pt-2">
                    <div class="antialiased w-full px-4">
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                        src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                        alt="">
                                </div>
                                <div class="flex-1 px-4 py-2 leading-relaxed">
                                    <strong>{{ $discuss->userDiscuss->name }}</strong> <span
                                        class="text-xs text-gray-400 mx-2">{{ $discuss->created_at->diffForHumans() }}</span>
                                    <a
                                        href="{{ route('community.details', ['discussId' => $discuss->discussMessage]) }}">
                                        <p class="text-md">
                                            {{ $discuss->discussMessage }}
                                        </p>
                                    </a>
                                    <div class="mt-4 w-60 flex justify-between items-center">
                                        <div class="flex items-center  buttonReply cursor-pointer">
                                            <div class="w-10 flex -space-x-3 mr-2"
                                                style=" display: -webkit-box; -webkit-box-orient: horizontal; -webkit-line-clamp: 1;overflow: hidden;">
                                                @for ($i = 0; $i < $discuss->replyDiscuss->count(); $i++)
                                                    <img class="rounded-full w-6 h-6 border border-white"
                                                        src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                                                        alt="">
                                                @endfor
                                            </div>
                                            <div class="text-sm text-gray-500 font-semibold mr-2">
                                                {{ $discuss->replyDiscuss->count() }} Replies
                                            </div>
                                            <div class="toggleReplyIcon transition duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <div
                                                class="w-8 group flex items-center text-gray-500 text-base leading-6 font-medium rounded-full cursor-pointer ">
                                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="text-sm text-gray-500 font-semibold mr-2">
                                                5 Likes
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Reply Review Book -->
                                    <div class="space-y-4 hidden menuReply transition duration-800">
                                        <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">
                                            Replies</h4>
                                        <div class="w-full max-h-[350px] overflow-hidden">
                                            @foreach ($discuss->replyDiscuss as $index => $reply)
                                                <div class="flex my-2">
                                                    <div class="flex-shrink-0 mr-3">
                                                        <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                                            src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                                            alt="">
                                                    </div>
                                                    <div class="flex-1 rounded-lg px-4 py-2 leading-relaxed">
                                                        <strong>{{ $reply->users->name }}</strong> <span
                                                            class="text-xs text-gray-400 mx-2">{{ $reply->created_at->diffForHumans() }}</span>
                                                        <p class="text-sm">
                                                            {{ $reply->replyText }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="w-full text-right text-blue-500 px-4">
                                            <!--Details-->
                                            <a href="#">See more</a>
                                        </div>
                                        <div>
                                            <form action="#" method="POST">
                                                @csrf
                                                <div class="w-full pl-14 mb-2">
                                                    <textarea
                                                        class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full font-medium rounded-lg placeholder-gray-700 focus:outline-none focus:bg-white p-2"
                                                        name="reviewText" placeholder='Type Your Comment' rows="2" required></textarea>
                                                </div>
                                                <button type="submit">submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-2/6 h-full">
            <!--right menu-->
            <div class="w-full flex flex-col justify-center items-center gap-4">
                <div class="w-11/12 rounded-lg  overflow-hidden shadow-md px-4 pb-2 mt-4 bg-white">
                    <div class="px-4 py-2">
                        <h2 class="text-xl font-semibold">Top Contributors Discussion</h2>
                        <p class="text-gray-600 font-medium">People who started the most discussion on REEBOOKS</p>

                    </div>
                    <hr class="border-gray-600">
                    <!--first trending tweet-->
                    @foreach ($usersMostDiscussion as $index => $user)
                        <div class="flex">
                            <div class="w-full h-10 flex  items-center px-2">
                                <div class="w-1/3 flex justify-between items-center h-10">
                                    <h2 class="font-semibold text-lg">{{ $user->name }}</h2>
                                    <p class="text-sm text-gray-400 mt-1"><i class="fa-regular fa-message"></i>
                                        {{ $user->discuss_book_count }}
                                        Talks</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-11/12 rounded-lg  overflow-hidden shadow-md px-4 mt-4 bg-white">
                    <div class="px-4 py-2">
                        <h2 class="text-xl font-semibold ">Unanswered Talk Discussion</h2>
                        <p class="text-gray-600 font-medium">Discussion with no comments, Be first to post a comment
                        </p>
                    </div>
                    <hr class="border-gray-600">

                    <!--first trending tweet-->
                    @forelse ($discussionsNoReplies as $discussion)
                        <div class="w-1/2 px-4 py-1">
                            <div class="text-lg font-bold ">
                                {{ $discussion->userDiscuss->name }} <span class="text-gray-500 text-sm">
                                    posted</span> </div>
                            <p class="text-lg text-gray-800">
                                {{ $discussion->discussMessage }}
                            </p>
                            <p class="text-sm text-gray-400"><i
                                    class="fa-regular fa-message mr-2"></i>{{ $discussion->replyDiscuss->count() }}
                                <span class="text-gray-600"> replies </span>
                            </p>
                        </div>
                    @empty
                        <div>No discussions with no replies found.</div>
                    @endforelse
                </div>

                <div class="w-11/12 rounded-lg  overflow-hidden shadow-md px-4 mt-4 bg-white">
                    <div class="px-4 py-2">
                        <h2 class="text-xl font-semibold">Recent Discussion</h2>
                        <p class="text-gray-600 font-medium">Recently discussion that post by user</p>
                    </div>
                    <hr class="border-gray-600">

                    <!--first trending tweet-->
                    @foreach ($discussionsRecent as $discussion)
                        <div class="w-1/2 px-4 py-1">
                            <div class="text-lg font-semibold ">
                                {{ $discussion->userDiscuss->name }} <span class="text-gray-500 text-sm">
                                    posted</span> </div>
                            <p class="text-lg font-medium">
                                {{ $discussion->discussMessage }}
                            </p>
                            <div class="text-sm text-gray-500 font-semibold">
                                {{ $discussion->created_at->diffForHumans() }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-client-layout>
