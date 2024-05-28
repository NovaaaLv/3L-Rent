<section>
    <div>
        <p class="text-sm font-bold text-gray-600">Category</p>
        <div class="relative w-[20rem] border border-gray-300 bg-gray-200 rounded-sm">
            <button id="dropdownButtonC" type="button" class="flex items-center w-full ps-2 h-[25px] gap-5">
                <div class="w-3">
                    <img src="{{ asset('storage/icons/icons-section/dropdown-admin.png') }}" alt="" class="w-full"
                        id="imgC">
                </div>
                <p id="selectedOptionC" class="text-sm font-bold text-gray-600"></p>
            </button>
            <div id="dropdownMenuC" class="hidden absolute bg-white border border-gray-300 rounded-sm mt-1 w-full z-10">
                <a href="#"
                    class="dropdown-itemC block px-4 py-2 text-gray-800 hover:bg-gray-200">Transportation</a>
                <a href="#" class="dropdown-itemC block px-4 py-2 text-gray-800 hover:bg-gray-200">Motorcycle</a>
            </div>
        </div>
    </div>

    <div class="relative w-[20rem] border border-gray-300 bg-gray-200 rounded-sm mt-4">
        <button id="dropdownButtonINT" type="button" class="flex items-center w-full ps-2 h-[25px]">
            <div class="w-3">
                <img src="{{ asset('storage/icons/icons-section/dropdown-admin.png') }}" alt="" class="w-full"
                    id="imgINT">
            </div>
        </button>
        <div id="dropdownMenuINT" class="hidden absolute bg-white border border-gray-300 rounded-sm mt-1 w-full z-10">
            <a href="#" class="dropdown-itemINT block px-4 py-2 text-gray-800 hover:bg-gray-200">1</a>
            <a href="#" class="dropdown-itemINT block px-4 py-2 text-gray-800 hover:bg-gray-200">2</a>
            <a href="#" class="dropdown-itemINT block px-4 py-2 text-gray-800 hover:bg-gray-200">3</a>
            <a href="#" class="dropdown-itemINT block px-4 py-2 text-gray-800 hover:bg-gray-200">4</a>
            <a href="#" class="dropdown-itemINT block px-4 py-2 text-gray-800 hover:bg-gray-200">5</a>
            <a href="#" class="dropdown-itemINT block px-4 py-2 text-gray-800 hover:bg-gray-200">6</a>
        </div>
    </div>
    <p id="selectedOptionINT" class="mt-2 text-sm font-bold text-gray-600"></p>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Category dropdown
        const imgC = document.getElementById('imgC');
        const dropdownButtonC = document.getElementById('dropdownButtonC');
        const dropdownMenuC = document.getElementById('dropdownMenuC');
        const selectedOptionC = document.getElementById('selectedOptionC');
        const dropdownItemsC = document.querySelectorAll('.dropdown-itemC');

        dropdownButtonC.addEventListener('click', function() {
            if (dropdownMenuC.classList.contains('hidden')) {
                dropdownMenuC.classList.remove('hidden');
                imgC.classList.add('rotate-180');
            } else {
                dropdownMenuC.classList.add('hidden');
                imgC.classList.remove('rotate-180');
            }
        });

        document.addEventListener('click', function(event) {
            if (!dropdownButtonC.contains(event.target) && !dropdownMenuC.contains(event.target)) {
                dropdownMenuC.classList.add('hidden');
                imgC.classList.remove('rotate-180');
            }
        });

        dropdownItemsC.forEach(function(item) {
            item.addEventListener('click', function(event) {
                event.preventDefault();
                selectedOptionC.textContent = event.target.textContent;
                dropdownMenuC.classList.add('hidden');
                imgC.classList.remove('rotate-180');
            });
        });

        // INT dropdown
        const imgINT = document.getElementById('imgINT');
        const dropdownButtonINT = document.getElementById('dropdownButtonINT');
        const dropdownMenuINT = document.getElementById('dropdownMenuINT');
        const selectedOptionINT = document.getElementById('selectedOptionINT');
        const dropdownItemsINT = document.querySelectorAll('.dropdown-itemINT');

        dropdownButtonINT.addEventListener('click', function() {
            if (dropdownMenuINT.classList.contains('hidden')) {
                dropdownMenuINT.classList.remove('hidden');
                imgINT.classList.add('rotate-180');
            } else {
                dropdownMenuINT.classList.add('hidden');
                imgINT.classList.remove('rotate-180');
            }
        });

        document.addEventListener('click', function(event) {
            if (!dropdownButtonINT.contains(event.target) && !dropdownMenuINT.contains(event.target)) {
                dropdownMenuINT.classList.add('hidden');
                imgINT.classList.remove('rotate-180');
            }
        });

        dropdownItemsINT.forEach(function(item) {
            item.addEventListener('click', function(event) {
                event.preventDefault();
                selectedOptionINT.textContent = 'Selected: ' + event.target.textContent;
                dropdownMenuINT.classList.add('hidden');
                imgINT.classList.remove('rotate-180');
            });
        });
    });
</script>
