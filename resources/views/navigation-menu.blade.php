{{-- <nav
    class="{{ request()->routeIs('profile.show') ? 'otherClass' : 'Nav' }} {{ request()->routeIs('profile.show') ? 'otherClass' : 'Nav2' }}"> --}}
<nav class="{{ request()->routeIs('profile.show') ? 'otherClass' : (request()->routeIs('detail') ? 'Nav2' : 'Nav') }}">

    <div class="flex items-center gap-4 ml-16">
        <div class="w-48">
            <x-application-logo />
        </div>
        <div class="">
            <x-input-search />
        </div>
    </div>
    <div class="flex gap-5 items-center" id="nav-right">
        <div class="flex gap-6">
            <x-nav-link href="{{ route('landingpage') }}" :active="request()->routeIs('landingpage')">
                {{ __('Land') }}
            </x-nav-link>
            <x-nav-link href="{{ route('homepage') }}" :active="request()->routeIs('homepage')">
                {{ __('Home') }}
            </x-nav-link>
        </div>

        <div class="flex gap-2 items-center">
            @auth
                <div class="">
                    <a href="" class="py-1 px-5 bg-sky-900 rounded-2xl">Contact We!</a>
                </div>
                <div class="ms-3 relative">
                    <!-- Dropdown for Logged in Users -->
                    <!-- Your dropdown here -->
                </div>
            @else
                <div class="flex gap-3 mr-16">
                    <a href="{{ url('/register') }}"
                        class="py-2 px-4 flex items-center gap-2 bg-sky-900 rounded-xl hover:bg-sky-950 hover:duration-300 hover:ease-in">Register</a>
                    <a href="{{ url('/login') }}"
                        class="py-2 px-4 flex items-center gap-2 bg-slate-50 text-sky-900 rounded-xl w-20 justify-center hover:bg-gray-800 hover:duration-300 hover:ease-in hover:text-gray-50">Login</a>
                </div>
            @endauth
        </div>
    </div>
    <style>
        .Nav {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 1.25rem;
            color: #f9fafb;
            background-color: transparent;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: background-color 0.4s ease-in-out;
        }

        .Nav-Scrolled {
            background-color: #26577C;
        }

        .Nav2 {
            background: #26577C;
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 1.25rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }
    </style>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const Navigation = document.querySelector('.Nav');
        console.log('Nav element:', Navigation); // Debug: memastikan elemen ini ada

        function updateNavOnScroll() {
            if (window.scrollY > 50) {
                Navigation && Navigation.classList.add('Nav-Scrolled');
            } else {
                Navigation && Navigation.classList.remove('Nav-Scrolled');
            }
        }
        window.addEventListener('scroll', updateNavOnScroll);
        updateNavOnScroll(); // Memanggil fungsi ini untuk memastikan kelas ditambahkan sesuai scroll saat load
    });
</script>
