@extends('layouts.main')

@section('content')
<div class="container">
    <h3>Pemeriksaan & Pengobatan</h3>

    {{-- Form Tambah --}}
    <form action="{{ route('kesehatan.storePemeriksaan') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Pilih Ternak</label>
            <select name="id_ternak" class="form-control" required>
                <option value="">-- Pilih Ternak --</option>
                @foreach($ternak as $t)
                    <option value="{{ $t->id }}">{{ $t->kode_ternak }} - {{ $t->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ date('Y-m-d') }}" required>
        </div>

        <div class="mb-3">
            <label>Jenis Pemeriksaan</label>
            <input type="text" name="jenis_pemeriksaan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Diagnosa</label>
            <input type="text" name="diagnosa" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tindakan</label>
            <input type="text" name="tindakan" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Tambah Pemeriksaan</button>
    </form>

    <hr>

    {{-- Tabel Daftar Pemeriksaan --}}
    <h4>Daftar Pemeriksaan</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ternak</th>
                <th>Tanggal</th>
                <th>Jenis Pemeriksaan</th>
                <th>Diagnosa</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemeriksaan as $p)
            <tr>
                <td>{{ $p->ternak->kode_ternak ?? '-' }} - {{ $p->ternak->nama ?? '-' }}</td>
                <td>{{ $p->tanggal }}</td>
                <td>{{ $p->jenis_pemeriksaan }}</td>
                <td>{{ $p->diagnosa }}</td>
                <td>{{ $p->tindakan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
