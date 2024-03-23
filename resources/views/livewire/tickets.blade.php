
<div class="card mt-3 p-3">
    <h3>Questions</h3>
    @foreach ($tickets as $ticket )    
        <div class="card mb-3 p-2 {{ $active == $ticket->id ? ' div_active' : ''}}" 
             style="cursor: pointer" 
             wire:click="$dispatch('ticket-selected', { id: {{ $ticket->id }} })"
             {{-- wire:click="ticketSelected({{ $ticket->id }})" --}}
             >
            <h6>
                {{$ticket->question}}
            </h6>
        </div>
    @endforeach
    
</div>
