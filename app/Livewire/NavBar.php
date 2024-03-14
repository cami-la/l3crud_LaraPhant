<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavBar extends Component
{

    public function logout(Request $request)
    {
        //dd('logout');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $this->redirect('/login', navigate:true);
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
