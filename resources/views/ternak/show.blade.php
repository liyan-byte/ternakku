@extends('layouts.main')

@section('content')
    <h1>Detail Ternak: {{ $ternak->kode_ternak }}</h1>

    <p>Jenis: {{ $ternak->jenis }}</p>
    <p>Ras: {{ $ternak->ras }}</p>
    <p>Umur: {{ $ternak->umur }} bulan</p>
    <p>Berat: {{ $ternak->berat }} kg</p>
    <p>Status Kesehatan: {{ $ternak->status_kesehatan }}</p>
    <p>Status Reproduksi: {{ $ternak->status_reproduksi }}</p>

    <h2>Riwayat Kesehatan</h2>
    <ul>
        @foreach($ternak->kesehatan as $k)
            <li>{{ $k->tanggal }} - {{ $k->keterangan }}</li>
        @endforeach
    </ul>

    <h2>Riwayat Reproduksi</h2>
    <ul>
        @foreach($ternak->reproduksi as $r)
            <li>{{ $r->tanggal }} - {{ $r->status }}</li>
        @endforeach
    </ul>

    <h2>Jadwal Pakan</h2>
    <ul>
        @foreach($ternak->jadwalPakan as $j)
            <li>{{ $j->tanggal }} - {{ $j->pakan }}</li>
        @endforeach
    </ul>
@endsection
