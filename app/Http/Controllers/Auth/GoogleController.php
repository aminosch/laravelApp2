<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback()
    {
        $googleUser = Socialite::driver('google')
            ->stateless()
            ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
            ->user();

        $user = \App\Models\User::where('email', $googleUser->getEmail())->first();

        if ($user) {
            if (! $user->google_id) {
                $user->update([
                    'google_id' => $googleUser->getId(),
                ]);
            }
        } else {
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
                'password' => '', // important pour SQLite
                'can_set_password' => false,
            ]);

            $user->assignRole('viewer');
        }

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
