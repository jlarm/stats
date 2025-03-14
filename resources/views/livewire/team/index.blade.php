<div>
    <div class="mx-auto max-w-lg space-y-3 max-sm:px-2">
        <div>
            <livewire:team.create />
        </div>
        @foreach ($teams as $team)
            <flux:card>
                <div class="flex items-center justify-between">
                    <flux:heading>{{ $team->year }} {{ $team->name }}</flux:heading>
                    <flux:button wire:navigate variant="ghost" size="sm" href="{{ route('teams.show', $team) }}">
                        View
                    </flux:button>
                </div>
            </flux:card>
        @endforeach
    </div>
</div>
