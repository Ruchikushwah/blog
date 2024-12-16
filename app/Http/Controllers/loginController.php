<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class loginController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                // If the user already exists in your system, log them in.
                Auth::login($user);
            } else {
                // If the user doesn't exist, create a new user.
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => 123456789,
                ]);

                Auth::login($user);
            }

            return redirect()->intended('/');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['msg' => 'Error authenticating with Google']);
        }
    }
    public function auth_logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
