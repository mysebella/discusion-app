<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $userInput = $request->all();

        $password = Hash::make($request->password);

        $user = User::create([...$userInput, $password]);

        return redirect()->to('/')->withCookie(Cookie::make('id', $user->id, 60));
    }

    public function login(Request $request)
    {
        // ambil user
        $user = User::where('email', $request->email)->first();

        // jika ada
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return redirect()->to('/')->withCookie(Cookie::make('id', $user->id, 60));
            } else {
                dd('password salah');
            }
        }
    }
}
