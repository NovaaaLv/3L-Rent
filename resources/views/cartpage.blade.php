<x-app-layout>
    <section class="justify-center items-center flex justify-items-center my-8">
        <div class="mt-16 bg-gray-100 w-[60rem] h-60 flex items-center rounded-xl overflow-hidden">
            <button class="bg-slate-300 h-full w-16 items-center justify-center hover:bg-sky-700 hover:ease-in duration-300">
            <img src="{{ asset('storage/icons/icons-cart/market.png') }}" class="size-6 ml-2"/>
            </button>
            {{-- <div class="flex gap-4"> <h1 class="ml-6 font-bold text-right max-h-60 max-w-24 mt-8"> Motor Supra </h1>
            <p class=" max-h-60 font-normal text-right text-xs">Deskripsi ini tentang motor dan mobil atau apapun itu </p>
           
            <div>
                <img src="{{asset('storage/images/awikwok.jpg')}}" class="w-[23rem] h-48 justify-end items-end rounded-sm"> 
            </div>
            </div> --}}

            <div class=" w-screen">
                <div class="flex justify-between p-16">
                    <div class="flex flex-col text-right">
                        <span class="font-bold text-2xl">Motor Supra</span>
                        <span>Deskripsi ini tentang motor dan mobil atau apapun itu</span>
                    </div>
                    <div class="rounded-lg overflow-hidden">
                        <img src="{{asset('storage/images/harley.jpg')}}" class="w-[23rem] h-48 rounded-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>
 </x-app-layout>
