<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SignupForm extends Component
{
    #[Validate(['required', 'unique:users,username', 'min:4', 'max:15', 'regex:/^[a-zA-Z0-9.-_]+$/'])]
    public $username='';

    #[Validate(['required', 'email', 'unique:users,email'])]
    public $email='';

    #[Validate(['required', 'min:8'])]
    public $password='';

    public $isModalOpen = false;

    public function store(){
        $this->validate();
        User::create($this->all());

        if (Auth::attempt(['email' => $this->email, 'password'=> $this->password])) {
            session()->regenerate();
            $this->dispatch('user-logged');
            return redirect()->intended()->with('success', 'Yohooooo, welcome to Cuplislite buddy...!');
        }

    }

    public function render()
    {
        return view('livewire.signup-form');
    }
}
