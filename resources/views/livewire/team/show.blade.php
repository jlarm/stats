<div>
    <div class="flex items-center justify-between">
        <flux:heading size="xl">{{ $team->year }} {{ $team->name }}</flux:heading>
        <flux:button wire:navigate size="sm" href="{{ route('teams.index') }}">Back</flux:button>
    </div>
    <div class="mt-6">
        <flux:table :paginate="$this->stats()">
            <flux:table.columns>
                <flux:table.column>Date</flux:table.column>
                <flux:table.column>Opponent</flux:table.column>
                <flux:table.column>PA</flux:table.column>
                <flux:table.column>AB</flux:table.column>
                <flux:table.column>H</flux:table.column>
                <flux:table.column>RBI</flux:table.column>
                <flux:table.column>R</flux:table.column>
                <flux:table.column>OBP</flux:table.column>
                <flux:table.column>SLG</flux:table.column>
                <flux:table.column>OPS</flux:table.column>
                <flux:table.column>SO</flux:table.column>
                <flux:table.column>BB</flux:table.column>
                <flux:table.column>HBP</flux:table.column>
                <flux:table.column>SAC</flux:table.column>
                <flux:table.column>SF</flux:table.column>
                <flux:table.column>ROE</flux:table.column>
                <flux:table.column>FC</flux:table.column>
                <flux:table.column>SB</flux:table.column>
                <flux:table.column>SBP</flux:table.column>
                <flux:table.column>CS</flux:table.column>
                <flux:table.column>PIK</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($this->stats() as $stat)
                    <flux:table.row>
                        <flux:table.cell>{{ $stat->date->format('M d, Y') }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->opponent->name }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->pa }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->ab }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->h }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->rbi }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->r }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->obp }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->slg }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->ops }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->so }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->bb }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->hbp }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->sac }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->sf }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->roe }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->fc }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->sb }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->sbp }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->cs }}</flux:table.cell>
                        <flux:table.cell>{{ $stat->pik }}</flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </div>
</div>
