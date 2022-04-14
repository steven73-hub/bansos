<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use Validator;


class KriteriaController extends Controller
{
    public function index()
    {

        $data = Kriteria::all();

        return view('pages.kriteria', ['data'=> $data]);

    }
    public function add()
    {
        return view('pages.tambahkriteria');
    }

    public function create(Request $request)
    {
        
        $validatedData = $request->validate([
            'kriteria' => 'required|max:128|min:3|unique:kriteria',
            'type' => 'required',
            'bobot' => 'required|numeric',
            'variabel' => 'required|numeric',
        ]);

        // dd($request->variabel);
        Kriteria::create($validatedData);
        $request->session()->flash('success', 'sukses ' . $request->kriteria . ' berhasil dibuat');
        return redirect()->route('kriteria');

    }

    public function edit()
    {
        
        return view('pages.editkriteria');
    }
}
