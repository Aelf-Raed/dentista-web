<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{

  public function login(LoginRequest $request){
    // $credentials = request()->only('email', 'password');

    // $credentials = $request->validate([
    // 'email' => ['required', 'email'],
    // 'password' => ['required'],
    // ]);

    $credentials = $request->validated();

    // dump($credentials);
    $remember = request()->filled('remember'); //on o null a true o false
    // dd($remember, $credentials);

    if (Auth::attempt($credentials, $remember)) {
      $request->session()->regenerate();
       return redirect()->intended('dashboard');
     }

      // return redirect('login');

    //   return back()->withErrors([
    //     'email' => 'The provided credentials do not match our records.',
    // ]);

    throw ValidationException::withMessages([
      'email' => __('auth.failed'),
      'password' => __('auth.password')
    ]);
  }

  public function logout(Request $request){
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('login');
  }

}
