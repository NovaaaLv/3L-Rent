<div class="">
    <div class="hover:bg-slate-300 transition-all ease-in-out duration-500 rounded-xl">
        <div class="text-smn text-text_desk w-365 flex-wrap flex items-center justify-center py-4 bg-transparent gap-2"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="w-320 h-48 overflow-hidden rounded-xl">
                {{-- <img src="{{ $post->image_mobil }}" alt="" class="w-full "> --}}
                <img src="{{ asset('storage/images/kirill.jpg') }}" alt="">
            </div>
            <div class="flex flex-col gap-2">
                {{-- <span class="text-xl font-bold">{{ $post->nama_mobil }}</span> --}}
                <div class="flex flex-wrap gap-x-7 gap-y-3 items-center bg-transparent max-w-72">
                    <div class="flex gap-1">
                        <div class="w-6">
                            <img src="{{ asset('storage/icons/icons-mobil/seat.svg') }}" alt="" class="w-full">
                        </div>
                        <div class="flex flex-col">
                            <span>TEMPAT DUDUK</span>
                            {{-- <span>{{ $post->tem_duduk }}</span> --}}
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div class="w-6">
                            <img src="{{ asset('storage/icons/icons-mobil/suitcase.svg') }}" alt=""
                                class="w-full">
                        </div>
                        <div class="flex flex-col">
                            <span>BAGASI</span>
                            {{-- <span>{{ $post->bagasi }}</span> --}}
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div class="w-6">
                            <img src="{{ asset('storage/icons/icons-mobil/transmition.svg') }}" alt=""
                                class="w-full">
                        </div>
                        <div class="flex-col flex">
                            <span>TRANSMISI</span>
                            {{-- <span> {{ $post->transmisi }} </span> --}}
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div class="w-6">
                            <img src="{{ asset('storage/icons/icons-mobil/fuel.svg') }}" alt="" class="w-full">
                        </div>
                        <div class="flex flex-col">
                            <span>BAHAN BAKAR</span>
                            {{-- <span>{{ $post->bahan_bakar }}</span> --}}
                        </div>
                    </div>
                    <div class="flex gap-1 ps-1">
                        <div class="w-6">
                            <img src="{{ asset('storage/icons/icons-mobil/asurance.svg') }}" alt=""
                                class="w-full">
                        </div>
                        <div class="flex flex-col">
                            <span>ASURANSI KENDARAAN</span>
                            {{-- <span> {{ $post->asuransi }} </span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
