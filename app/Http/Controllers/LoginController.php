<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{
    public function index(){
        return view('pages.login', [
        'title' => 'Login',
        'active' => 'login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required', 'username',
            'password' => ['required'],
        ]);
        // dd('login berhasil');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('/admin');
            }
            if ($user->level == 'user') {
                return redirect()->intended('/user');
            }
            return view('pages.dashboard');
        }

        return back()->withErrors([
            'username' => 'username atau password anda salah',
            'password' => 'username',
            
            
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }

}
