<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $form = [
        'name' => "",
        'email' => "",
        'password' => "",
        'password_confirmation' => "",
    ];

    public function add()
    {
        $this->validate([
            'form.name' => 'required',
            'form.email' => 'required | email',
            'form.password' => 'required | confirmed',
        ]);
        $user = User::create($this->form);
        session()->flash('message', 'New user registered successfully 😇');
        return redirect(route('login'));
    }
    public function render()
    {
        return view('livewire.register');
    }
}
