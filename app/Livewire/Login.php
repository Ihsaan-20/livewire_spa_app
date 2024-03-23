<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $form = [
        'email' => "",
        'password' => "",
    ];

    public function login()
    {
        $this->validate([
            'form.email' => 'required|email',
            'form.password' => 'required',
        ]);

        if (Auth::attempt($this->form)) {
            session()->regenerate();
            session()->flash('success', 'User logged in successfully 😇');
            return redirect()->route('home');
        } else {
            session()->flash('error', 'Invalid credentials. Please try again.');
            return redirect()->back();
        }
    }


    public function render()
    {
        return view('livewire.login');
    }
}
