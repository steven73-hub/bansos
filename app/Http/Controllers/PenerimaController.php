<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PenerimaController extends Controller
{
    public function index()
    {
        return view('pages.penerima');
    }
    public function add()
    {
        return view('pages.tambahpenerima');
    }
    public function edit()
    {
        return view('pages.editcalon');
    }
}
