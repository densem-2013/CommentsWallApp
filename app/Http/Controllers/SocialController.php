<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\SocialAccountService;
//use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Socialite;

class SocialController extends Controller
{

    public function login($provider)
    {
        return Socialite::with($provider)->redirect();
    }

    public function callback(SocialAccountService $service, $provider)
    {

        $driver   = Socialite::driver($provider);
        $user = $service->createOrGetUser($driver, $provider);
        Auth::login($user);
        //$this->auth->login($user, true);
        return redirect()->intended('/blog');

    }

}
