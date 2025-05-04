<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
    {
        public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', ['data' => $data, 'editData' => null]);
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function edit($id)
    {
        $data = Mahasiswa::all();
        $editData = Mahasiswa::find($id);
        return view('mahasiswa.index', compact('data', 'editData'));
    }

    public function update(Request $request, $id)
    {
        Mahasiswa::find($id)->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect()->route('mahasiswa.index');
    }
    }
