<header class="fixed w-full bg-gray-800">
    <div class="pr-4 pl-1">
        <div class="flex items-center justify-between h-16 -mb-px">
            <div class="flex">
                <a href="{{route('dashboard.admin')}}">
                    <div class="text-xl font-bold flex justify-center items-center text-white px-4 py-2 border-2 border-white"
                        style="font-family: 'Pangolin', cursive;">
                        <div>REEBOOKS PANEL</div>
                    </div>
                </a>
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

            <div class="flex items-center space-x-3">

                <x-modal.search />

                <x-dropdown.notification align="right" />

                <x-dropdown.help align="right" />

                <hr class="w-px h-6 bg-slate-200" />

                <x-dropdown.profile align="right" />

            </div>

        </div>
    </div>
</header>
