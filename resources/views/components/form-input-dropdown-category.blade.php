{{-- <div class="relative w-[20rem] border border-gray-300 bg-gray-200 rounded-sm">
    <button id="dropdownButton" type="button" class="flex items-center w-full ps-2 h-[25px]">
        <div class="w-3">
            <img src="{{ asset('storage/icons/icons-section/dropdown-admin.png') }}" alt="" class="w-full"
                id="img">
        </div>
    </button>
    <div id="dropdownMenu" class="hidden absolute bg-white border border-gray-300 rounded-sm mt-1 w-full z-10">
        <a href="#" wire:click.prevent="selectOption('transportation')"
            class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Transportation</a>
        <a href="#" wire:click.prevent="selectOption('motorcycle')"
            class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Motorcycle</a>
        <a href="#" wire:click.prevent="selectOption('option3')"
            class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 3</a>
    </div>
</div>

<script>
    const img = document.getElementById('img');
    document.getElementById('dropdownButton').addEventListener('click', function() {
        var menu = document.getElementById('dropdownMenu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            img.classList.add('rotate-180')
        } else {
            menu.classList.add('hidden');
            img.classList.remove('rotate-180')
        }
    });

    // Optional: Close the dropdown when clicking outside of it
    document.addEventListener('click', function(event) {
        var button = document.getElementById('dropdownButton');
        var menu = document.getElementById('dropdownMenu');
        if (!button.contains(event.target) && !menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
</script> --}}
