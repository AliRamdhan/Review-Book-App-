<div class="w-56 min-h-screen fixed mt-14 bg-gray-800">
    {{-- DASHBOARD --}}
    <div class="w-full">
        <ul class="mt-3">
            <li class="px-3 py-2 rounded-sm mb-0.5">
                <div id="buttonMenuToggle1"
                    class="block text-slate-200 hover:text-white truncate transition duration-150 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg id="dashboard-icon" class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path
                                    class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                                    d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                <path
                                    class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                    d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                <path
                                    class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                                    d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 duration-200">Dashboard</span>
                        </div>
                        <!-- Icon -->
                        <div id="toggleIcon1" class="flex shrink-0 ml-2 duration-200">
                            <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" viewBox="0 0 12 12">
                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="">
                    <ul class="pl-9 mt-1 hidden duration-200" id="menuToggle1">
                        <li class="mb-1">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                href="{{ route('dashboard.admin') }}">
                                <span class="text-sm font-medium duration-200">Main</span>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                href="#">
                                <span class="text-sm font-medium  duration-200">Analytics</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- STORE --}}
            <li class="px-3 py-2 rounded-sm mb-0.5">
                <div id="buttonMenuToggle2"
                    class="block text-slate-200 hover:text-white truncate transition duration-150 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="shrink-0 h-6 w-6">
                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    class="fill-current @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                    d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z" />
                            </svg>
                            <span class="text-sm font-medium ml-3  duration-200">APAYAA</span>
                        </div>
                        <!-- Icon -->
                        <div id="toggleIcon2" class="flex shrink-0 ml-2  duration-200">
                            <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'rotate-180' }} @endif"
                                :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="">
                    <ul id="menuToggle2" class="pl-9 mt-1 hidden">
                        <li class="mb-1">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                href="{{ route('admin.books') }}">
                                <span class="text-sm font-medium  duration-200">Book</span>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                href="{{ route('admin.author') }}">
                                <span class="text-sm font-medium  duration-200">Author</span>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                href="{{ route('admin.others') }}">
                                <span class="text-sm font-medium  duration-200">GLP</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Review --}}
            <li class="px-3 py-2 rounded-sm mb-0.5 cursor-pointer">
                <div id="buttonMenuToggle3"
                    class="block text-slate-200 hover:text-white truncate transition duration-150" href="#0 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    class="fill-current @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                    d="M248 0H208c-26.5 0-48 21.5-48 48V160c0 35.3 28.7 64 64 64H352c35.3 0 64-28.7 64-64V48c0-26.5-21.5-48-48-48H328V80c0 8.8-7.2 16-16 16H264c-8.8 0-16-7.2-16-16V0zM64 256c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H224c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H184v80c0 8.8-7.2 16-16 16H120c-8.8 0-16-7.2-16-16V256H64zM352 512H512c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H472v80c0 8.8-7.2 16-16 16H408c-8.8 0-16-7.2-16-16V256H352c-15 0-28.8 5.1-39.7 13.8c4.9 10.4 7.7 22 7.7 34.2V464c0 12.2-2.8 23.8-7.7 34.2C323.2 506.9 337 512 352 512z" />
                            </svg>
                            <span class="text-sm font-medium ml-3  duration-200">Review Statistik</span>
                        </div>
                        <!-- Icon -->
                        <div id="toggleIcon3" class="flex shrink-0 ml-2  duration-200">
                            <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'rotate-180' }} @endif"
                                :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="">
                    <ul id="menuToggle3" class="pl-9 mt-1 hidden">
                        <li class="mb-1">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                href="#0">
                                <span class="text-sm font-medium  duration-200">Main</span>
                                {{-- overview --}}
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                href="#0">
                                <span class="text-sm font-medium  duration-200">Analytics</span>
                                {{-- statistik review & discus --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="px-3 py-2 rounded-sm mb-0.5">
                <div id="buttonMenuToggle4"
                    class="block text-slate-200 hover:text-white truncate transition duration-150 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    class="fill-current @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                    d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z" />
                            </svg>
                            <span class="text-sm font-medium ml-3  duration-200">Community & Forum</span>
                        </div>
                        <!-- Icon -->
                        <div id="toggleIcon4" class="flex shrink-0 ml-2  duration-200">
                            <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'rotate-180' }} @endif"
                                :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="">
                    <ul id="menuToggle4" class="pl-9 mt-1 hidden">
                        <li class="mb-1">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                href="{{route('community.statistik')}}">
                                <span class="text-sm font-medium  duration-200">Main</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
