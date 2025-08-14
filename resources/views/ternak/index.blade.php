@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2>Data Ternak</h2>
    <a href="{{ route('ternak.create') }}" class="btn btn-primary mb-3">Tambah Ternak</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Kode</th>
            <th>Jenis</th>
            <th>Ras</th>
            <th>Umur</th>
            <th>Berat</th>
            <th>Status Kesehatan</th>
            <th>Status Reproduksi</th>
            <th>Aksi</th>
        </tr>
        @foreach($ternak as $ternak)
        <tr>
            <td>{{ $ternak->kode_ternak }}</td>
            <td>{{ $ternak->jenis }}</td>
            <td>{{ $ternak->ras }}</td>
            <td>{{ $ternak->umur }}</td>
            <td>{{ $ternak->berat }}</td>
            <td>{{ $ternak->status_kesehatan }}</td>
            <td>{{ $ternak->status_reproduksi }}</td>
            <td>
                <a href="{{ route('ternak.edit', $ternak->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('ternak.destroy', $ternak->id) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
