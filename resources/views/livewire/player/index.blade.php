<div class="space-y-5">
    @foreach($players as $player)
        <a
            wire:navigate
            href="{{ route('players.show', $player) }}"
            class="block w-full text-center py-3 text-slate-100 transition-colors duration-150 bg-slate-700 rounded-lg focus:shadow-outline hover:bg-slate-800"
        >
            {{ $player->name }}
        </a>
    @endforeach
</div>
