<div>
    <div class="mx-auto max-w-lg space-y-3 max-sm:px-2">
        <div>
            <livewire:team.create />
        </div>
        @foreach ($teams as $team)
            <flux:button wire:navigate class="w-full" size="sm" href="{{ route('teams.show', $team) }}">
                {{ $team->year }} {{ $team->name }}
            </flux:button>
        @endforeach
    </div>
</div>
