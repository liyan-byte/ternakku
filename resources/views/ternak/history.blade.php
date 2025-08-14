@extends('layouts.main')

@section('content')
<style>
.table-riwayat {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    font-size: 14px;
}

.table-riwayat th, .table-riwayat td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

.table-riwayat th {
    background-color: #f44336;
    color: white;
    font-weight: bold;
}

.sub-table th {
    background-color: #ffcccc;
    color: black;
}

.sub-table td {
    background-color: #fff8f8;
}
</style>

<h2>Riwayat Ternak</h2>

<table class="table-riwayat">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Jenis</th>
            <th>Ras</th>
            <th>Umur</th>
            <th>Berat</th>
            <th>Kesehatan</th>
            <th>Reproduksi</th>
            <th>Jadwal Pakan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ternak as $t)
        <tr>
            <td>{{ $t->kode_ternak }}</td>
            <td>{{ $t->jenis }}</td>
            <td>{{ $t->ras }}</td>
            <td>{{ $t->umur }}</td>
            <td>{{ $t->berat }}</td>
            <td>
                <table class="sub-table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Jenis Pemeriksaan</th>
                            <th>Diagnosa</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($t->kesehatan as $k)
                        <tr>
                            <td>{{ $k->tanggal }}</td>
                            <td>{{ $k->jenis_pemeriksaan }}</td>
                            <td>{{ $k->diagnosa }}</td>
                            <td>{{ $k->tindakan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
            <td>
                <table class="sub-table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Jenis</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($t->reproduksi as $r)
                        <tr>
                            <td>{{ $r->tanggal }}</td>
                            <td>{{ $r->jenis }}</td>
                            <td>{{ $r->keterangan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
            <td>
                <table class="sub-table">
                    <thead>
                        <tr>
                            <th>Tanggal Pakan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($t->jadwalPakan as $p)
                        <tr>
                            <td>{{ $p->tanggal }}</td>
                            <td>{{ $p->jumlah }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
