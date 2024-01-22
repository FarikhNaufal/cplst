<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LogoutForm extends Component
{
    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->intended();

        $this->dispatch('logout_form');

    }

    public function render()
    {
        return view('livewire.logout-form');
    }
}
