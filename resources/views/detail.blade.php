<x-app-layout>
    <section>
        <div class="flex items-start mt-24 justify-center gap-5 mb-10">
            <div class="">
                <div class="pb-5 border-b">
                    <div class="w-[400px] h-[400px] relative">
                        <img src="{{ asset('storage/images/heromobil.png') }}" alt=""
                            class="absolute inset-0 w-full h-full object-cover rounded-lg">
                    </div>
                </div>
                {{-- Sub Image --}}
                <div class="w-[400px] flex flex-wrap pt-5 gap-y-2 gap-x-4">
                    <div class="w-16 h-16 bg-red-300 rounded-xl"></div>
                    <div class="w-16 h-16 bg-red-300 rounded-xl"></div>
                    <div class="w-16 h-16 bg-red-300 rounded-xl"></div>
                    <div class="w-16 h-16 bg-red-300 rounded-xl"></div>
                    <div class="w-16 h-16 bg-red-300 rounded-xl"></div>
                    <div class="w-16 h-16 bg-red-300 rounded-xl"></div>
                </div>
            </div>


            <div class="max-w-[400px] flex flex-col gap-y-4">
                <div class="">
                    {{-- Container Voucher --}}
                    <div class=" flex flex-col  bg-blue-200 rounded-lg p-3">
                        <div class="flex">
                            <span class="text-2xl font-medium text-gray-800">Rp 114.000</span>
                            <div class="relative flex">
                                <div class="absolute flex top-3 left-0 gap-2">
                                    <span class="text-gray-500 ps-2 line-through">Rp250.000</span>
                                    <div class="">
                                        <span class="text-red-600 text-sm px-2 bg-gray-200 h-auto">54%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="text-white bg-blue-800 rounded-md w-36 text-center flex justify-center items-center gap-1 mt-2">
                            <span class="text-[12px] font-semibold ">></span>
                            <span class="text-[12px] font-semibold ">Voucher Terpakai</span>
                        </div>
                    </div>
                </div>

                {{-- Container Judul - Rating --}}
                <div class="">
                    <span class="text-2xl font-medium text-gray-800">TESLA Lorem, ipsum dolor sit amet
                        consectetur</span>
                    <div class="text-sm">
                        <span class="text-bold">A</span>
                        <span class="text-gray-800">5.0</span>
                        <span class="text-gray-400">(1)</span>
                        <span class="text-gray-400 px-3">|</span>
                        <span class="text-gray-400">Terjual 2</span>
                    </div>
                </div>

                {{-- Container Kode Promo --}}
                <div class="border-b pb-5">
                    <div class="">
                        {{-- icon Promo --}}
                        {{-- <div class=""></div> --}}
                        <div class="">
                            <input type="text" name="" id="" class="w-full rounded-lg"
                                placeholder="Masukan Kode Promo Yang Anda Miliki">
                        </div>
                    </div>
                </div>
                {{-- Kategori --}}
                <div class="flex gap-2 text-gray-600 text-sm">
                    <div class="flex flex-col">
                        <span>Kategori</span>
                        <span>Merk</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-blue-700">Kendaraan Roda 4</span>
                        <span class="text-blue-700">Tesla</span>
                    </div>
                </div>
            </div>

            {{-- Container Tentang Toko --}}
            <div class="max-w-[350px] rounded-xl border-t border-l border-r">
                <div class="flex flex-col gap-2 border-b p-3">

                    {{-- Container Nama Toko --}}
                    <div class="flex gap-2 items-start">
                        <div class="bg-red-600 w-11 h-11 rounded-full overflow-hidden">
                            {{-- <img src="" alt=""> --}}
                        </div>
                        <div class="">
                            <span class="font-bold text-blue-500">Nova Store Wonderer</span>
                            <div class="flex gap-3">
                                <div class="text-blue-700 ">
                                    <span class="text-sm bg-blue-100 px-3 rounded-lg">Official Store</span>
                                </div>
                                <div class="font-semibold text-gray-700">
                                    <span class="text-sm bg-gray-100 px-3 rounded-lg">Top Rated</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Rating Seller --}}
                    <div class="text-gray-600 text-sm">
                        <span>A</span>
                        <span>Rating Seller :</span>
                        <span class="text-blue-600">87%</span>
                    </div>

                    {{-- Ikuti --}}
                    <div class="bg-blue-100 flex justify-center gap-5 text-base py-1 text-blue-600 rounded-full">
                        <span>+</span>
                        <span>Ikuti</span>
                    </div>
                </div>

                {{-- Lokasi --}}
                <div class="p-3 border-b rounded-xl">
                    {{-- Lokasi Toko --}}
                    <div class="flex items-baseline gap-3">
                        <span>A</span>
                        <div class="text-gray-600 text-sm flex flex-col">
                            <span>Lokasi Toko</span>
                            <span class="font-semibold">Galaxy, Kab Ciamis</span>
                        </div>
                    </div>
                    {{-- Jam Buka --}}
                    <div class="flex items-baseline gap-3">
                        <span>A</span>
                        <div class="text-gray-600 text-sm flex">
                            <span>Buka Senin</span>
                            <span class="font-bold px-2">|</span>
                            <span>08:00 - 17:00 WIB </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- Deskripsi --}}
    <section class="px-28">
        {{-- Container --}}
        <div class="border-b mb-5 flex justify-between border-t  py-5">
            <div class="flex gap-5">
                <a href="">Deskripsi</a>
                <a href="">Ulasan</a>
                <a href="">Diskusi</a>
            </div>
            <div class="flex gap-2">
                <span>--</span>
                <a href="">Laporkan Produk</a>
            </div>
        </div>

        {{-- Section Deskripsi --}}
        <div class="text-sm text-gray-600 border-b">
            {{-- Judul --}}
            <p class="text-2xl font-medium text-gray-800 pb-5">TESLA Lorem, ipsum dolor sit amet consectetur</p>
            {{-- Hanya membutuhkan satu namun sebagai contoh ( biar rame hehe ) jadi dibanyakin sazza --}}
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur tempore voluptatibus beatae non ea,
                alias mollitia similique veritatis tenetur ad.</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, non.</p><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt obcaecati, quae consequatur molestiae
                soluta reiciendis quod consequuntur neque architecto sed perferendis temporibus quia ad! Reprehenderit
                ut quasi perferendis excepturi corporis architecto cum consequatur molestiae dicta maiores repudiandae
                asperiores, soluta assumenda?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt obcaecati, quae consequatur molestiae
                soluta reiciendis quod consequuntur neque architecto sed perferendis temporibus quia ad! Reprehenderit
                ut quasi perferendis excepturi corporis architecto cum consequatur molestiae dicta maiores repudiandae
                asperiores, soluta assumenda?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt obcaecati, quae consequatur molestiae
                soluta reiciendis quod consequuntur neque architecto sed perferendis temporibus quia ad! Reprehenderit
                ut quasi perferendis excepturi corporis architecto cum consequatur molestiae dicta maiores repudiandae
                asperiores, soluta assumenda?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt obcaecati, quae consequatur molestiae
                soluta reiciendis quod consequuntur neque architecto sed perferendis temporibus quia ad! Reprehenderit
                ut quasi perferendis excepturi corporis architecto cum consequatur molestiae dicta maiores repudiandae
                asperiores, soluta assumenda?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt obcaecati, quae consequatur molestiae
                soluta reiciendis quod consequuntur neque architecto sed perferendis temporibus quia ad! Reprehenderit
                ut quasi perferendis excepturi corporis architecto cum consequatur molestiae dicta maiores repudiandae
                asperiores, soluta assumenda?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt obcaecati, quae consequatur molestiae
                soluta reiciendis quod consequuntur neque architecto sed perferendis temporibus quia ad! Reprehenderit
                ut quasi perferendis excepturi corporis architecto cum consequatur molestiae dicta maiores repudiandae
                asperiores, soluta assumenda?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt obcaecati, quae consequatur molestiae
                soluta reiciendis quod consequuntur neque architecto sed perferendis temporibus quia ad! Reprehenderit
                ut quasi perferendis excepturi corporis architecto cum consequatur molestiae dicta maiores repudiandae
                asperiores, soluta assumenda?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt obcaecati, quae consequatur molestiae
                soluta reiciendis quod consequuntur neque architecto sed perferendis temporibus quia ad! Reprehenderit
                ut quasi perferendis excepturi corporis architecto cum consequatur molestiae dicta maiores repudiandae
                asperiores, soluta assumenda?</p><br>
        </div>

        {{-- Ulasan --}}
        <div class="mt-5 flex flex-col gap-5 border-b pb-5">
            <p class="text-gray-800 text-2xl font-semibold">Ulasan</p>
            <div class="flex items-center">
                <div class="w-40">
                    <div class="flex flex-col justify-center items-center">
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-semibold">5,0</span>
                            <span class="text-lg font-semibold">/5</span>
                        </div>
                        <div class="flex gap-[2px]">
                            <div class="w-6">
                                <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                    class="w-full">
                            </div>
                            <div class="w-6">
                                <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                    class="w-full">
                            </div>
                            <div class="w-6">
                                <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                    class="w-full">
                            </div>
                            <div class="w-6">
                                <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                    class="w-full">
                            </div>
                            <div class="w-6">
                                <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                    class="w-full">
                            </div>
                        </div>
                        <div class="pt-2">
                            <span class="text-gray-400">1 ulasan</span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="flex items-center gap-1">
                        <span class="text-sm text-gray-600">5</span>
                        <div class="w-3">
                            <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                class="w-full">
                        </div>
                        <div class="w-[200px] h-[5px] bg-yellow-400 rounded-xl"></div>
                        <span class="text-sm text-gray-400">1</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="text-sm text-gray-600">4</span>
                        <div class="w-3">
                            <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                class="w-full">
                        </div>
                        <div class="w-[200px] h-[5px] bg-gray-200 rounded-xl"></div>
                        <span class="text-sm text-gray-400">0</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="text-sm text-gray-600">3</span>
                        <div class="w-3">
                            <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                class="w-full">
                        </div>
                        <div class="w-[200px] h-[5px] bg-gray-200 rounded-xl"></div>
                        <span class="text-sm text-gray-400">0</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="text-sm text-gray-600">2</span>
                        <div class="w-3">
                            <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                class="w-full">
                        </div>
                        <div class="w-[200px] h-[5px] bg-gray-200 rounded-xl"></div>
                        <span class="text-sm text-gray-400">0</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="text-sm text-gray-600">1</span>
                        <div class="w-3">
                            <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                                class="w-full">
                        </div>
                        <div class="w-[200px] h-[5px] bg-gray-200 rounded-xl"></div>
                        <span class="text-sm text-gray-400">0</span>
                    </div>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-1 border py-1 px-2 rounded-lg">
                    <div class="w-6">
                        <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                            class="w-full">
                    </div>
                    <span class="text-blue-600">5</span>
                </button>
                <button class="flex items-center gap-1 border py-1 px-2 rounded-lg ">
                    <div class="w-6">
                        <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                            class="w-full">
                    </div>
                    <span class="text-blue-600">4</span>
                </button>
                <button class="flex items-center gap-1 border py-1 px-2 rounded-lg">
                    <div class="w-6">
                        <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                            class="w-full">
                    </div>
                    <span class="text-blue-600">3</span>
                </button>
                <button class="flex items-center gap-1 border py-1 px-2 rounded-lg">
                    <div class="w-6">
                        <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                            class="w-full">
                    </div>
                    <span class="text-blue-600">2</span>
                </button>
                <button class="flex items-center gap-1 border py-1 px-2 rounded-lg">
                    <div class="w-6">
                        <img src="{{ asset('storage/icons/icons-section/star.png') }}" alt=""
                            class="w-full">
                    </div>
                    <span class="text-blue-600">1</span>
                </button>
            </div>
        </div>
    </section>

    @section('footer-detail')
        <section class="fixed bottom-0 left-0 right-0 bg-white px-28 py-2 flex justify-between">
            <div class="flex items-center gap-2">
                <div class="w-[150px] h-[50px] relative">
                    <img src="{{ asset('storage/images/heromobil.png') }}" alt=""
                        class="absolute inset-0 w-full h-full object-cover rounded-lg">
                </div>
                <div class="flex flex-col text-gray-800 text-sm">
                    <p>TESLA Lorem, ipsum dolor sit amet</p>
                    <p>Kendaraan</p>
                </div>
            </div>

            <div class="flex items-center gap-11">
                <div class="text-gray-600 px-3 py-1 rounded-xl flex items-center gap-5 bg-gray-100">
                    <button class="font-bold">-</button>
                    <span>1</span>
                    <button class="text-blue-700 font-bold">+</button>
                </div>

                <div class="">
                    <p class="text-[12px] text-gray-400">Total Harga</p>
                    <p class="font-semibold">Rp 114.000</p>
                    <p class="text-[12px] text-emerald-400">Voucher Berhasil Dipakai</p>
                </div>

                <div class="flex gap-2">
                    <button class="border border-blue-700 text-blue-700 font-semibold px-4 py-2 rounded-xl">Tambah Ke
                        Cart</button>
                    <button class="text-white px-4 py-2 bg-blue-700 rounded-xl">Rental Sekarang</button>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
