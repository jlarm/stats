<div>
    <x-slot name="header">
        <div class="flex justify-between items-end">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $player->name }}
            </h2>
            <a
                wire:navigate
                href={{ route('at-bats.create', $player) }}
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
            >
                New at bat
            </a>
        </div>
    </x-slot>
</div>
