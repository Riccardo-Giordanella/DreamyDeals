<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function redirect(){
        return Socialite::driver('facebook')->redirect();
    }
    
    public function callback(){
        // Recupero l'utente da Facebook
        $fb_user = Socialite::driver('facebook')->user();
        
        // Cerca l'utente usando l'email
        $finduser = User::where('email', $fb_user->getEmail())->first();
        
        if ($finduser) {
            Auth::login($finduser);
        } else {
            // Recupero o creo l'utente su Laravel
            $user = User::updateOrCreate([
                'email' => $fb_user->getEmail()
            ], [
                'name' => $fb_user->getName()
            ]);
            
            // Faccio loggare l'utente
            Auth::login($user);
        }
        
        // Lo porto nella home
        return to_route('homepage');
    }
}
