<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SeleksiController extends Controller
{
    public function index()
    {
        return view('pages.seleksi');
    }
    public function add()
    {
        return view('pages.tambahseleksi');
    }
    public function edit()
    {
        return view('pages.editseleksi');
    }
}
