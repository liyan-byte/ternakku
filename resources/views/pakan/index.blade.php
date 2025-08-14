@extends('layouts.main')

@section('title', 'Stok Pakan')

@section('content')
<div class="container">
    <h2>Stok Pakan</h2>
    <a href="{{ route('pakan.create') }}" class="btn btn-primary mb-3">Tambah Pakan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama Pakan</th>
            <th>Stok (kg)</th>
            <th>Harga per kg</th>
            <th>Aksi</th>
        </tr>
        @foreach($pakan as $item)
<tr>
    <td>{{ $item->nama_pakan }}</td>
    <td>{{ $item->stok_kg }}</td>
    <td>{{ number_format($item->harga_per_kg, 0, ',', '.') }}</td>
    <td>
        <a href="{{ route('pakan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('pakan.destroy', $item->id) }}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
        </form>
    </td>
</tr>
@endforeach

    </table>
</div>
@endsection
