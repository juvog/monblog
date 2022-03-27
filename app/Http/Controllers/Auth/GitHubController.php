<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Manager\UserManager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{

    public function auth(){

        return Socialite::driver('github')->redirect();
    }

    public function redirect(){

        $userInfos = Socialite::driver('github')->user();
        $user = User::firstorCreate(
            ['email' =>$userInfos->email],
            [
                'name'=>$userInfos->name,
                'password'=> Hash::make(Str::random(24)),
            ]
        );

        Auth::login($user);
        return redirect()->route('home');
    }
}
