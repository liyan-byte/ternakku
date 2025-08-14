<?php

namespace App\Http\Controllers;

use App\Models\Ternak;
use App\Models\Pakan;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahTernak = Ternak::count();
        $stokPakan = Pakan::sum('stok_kg');
        $hewanSakit = Ternak::where('status_kesehatan', 'Sakit')->count();
        $hewanTerjual = Ternak::where('status_kesehatan', 'Terjual')->count();

        return view('dashboard', compact('jumlahTernak', 'stokPakan', 'hewanSakit', 'hewanTerjual'));
    }
}
