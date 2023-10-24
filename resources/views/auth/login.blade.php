<x-app-layout>
    <div class="w-full flex justify-evenly items-center h-screen">
        <div class="w-4/6 flex justify-center bg-gray-300 h-full " style="border-bottom-right-radius: 25%">
            <div>
                <img src="image/login.png" class="w-[600px] h-[500px] object-fill mt-8" alt="Login">
            </div>
        </div>
        <div class="w-3/6 flex flex-col items-center justify-center h-full bg-white gap-4">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your
                    account</h2>
            </div>
            <div class="w-full px-16">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="pt-8">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                    <p class="text-sm font-light mt-4 text-right">
                        Don’t have an account yet? <a href="/register" class="font-medium  hover:underline ">Sign up</a>
                    </p>
                </form>
            </div>
            <div>
                <div class="w-full flex justify-center items-center gap-4">
                    <div class="w-56 border border-black"></div>
                    <div class="">OR</div>
                    <div class="w-56 border border-black"></div>
                </div>
                <div class="w-full flex justify-between">
                    <div class="w-56">
                        @include('components.button.google-login')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>