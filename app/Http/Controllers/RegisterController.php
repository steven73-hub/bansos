<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.register', [
        'title' => 'Register',
        'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:30', 'unique:users'],
            'nama' => 'required|min:3|max:255',
            'level' => 'required',
            'password' =>'required|min:3|max:255'
            
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        
        User::create($validatedData);


        $request->session()->flash('success', 'Registrasi berhasil, Silahkan Login Terlebih Dahulu :)');
        
        return redirect('/login');
        // dd('registrasi berhasil');

    }

    // public function store(Request $request){
    //     $request->validate([
    //         'nama' => 'required|min:3|max:255',
    //         'username' => ['required', 'min:3', 'max:30', 'unique:users'],
    //         'password' =>'required|min:3|max:255',
    //         'type' => 'required'
    //     ]);

        

    //     dd('registrasi berhasil');

    // }


}
