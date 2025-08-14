@extends('layouts.main')

@section('title', 'Tambah Pakan')

@section('content')
<div class="container">
    <h2>Tambah Pakan</h2>
    <form action="{{ route('pakan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_pakan" class="form-label">Nama Pakan</label>
            <input type="text" name="nama_pakan" class="form-control" value="{{ old('nama_pakan') }}" required>
        </div>
        <div class="mb-3">
            <label for="stok_kg" class="form-label">Stok (kg)</label>
            <input type="number" name="stok_kg" class="form-control" value="{{ old('stok_kg') }}" required>
        </div>
        <div class="mb-3">
            <label for="harga_per_kg" class="form-label">Harga per kg</label>
            <input type="number" step="0.01" name="harga_per_kg" class="form-control" value="{{ old('harga_per_kg') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('pakan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
