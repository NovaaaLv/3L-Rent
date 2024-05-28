<x-app-layout>
    {{-- <section class="mt-32 flex justify-evenly">
        <div class="left flex flex-col gap-5">
            {{-- <div class="w-96 h-72 overflow-hidden">
                <img src="{{ asset('storage/images/heromobil.png') }}" alt=""
                    class="w-full object-cover object-center h-full">
            {{-- </div> --}}
    {{-- <div class="file-upload relative inline-block">
                <input type="file" id="fileInput" class="hidden">
                <button id="uploadButton" class="file-input w-96 h-72">
                </button> --}}
    {{-- </div> --}}
    {{-- </section> --}}

    {{-- <style>
        .file-input {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            /* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url({{ asset('storage/images/upload.png') }}); */
            background-image: url({{ asset('storage/images/upload.png') }});
        }
    </style> --}}

    <section class="mt-32">
        <form action="" method="post" class="flex justify-center gap-10 ">
            <div class="">
                <input type="file" name="" id="fileInput" class="hidden">
                <button id="uploadButton" class="file-input w-96 h-72" type="button">
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-48">
                            <img src="{{ asset('storage/images/upload.png') }}" alt="" class="w-full">
                        </div>
                        <p class="text-sm font-bold text-gray-600 py-2 px-5 border border-gray-700 rounded-lg">UPLOAD
                            IMAGE</p>
                    </div>
                </button>
            </div>

            <div class="flex flex-col gap-3">
                <div class="flex gap-5 flex-wrap pb-6 border-b border-b-gray-200">
                    <div class="">
                        <p class="text-sm font-bold text-gray-600">Name Item</p>
                        <div class="">
                            <input type="text" name="" id=""
                                class="w-[20rem] h-[25px] border border-gray-300 bg-gray-200 rounded-sm text-sm">
                        </div>
                    </div>
                    <div class="">
                        <p class="text-sm font-bold text-gray-600">Category</p>
                        <div class="relative w-[20rem] border border-gray-300 bg-gray-200 rounded-sm">
                            <button id="dropdownButtonC" type="button"
                                class="flex items-center w-full ps-2 h-[25px] gap-5 ">
                                <div class="w-3">
                                    <img src="{{ asset('storage/icons/icons-section/dropdown-admin.png') }}"
                                        alt="" class="w-full" id="img">
                                </div>
                                <p id="selectedOption" class="text-sm font-bold text-gray-600"></p>
                            </button>
                            <div id="dropdownMenuC"
                                class="hidden absolute bg-white border border-gray-300 rounded-sm mt-1 w-full z-10">
                                <a href="#"
                                    class="dropdown-item block px-4 py-2 text-gray-800 hover:bg-gray-200">Transportation</a>
                                <a href="#"
                                    class="dropdown-item block px-4 py-2 text-gray-800 hover:bg-gray-200">Motorcycle</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-5">
                    <div class="">
                        <p class="text-sm font-bold text-gray-600">Seat</p>
                        <div class="">
                            <x-dropdown-int />
                        </div>
                    </div>
                    <div class="">
                        <p class="text-sm font-bold text-gray-600">Suitcase</p>
                        <div class="">
                            <x-dropdown-int />
                        </div>
                    </div>
                </div>
                <div class="flex gap-5">
                    <div class="">
                        <p class="text-sm font-bold text-gray-600">Transmition</p>
                        <div class="">
                            <x-dropdown-int />
                        </div>
                    </div>
                    <div class="">
                        <p class="text-sm font-bold text-gray-600">Fuel</p>
                        <div class="">
                            <x-dropdown-int />
                        </div>
                    </div>
                </div>
                <div class="flex gap-5 items-end">
                    <div class="">
                        <p class="text-sm font-bold text-gray-600">Asurance</p>
                        <div class="">
                            <x-dropdown-int />
                        </div>
                    </div>
                    <div class="">
                        <button type="submit"
                            class="px-10 py-1 bg-gray-200 border border-gray-300 rounded-lg">Create</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</x-app-layout>

<script>
    document.getElementById('uploadButton').addEventListener('click', function() {
        document.getElementById('fileInput').click();
    });

    document.addEventListener('DOMContentLoaded', function() {
        const img = document.getElementById('img');
        const dropdownButton = document.getElementById('dropdownButtonC');
        const dropdownMenu = document.getElementById('dropdownMenuC');
        const selectedOption = document.getElementById('selectedOption');

        dropdownButton.addEventListener('click', function() {
            if (dropdownMenu.classList.contains('hidden')) {
                dropdownMenu.classList.remove('hidden');
                img.classList.add('rotate-180');
            } else {
                dropdownMenu.classList.add('hidden');
                img.classList.remove('rotate-180');
            }
        });

        document.addEventListener('click', function(event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
                img.classList.remove('rotate-180');
            }
        });

        const dropdownItems = document.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(function(item) {
            item.addEventListener('click', function(event) {
                event.preventDefault();
                selectedOption.textContent = event.target.textContent;
                dropdownMenu.classList.add('hidden');
                img.classList.remove('rotate-180');
            });
        });
    });
</script>
