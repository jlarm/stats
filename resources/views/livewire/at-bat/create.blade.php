<div>
    <x-slot name="header">
        <div class="flex justify-between items-end">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $player->name }}
            </h2>
{{--            <x-primary-button>New at bat</x-primary-button>--}}
        </div>
    </x-slot>
    <div x-data="{ ballCount: 0, strikeCount: 0 }">
        <div class="space-y-10">
            <div class="flex">
                <button
                    class="bg-slate-600 text-white w-16 h-16 text-4xl"
                    x-on:click="if (strikeCount < 3) strikeCount++"
                >+</button>
                <div class="w-36 text-center">
                    <div class="text-6xl" x-text="strikeCount">0</div>
                </div>
                <button
                    class="bg-slate-600 text-white w-16 h-16 text-4xl"
                    x-on:click="if (strikeCount > 0) strikeCount--">-</button>
            </div>
            <div class="flex">
                <button
                    class="bg-slate-600 text-white w-16 h-16 text-4xl"
                    x-on:click="if (ballCount < 4) ballCount++"
                >+</button>
                <div class="text-6xl mx-10" x-text="ballCount">0</div>
                <button
                    class="bg-slate-600 text-white w-16 h-16 text-4xl"
                    x-on:click="if (ballCount > 0) ballCount--">-</button>
            </div>
        </div>
    </div>
</div>
