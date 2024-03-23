<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\SupportTicket;



class Tickets extends Component
{
    public ?SupportTicket $supportTicket;
    public $active;

    #[On('ticket-selected')]
    public function ticketActive($id)
    {
        $this->active = $id;
    }

    public function render()
    {
        $tickets = SupportTicket::latest()->get();
        return view('livewire.tickets', compact('tickets'));
    }
}
