<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }
    
    public function callback(){
        // Recupero l'utente da Google
        $google_user = Socialite::driver('google')->user();
        
        // Cerca l'utente usando l'email
        $finduser = User::where('email', $google_user->getEmail())->first();
        
        if ($finduser) {
            Auth::login($finduser);
        } else {
            // Recupero o creo l'utente su Laravel
            $user = User::updateOrCreate([
                'email' => $google_user->getEmail()
            ], [
                'name' => $google_user->getName()
            ]);
            
            // Faccio loggare l'utente
            Auth::login($user);
        }
        
        // Lo porto nella home
        return to_route('homepage');
    }
}
