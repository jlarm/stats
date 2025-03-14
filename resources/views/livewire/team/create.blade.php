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
