<div>
    <div class="mx-auto max-w-lg space-y-3 max-sm:px-2">
        <div>
            <flux:modal.trigger name="add-team">
                <flux:button variant="primary" icon="plus" class="w-full">Add Team</flux:button>
            </flux:modal.trigger>

            <flux:modal name="add-team" class="md:w-96">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Add Team</flux:heading>
                        <flux:subheading>Add a new team to the list.</flux:subheading>
                    </div>

                    <flux:input label="Team Name" placeholder="Team Name" wire:model="name" />

                    <flux:input label="Year" type="number" wire:model="year" />

                    <div class="flex">
                        <flux:spacer />

                        <flux:button type="submit" variant="primary" wire:click="addTeam">Add Team</flux:button>
                    </div>
                </div>
            </flux:modal>
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
