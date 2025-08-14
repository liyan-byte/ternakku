@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2>Tambah Ternak</h2>
    <form action="{{ route('ternak.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Kode Ternak</label>
            <input type="text" name="kode_ternak" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenis</label>
            <input type="text" name="jenis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Ras</label>
            <input type="text" name="ras" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Berat</label>
            <input type="number" step="0.01" name="berat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status Kesehatan</label>
            <input type="text" name="status_kesehatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status Reproduksi</label>
            <input type="text" name="status_reproduksi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('ternak.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
