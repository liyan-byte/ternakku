@extends('layouts.main')

@section('title', 'Jadwal Vaksinasi')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Jadwal Vaksinasi</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card mb-4">
        <div class="card-header">Tambah Jadwal Vaksin</div>
        <div class="card-body">
            <form method="POST" action="{{ route('kesehatan.jadwal-vaksin.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Vaksin</label>
                    <input type="text" name="jenis_vaksin" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Daftar Jadwal Vaksinasi</div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Tanggal</th>
                        <th>Jenis Vaksin</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $item)
                        <tr>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->jenis_vaksin }}</td>
                            <td>{{ $item->keterangan }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Belum ada jadwal vaksinasi</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
