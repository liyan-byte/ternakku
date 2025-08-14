<?php

namespace App\Http\Controllers;

use App\Models\JadwalVaksin;
use App\Models\Kesehatan;
use App\Models\Ternak;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class KesehatanController extends Controller
{
    // Menampilkan daftar jadwal vaksinasi
    public function index()
    {
        $data = JadwalVaksin::all();
        return view('kesehatan.jadwal-vaksin', compact('data'));
    }

    // Menambahkan jadwal vaksinasi baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jenis_vaksin' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        JadwalVaksin::create($request->all());

        return redirect()->back()->with('success', 'Jadwal vaksin berhasil ditambahkan');
    }

    // Menampilkan jadwal vaksinasi (versi halaman khusus)
    public function jadwalVaksinasi()
    {
        $data = JadwalVaksin::all();
        return view('kesehatan.jadwal-vaksinasi', compact('data'));
    }

    // Simpan data jadwal vaksinasi dari form khusus
    public function storeJadwalVaksinasi(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jenis_vaksin' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        JadwalVaksin::create($request->all());

        return redirect()->route('kesehatan.jadwal-vaksinasi')
                         ->with('success', 'Jadwal vaksinasi berhasil ditambahkan');
    }

    // Halaman pemeriksaan & pengobatan
    public function pemeriksaan()
    {
        // Ambil data ternak untuk dropdown
        $ternak = Ternak::all();

        // Ambil semua pemeriksaan beserta relasi ternaknya
        $pemeriksaan = Pemeriksaan::with('ternak')->get();

        return view('kesehatan.pemeriksaan', compact('ternak', 'pemeriksaan'));
    }

    // Simpan data pemeriksaan
    public function storePemeriksaan(Request $request)
    {
        $request->validate([
            'id_ternak' => 'required|exists:ternak,id',
            'tanggal' => 'required|date',
            'jenis_pemeriksaan' => 'required|string',
            'diagnosa' => 'required|string',
            'tindakan' => 'nullable|string',
        ]);

        Pemeriksaan::create($request->all());

        return redirect()->back()->with('success', 'Data pemeriksaan berhasil ditambahkan');
    }
}
