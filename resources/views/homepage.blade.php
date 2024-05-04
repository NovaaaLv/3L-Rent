<x-app-layout>
    {{-- kategori search --}}
    <section class="pt-24 flex justify-end pe-10 gap-4 items-center">
        <span>Filter By Category</span>
        <x-input-search-home />
    </section>

    <section class="flex justify-center">
        <div class="text-start">
            <p class="text-gray-800 text-3xl font-bold py-5 pe-10 border-gray-900">TRANSPORTATION <span>( CAR )</span>
            </p>
            {{-- paling top --}}
            <div class="pb-5">
                <p class="text-gray-700 text-2xl font-bold pe-10 border-gray-900">Trending Now !</p>
                <div class="pt-2 flex gap-5 flex-wrap justify-center">
                    <div class="w-[500px] h-autooverflow-hidden">
                        <img src="{{ asset('storage/images/heromobil.png') }}" alt="" class="w-full">
                    </div>
                    <div class="pb-2">
                        <p class="text-3xl font-bold text-gray-800">Corvette</p>
                        {{-- spesifikasi --}}
                        <div class="">
                            <p class="text-sm font-medium max-w-[500px] py-5 text-gray-700">penjelasan sekilas Lorem
                                ipsum dolor sit
                                amet
                                consectetur
                                adipisicing elit. Dolore, odit natus harum et aperiam quod recusandae quas molestiae
                                totam magni!</p>
                            <p class="text-base font-semibold text-gray-800">SPESIFIKASI</p>
                            {{-- spesifikasi container --}}
                            <div class="pt-2 flex gap-5 max-w-[400px] flex-wrap">
                                {{-- item spesifikasi container --}}
                                <div class="flex items-center gap-2">
                                    <div class="w-9">
                                        <img src="{{ asset('storage/icons/icons-mobil/seat.svg') }}" alt=""
                                            class="w-full">
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
                                            class="w-full">
                                    </div>
                                    <div class="">
                                        <p class="text-sm">SUITCASE</p>
                                        <p class="text-sm">3</p>
                                    </div>
                                </div>
                                {{-- item spesifikasi container --}}
                                <div class="flex items-center gap-2">
                                    <div class="w-9">
                                        <img src="{{ asset('storage/icons/icons-mobil/transmition.svg') }}"
                                            alt="" class="w-full">
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
                                            class="w-full">
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
                                            class="w-full">
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
        </div>
    </section>
</x-app-layout>
