<?php
namespace App\Livewire\Auth;
use Livewire\Component;
class GoogleLogin extends Component
{
    public function redirectToGoogle()
    {
        return redirect()->route('google.redirect');
    }
    public function render()
    {
        return view('livewire.auth.google-login');
    }
}
