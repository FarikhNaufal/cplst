<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;


class LoginForm extends Component
{

    #[Validate(['required', 'email'])]
    public $email = '';

    #[Validate(['required', 'min:8'])]
    public $password = '';



    public function login(){
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            $this->dispatch('user_logged_in');
            return redirect()->intended()->with('success', 'Yohooooo, welcome back buddy...!');

        } else {
            $this->addError('credentials', 'Invalid email or password.');
        }


    }


    public function render()
    {
        return view('livewire.login-form');
    }
}
