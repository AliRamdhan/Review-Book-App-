<header class="fixed w-full bg-white shadow-md z-50">
    <div class="px-6">
        <div class="flex items-center justify-between h-16 py-2 -mb-px">
            <div class="flex">
                @if (Auth::check())
                    <a href="{{ route('dashboard') }}">
                        <div class="text-xl font-bold flex justify-center items-center border-black border-2 px-4 py-1 rounded-md"
                            style="font-family: 'Pangolin', cursive;">
                            <div>REEBOOK</div>
                        </div>
                    </a>
                @else
                    <a href="{{ route('home') }}">
                        <div class="text-xl font-bold flex justify-center items-center border-black border-2 px-4 py-1 rounded-md"
                            style="font-family: 'Pangolin', cursive;">
                            <div>REEBOOK</div>
                        </div>
                    </a>
                @endif

                <div class="w-80 flex justify-evenly items-center font-bold text-lg">
                    <a href="{{ route('book.all') }}"
                        class="{{ request()->routeIs('book.all') ? 'border-b-2 border-black py-1' : '' }}">BOOKS</a>

                    <a href="{{ route('community') }}"
                        class="{{ request()->routeIs('community') ? 'border-b-2 border-black py-1' : '' }}">COMMUNITY</a>

                </div>
                <!-- Hamburger button -->
                <button class="text-slate-500 hover:text-slate-600 lg:hidden" @click.stop="sidebarOpen = !sidebarOpen"
                    aria-controls="sidebar" :aria-expanded="sidebarOpen">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="5" width="16" height="2" />
                        <rect x="4" y="11" width="16" height="2" />
                        <rect x="4" y="17" width="16" height="2" />
                    </svg>
                </button>
            </div>

            <!-- Header: Right side -->
            <div class="flex items-center space-x-3">

                <!-- Search Button with Modal -->
                <x-modal.search />

                <!-- Info button -->
                <x-dropdown.help align="right" />

                <!-- Divider -->
                <hr class="w-px h-6 bg-slate-200" />
                @if (Auth::check())
                    <div x-data="{ open: false }" class="max-w-72 shadow flex justify-center items-center">
                        <div @click="open = !open" class="w-full relative py-2">
                            <div class="w-full flex justify-between gap-4 items-center px-2 cursor-pointer">
                                <div
                                    class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                                    <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                                        alt="" class="w-full h-full object-cover">
                                </div>
                                <div class="font-semibold text-gray-900 text-lg">
                                    <div class="cursor-pointer">{{Auth::user()->name}}</div>
                                </div>
                                <!-- Heroicon: chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-800"
                                    viewBox="0 0 20 20" fill="currentColor"
                                    :class="{ 'transform rotate-180 transition-transform duration-300': open }">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 w-44 px-5 py-3 bg-white rounded-lg sorder mt-5">
                                <ul class="space-y-3">
                                    <li class="font-medium">
                                        <a href="{{route('profile.page')}}"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                            <div class="mr-3">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                    </path>
                                                </svg>
                                            </div>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="font-medium">
                                        <a href="#"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                            <div class="mr-3">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            Setting
                                        </a>
                                    </li>
                                    <hr class="dark:border-gray-700">
                                    <li class="font-medium">
                                        <form action="{{ route('logout') }}" method="POST"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                            @csrf

                                            <div class="mr-3 text-red-600">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                    </path>
                                                </svg>
                                            </div>
                                            <button type="submit">Logout</button>

                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                @else
                    <a href="{{ route('login') }}">
                        <button type="button"
                            class="bg-white hover:bg-gray-100 font-medium rounded-lg text-sm px-8 py-1 mr-2 shadow-md border-2 border-black">Login</button>
                    </a>
                @endif
            </div>

        </div>
    </div>
</header>
