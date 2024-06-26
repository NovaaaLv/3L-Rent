<x-app-layout>
    {{-- kategori search --}}
    <section class="pt-24 flex justify-end">
        <x-input-search-home />
    </section>

    {{-- TRANSPORTATION CAR --}}
    <section class="flex justify-center items-center min-h-[400px] flex-col pb-5 border-b">
        <div class="flex flex-col pb-10 border-b">
            <p class="text-gray-800 text-3xl font-bold py-5 border-gray-900">TRANSPORTATION ( CAR )</p>
            <p class="text-gray-700 text-2xl font-bold pe-10 border-gray-900">TRENDING NOW !</p>
            {{-- TRENDING TRANSPORTATION SECTION --}}
            <div class="flex justify-center gap-5 pt-2">
                <div class="w-[500px] h-auto">
                    <img src="{{ asset('storage/images/heromobil.png') }}" alt="" class="w-full rounded-xl">
                </div>
                <div class="pb-2">
                    <p class="text-3xl font-bold text-gray-800">Corvette</p>
                    {{-- spesifikasi --}}
                    <div class="">
                        <p class="text-sm font-medium max-w-[500px] py-5 text-gray-700">
                            penjelasan sekilas Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Dolore, odit natus
                            harum et aperiam quod recusandae quas molestiae
                            totam magni!
                        </p>
                        <p class="text-base font-semibold text-gray-800">
                            SPESIFIKASI
                        </p>
                        {{-- spesifikasi container --}}
                        <div class="pt-2 flex gap-5 max-w-[400px] flex-wrap">
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/seat.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">SEAT</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/suitcase.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">SUITCASE</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/transmition.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">TRANSMITION</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/fuel.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">FUEL</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/asurance.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">ASURANCE</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex flex-wrap gap-6 justify-center pb-5 pt-5 items-center max-w[900px] overflow-auto scrollbar-none">
            {{-- untuk nanti jika sudah ada database --}} {{-- @foreach ($postMobil > take(3) as $post)
            <div class="">
                <x-posts.trending-rent :post="$post" />
            </div>
            @endforeach --}}
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
        </div>
    </section>

    {{-- TRANSPORTATION CAR --}}
    <section class="flex justify-center items-center min-h-[400px] flex-col pb-10 border-b">
        <div class="flex flex-col pb-10 border-b">
            <p class="text-gray-800 text-3xl font-bold py-5 border-gray-900">TRANSPORTATION ( CAR )</p>
            <p class="text-gray-700 text-2xl font-bold pe-10 border-gray-900">TRENDING NOW !</p>
            {{-- TRENDING TRANSPORTATION SECTION --}}
            <div class="flex justify-center gap-5 pt-2">
                <div class="w-[500px] h-auto">
                    <img src="{{ asset('storage/images/heromobil.png') }}" alt="" class="w-full">
                </div>
                <div class="pb-2">
                    <p class="text-3xl font-bold text-gray-800">Corvette</p>
                    {{-- spesifikasi --}}
                    <div class="">
                        <p class="text-sm font-medium max-w-[500px] py-5 text-gray-700">
                            penjelasan sekilas Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Dolore, odit natus
                            harum et aperiam quod recusandae quas molestiae
                            totam magni!
                        </p>
                        <p class="text-base font-semibold text-gray-800">
                            SPESIFIKASI
                        </p>
                        {{-- spesifikasi container --}}
                        <div class="pt-2 flex gap-5 max-w-[400px] flex-wrap">
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/seat.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">SEAT</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/suitcase.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">SUITCASE</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/transmition.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">TRANSMITION</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/fuel.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">FUEL</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                            {{-- item spesifikasi container --}}
                            <div class="flex items-center gap-2">
                                <div class="w-9">
                                    <img src="{{ asset('storage/icons/icons-mobil/asurance.svg') }}" alt=""
                                        class="w-full" />
                                </div>
                                <div class="">
                                    <p class="text-sm">ASURANCE</p>
                                    <p class="text-sm">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap gap-6 justify-center pb-10 pt-5 items-center max-w-[1200px]">
            {{-- untuk nanti jika sudah ada database --}} {{-- @foreach ($postMobil > take(3) as $post)
            <div class="">
                <x-posts.trending-rent :post="$post" />
            </div>
            @endforeach --}}
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
            <x-posts.car-post />
        </div>
    </section>

</x-app-layout>
