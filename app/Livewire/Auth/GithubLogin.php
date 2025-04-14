<?php
namespace App\Livewire\Auth;
use Livewire\Component;
class GitHubLogin extends Component
{
    public function redirectToGitHub()
    {
        return redirect()->route('github.redirect');
    }
    public function render()
    {
        return view('livewire.auth.github-login');
    }
}
