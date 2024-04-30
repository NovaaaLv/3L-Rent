<nav
    class="{{ request()->routeIs('profile.show') ? 'flex justify-between px-10 py-5 text-slate-50 bg-slate-600' : 'flex justify-between px-10 py-5 text-slate-50 bg-transparent fixed top-0 left-0 right-0' }}">
    <div class="flex items-center gap-4">
        <div class="w-48">
            <x-application-logo />
        </div>
        <div class="">
            <x-input-search />
        </div>
    </div>
    <div class="{{ request()->routeIs('profile.show') ? '' : '' }}flex gap-5 items-center" id="nav-right">
        <div class="flex gap-6">
            <x-nav-link href="{{ route('landingpage') }}" :active="request()->routeIs('landingpage')">
                {{ __('Home') }}
            </x-nav-link>
        </div>

        <div class="flex gap-2 items-center">
            @auth
                {{-- Jika Sudah Login --}}
                <div class="">
                    <a href="" wire:navigate class="py-1 px-5 bg-sky-900 rounded-2xl">Contact We !</a>
                </div>

                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}" wire:navigate>
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @else
                {{-- Jika Belum Login --}}
                <div class="flex gap-3">
                    <div class="flex items-center bg-sky-900 rounded-xl">
                        <a href="{{ url('/register') }}"class="py-2 px-4 flex items-center gap-2">
                            Register
                        </a>
                    </div>
                    <div class="flex items-center bg-slate-50 text-sky-900 rounded-xl">
                        <a href="{{ url('/login') }}" class="py-2 px-4 flex items-center gap-2">
                            Login
                        </a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>