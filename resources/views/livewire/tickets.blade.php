<div class="card mt-3 p-3">
    <h3>Support tickets</h3>
    @foreach ($tickets as $ticket )    
        <div class="card mb-3 p-2" 
             style="cursor: pointer" 
             wire:click="$dispatch('ticket-selected', { id: {{ $ticket->id }} })"
             {{-- wire:click="ticketSelected({{ $ticket->id }})" --}}
             >
            <p>
                {{$ticket->question}}
            </p>
        </div>
    @endforeach
    
</div>
