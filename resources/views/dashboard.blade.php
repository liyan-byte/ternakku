@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<h2>Dashboard</h2>
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card bg-primary text-white p-3">
            <h4>Jumlah Hewan</h4>
            <h2>{{ $jumlahTernak }}</h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-success text-white p-3">
            <h4>Pakan Tersedia</h4>
            <h2>{{ $stokPakan }} kg</h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-warning text-dark p-3">
            <h4>Hewan Sakit</h4>
            <h2>{{ $hewanSakit }}</h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-danger text-white p-3">
            <h4>Hewan Terjual</h4>
            <h2>{{ $hewanTerjual }}</h2>
        </div>
    </div>
</div>
@endsection
