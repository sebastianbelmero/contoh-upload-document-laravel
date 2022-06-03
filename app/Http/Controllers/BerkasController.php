<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        return view('upload-berkas');
    }

    public function store(Request $request)
    {
        Berkas::create([
            'berkas' => $request->file('berkas')->store('berkas', 'public'),
        ]);

        return redirect()->route('berkas.index')->with('success', 'Berhasil mengupload berkas');
    }
}
