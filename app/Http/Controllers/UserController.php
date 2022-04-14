<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('pages.user', ['data'=> $data]);

    }
    public function edit()
    {
        return view('pages.edituser');
    }
}

