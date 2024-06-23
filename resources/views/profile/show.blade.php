<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="flex">
        <div class="h-auto w-72 py-60 flex flex-col rounded-r-lg bg-gray-100 drop-shadow-xl shadow-black">
            <div class="flex items-center flex-col">
                <span class="font-bold text-gray-800 font-sans border-b-2 border-gray-400 mb-12 text-2xl max-w-40">ACCOUNT MANAGEMENT</span>
            </div>
            <div class="flex items-center gap-2 pl-8 pb-3">
                <div class="bg-slate-400 size-3 rounded-full"></div>
                <span class="font-semibold text-gray-700"><a href="#">PROFILE</a></span>
            </div>
            <div class="flex items-center gap-2 pl-8 pb-3">
                <div class="bg-slate-400 size-3 rounded-full"></div>
                <span class="font-semibold text-gray-700"><a href="#">PERSONAL INFO</a></span>
            </div>
            <div class="flex items-center gap-2 pl-8 pb-3">
                <div class="bg-slate-400 size-3 rounded-full"></div>
                <span class="font-semibold text-gray-700"><a href="#">FORGOT PASSWORD</a></span>
            </div>
            <div class="flex items-center gap-2 pl-8 pb-3">
                <div class="bg-slate-400 size-3 rounded-full"></div>
                <span class="font-semibold text-gray-700"><a href="#">TWO FACTOR AUTH</a></span>
            </div>
            <div class="flex items-center gap-2 pl-8 pb-3">
                <div class="bg-slate-400 size-3 rounded-full"></div>
                <span class="font-semibold text-gray-700"><a href="#">DELETE ACCOUNT</a></span>
            </div>
        </div>
        <div class="bg-slate-200 max-h-[100vh] w-screen p-12 overflow-auto scrollbar-none">
            <div class="">@if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div class="mt-10 sm:mt-0 bg-white p-4 rounded-md shadow-md">
                @livewire('profile.update-profile-information-form')
                </div>
                <x-section-border />
            @endif</div>
            <div class=""><span> @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0 bg-white p-4 rounded-md shadow-md">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif</span></div>
            <div class="">  @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0 bg-white p-4 rounded-md shadow-md">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif</div>
            <div class="">  <div class="mt-10 sm:mt-0 bg-white p-4 rounded-md mb-16 shadow-md">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>
            </div>
            <div class=""> @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                  <div class="mt-10 sm:mt-0 bg-white p-4 rounded-md shadow-md"> 
                    @livewire('profile.delete-user-form')
                </div>
               <x-section-border />

              
            @endif</div>
        </div> 
    </div>
       
        {{-- <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div> --}}
</x-app-layout>
