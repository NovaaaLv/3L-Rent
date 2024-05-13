<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('landingpage') }}
        </h2>
    </x-slot> --}}
    <x-hero-section />

    <section class="bg-white flex justify-center flex-col">
        <div class="flex px-40 pt-10" data-aos="fade-right" data-aos-duration="1000">
            <span class="text-font_color_primary text-4xl  font-medium">
                Mau Nyari tempat <span class="text-secondary">rental </span> <br>tapi bingung tempatnya dimana?
                <br><span class="text-secondary">L - Rent in
                    Aja !</span>
            </span>
        </div>

        <div class="py-16 flex flex-col justify-center">
            <div class="flex justify-center px-20" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-font_color_primary text-4xl  font-bold opacity-85">Paling Populer !</span>
            </div>
            <div class="flex flex-wrap gap-6 justify-center pb-10 pt-5 items-center">
                {{-- untuk nanti jika sudah ada database --}}
                {{-- @foreach ($postMobil > take(6) as $post)
                    <div class="">
                        <x-posts.trending-rent :post="$post" />
                    </div>
                @endforeach --}}
                <x-posts.trending-rent />
                <x-posts.trending-rent />
                <x-posts.trending-rent />
            </div>
        </div>
    </section>

    <section class="bg-[#1F4867] flex justify-center gap-10 px-8 py-20">
        {{-- foreach ($promote as $key => $promo) --}}
        {{-- if ($key == 0) --}}
        {{-- Gambar pertama --}}
        <div class="w-135 h-56 overflow-hidden rounded-2xl">
            {{-- <img src="{{ $promo->promote_image }}" alt="" class="w-full"> --}}
            <img src="{{ asset('storage/images/heromobil.png') }}" alt="">
        </div>
        {{-- elseif ($key == 1) --}}
        <div class="flex flex-col gap-4">
            {{-- Gambar kedua dan ketiga --}}
            <div class="w-96 h-27 overflow-hidden rounded-2xl">
                {{-- <img src="{{ $promo->promote_image }}" alt=""> --}}
                <img src="{{ asset('storage/images/heromobil.png') }}" alt="">
            </div>
            {{-- else --}}
            <div class="w-96 h-27 overflow-hidden rounded-2xl">
                {{-- <img src="{{ $promo->promote_image }}" alt=""> --}}
                <img src="{{ asset('storage/images/heromobil.png') }}" alt="">
            </div>
        </div>
        {{-- endif --}}
        {{-- endforeach --}}
    </section>

    <section class="py-16 flex justify-center gap-20">
        <div class="h-[550px] overflow-hidden w-[365px] rounded-xl">
            <img src="{{ asset('storage/images/coolen.jpg') }}" alt=""
                class="w-[100%] h-[100%] object-cover object-center">
        </div>
        <div class="w-135">
            <p class="font-semibold text-4xl text-center">Order And Enjoy</p>
            <span
                class="text-center flex justify-center items-center py-4 text-lg font-medium text-font_color_primary">Yes,
                we offer rental
                services for
                various
                items.
                You can order online via
                our
                website or contact us
                directly. Enjoy our services in the comfort of your own vacation.</span>
            <div class="max-w-[600px] h-72">
                <img src="{{ asset('storage/images/heromobil.png') }}" alt=""
                    class="w-[100%] h-[100%] object-cover object-center rounded-2xl">
            </div>
            <span
                class="text-center flex justify-center items-center py-4 text-lg font-medium text-font_color_primary">Yes,
                we offer rental
                services for
                various
                items.
                You can order online via
                our
                website or contact us
                directly. Enjoy our services in the comfort of your own vacation.</span>
        </div>
    </section>

    <section class="my-5">
        <x-contact-us />
    </section>

    <section class="bg-white flex justify-center flex-col">
        {{-- car --}}
        <div class="pt-14 pb-8 flex flex-col justify-center">
            <div class="flex justify-center px-20" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-font_color_primary text-4xl  font-bold opacity-85">Our Rent Product</span>
            </div>
            <div class="text-start ps-40">
                <span class="text-font_color_primary text-3xl  font-medium border-b pe-10 border-gray-900">Car</span>
            </div>

            <div class="flex flex-wrap gap-3 justify-center pb-10 pt-5 items-center">
                {{-- untuk nanti jika sudah ada database --}}
                {{-- @foreach ($postMobil > take(3) as $post)
                    <div class="">
                        <x-posts.trending-rent :post="$post" />
                    </div>
                @endforeach --}}
                <x-posts.car-post />
                <x-posts.car-post />
                <x-posts.car-post />
            </div>
        </div>
        {{-- motorcyle --}}
        <div class="pb-8 flex flex-col justify-center">
            <div class="text-start ps-40">
                <span
                    class="text-font_color_primary text-3xl  font-medium border-b pe-10 border-gray-900">Motorcycle</span>
            </div>

            <div class="flex flex-wrap gap-6 justify-center pb-10 pt-5 items-center">
                {{-- untuk nanti jika sudah ada database --}}
                {{-- @foreach ($postMobil > take(3) as $post)
                    <div class="">
                        <x-posts.trending-rent :post="$post" />
                    </div>
                @endforeach --}}
                <x-posts.trending-rent />
                <x-posts.trending-rent />
                <x-posts.trending-rent />
            </div>
        </div>
    </section>
</x-app-layout>
