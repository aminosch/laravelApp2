<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GitHubController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $githubUser = Socialite::driver('github')
            ->stateless()
            ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
            ->user();

        $user = User::where('email', $githubUser->getEmail())->first();

        if ($user) {
            if (! $user->github_id) {
                $user->update([
                    'github_id' => $githubUser->getId(),
                ]);
            }
        } else {
            $user = User::create([
                'name' => $githubUser->getName() ?? $githubUser->getNickname(),
                'email' => $githubUser->getEmail(),
                'github_id' => $githubUser->getId(),
                'avatar' => $githubUser->getAvatar(),
                'password' => '', // important pour SQLite
                'can_set_password' => false,
            ]);

            $user->assignRole('viewer');
        }

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
