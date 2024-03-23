<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\SupportTicket;



class Tickets extends Component
{
    public ?SupportTicket $supportTicket;

    
    #[On('ticket-selected')]
    public function ticketSelected($id)
    {

        dd($id);
        // $this->ticket_id = $ticket_id;
    }



    public function render()
    {
        $tickets = SupportTicket::latest()->get();
        return view('livewire.tickets', compact('tickets'));
    }
}
