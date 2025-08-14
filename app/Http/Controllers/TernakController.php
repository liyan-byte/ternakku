<?php

namespace App\Http\Controllers;

use App\Models\Ternak;
use Illuminate\Http\Request;

class TernakController extends Controller
{
    public function index()
    {
        $ternak = Ternak::all();
        return view('ternak.index', compact('ternak'));
    }

    public function create()
    {
        return view('ternak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_ternak' => 'required',
            'jenis' => 'required',
            'ras' => 'required',
            'umur' => 'required|integer',
            'berat' => 'required|numeric',
            'status_kesehatan' => 'required',
            'status_reproduksi' => 'required',
        ]);

        Ternak::create($request->all());
        return redirect()->route('ternak.index')->with('success', 'Data ternak berhasil ditambahkan.');
    }

    public function edit(Ternak $ternak)
    {
        return view('ternak.edit', compact('ternak'));
    }

    public function update(Request $request, Ternak $ternak)
    {
        $request->validate([
            'kode_ternak' => 'required',
            'jenis' => 'required',
            'ras' => 'required',
            'umur' => 'required|integer',
            'berat' => 'required|numeric',
            'status_kesehatan' => 'required',
            'status_reproduksi' => 'required',
        ]);

        $ternak->update($request->all());
        return redirect()->route('ternak.index')->with('success', 'Data ternak berhasil diupdate.');
    }

    public function destroy(Ternak $ternak)
    {
        $ternak->delete();
        return redirect()->route('ternak.index')->with('success', 'Data ternak berhasil dihapus.');
    }

    public function show(Ternak $ternak)
{
    // Load riwayat ternak dari relasi
    $ternak->load(['kesehatan', 'reproduksi', 'jadwalPakan']);

    return view('ternak.show', compact('ternak'));
}

    public function history()
{
    $ternak = Ternak::with(['kesehatan', 'reproduksi', 'jadwalPakan'])->get();
    return view('ternak.history', compact('ternak'));
}

}
