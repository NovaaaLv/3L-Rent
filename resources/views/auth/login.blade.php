<x-guest-layout>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card> --}}
    <div class="py-20">
        <div class="flex items-start justify-center">
            <div
                class="rounded-lg border-[#282f58] shadow-[#404985] shadow-lg bg-[#343c71] flex-col flex h-full sm:px-4">
                <div class="flex h-full flex-col justify-center gap-4 p-6">
                    <div class="left-0 right-0 inline-block  px-2 py-2.5 sm:px-4">
                        <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4 pb-4">
                            @csrf
                            <h1
                                class="mb-4 text-2xl font-bold text-center text-[#ffffff] justify-center font-general-sans">
                                Login</h1>
                            <div>
                                <div class="flex w-full rounded-lg pt-1">
                                    <div class="relative w-full"><input
                                            class="block w-full border bg-white border-[#000000] text-black-900 p-2.5 text-sm rounded-lg"id="email"
                                            type="email" placeholder="Email" required="" name="email"
                                            :value="old('email')" required autofocus autocomplete="username">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex w-full rounded-lg pt-1 text-sm">
                                    <div class="relative w-full"><input
                                            class="block w-full border bg-white border-[#000000] text-black-900 p-2.5 text-sm rounded-lg"
                                            id="password" type="password" name="password" placeholder="Password"
                                            required="" autocomplete="current-password">
                                    </div>
                                </div>
                                <a class="cursor-pointer text-sm text-[#ffffff] text-center px-24"
                                    href="{{ route('password.request') }}">
                                    Forgot password?</a>
                            </div>
                            <div class="flex flex-col gap-2">
                                <button type="submit"
                                    class="border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-[#232950] hover:bg-[#191e3a] active:bg-[#1C415C] text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">
                                    <span
                                        class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                        {{ __('Log in') }}
                                    </span>
                                </button>
                                {{-- <div class="min-w-[270px]">
                                    <div class="text-[#ffff] mt-4 text-center text-sm">Don't have account?
                                        <a class="text-[#3c6fe6] hover:text-[#0022ca] underline-offset-1"
                                            href="{{ route('signup') }}">Signup</a>
                                    </div>
                                </div> --}}
                                <div class="flex items-center justify-center space-x-4 my-2">
                                    <span class="h-px w-16 bg-white"></span>
                                    <span class="text-white font-normal">or</span>
                                    <span class="h-px w-16 bg-white"></span>
                                </div>
                                <button type="button"
                                    class="p-0.5 bg-[#4167B2] text-white border border-[#3a5996] rounded-lg ">
                                    <span
                                        class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 448 512" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z">
                                            </path>
                                        </svg>Log in with Facebook</span>
                                </button>
                                <button type="button"
                                    class="p-0.5 bg-[#D9D9D9] text-gray-500 border border-[#000000] rounded-lg ">
                                    <span
                                        class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1"
                                            x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#FFC107"
                                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12 c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24 c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                            <path fill="#FF3D00"
                                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657 C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                            </path>
                                            <path fill="#4CAF50"
                                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36 c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                            </path>
                                            <path fill="#1976D2"
                                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571 c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                        </svg>
                                        Log in with Google
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
