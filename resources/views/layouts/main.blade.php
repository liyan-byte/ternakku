<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Sistem Peternakan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { display: flex; }
        .sidebar {
            min-width: 250px;
            background-color: #b52b2b;
            color: white;
            height: 100vh;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 8px 20px;
            cursor: pointer;
        }
        .sidebar a:hover {
            background-color: rgba(255,255,255,0.2);
        }
        .submenu {
            display: none;
            padding-left: 20px;
        }
        .submenu a {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Peternakan</h4>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        
        <a class="dropdown-toggle">Data Ternak</a>
        <div class="submenu">
            <a href="{{ route('ternak.create') }}">Tambah Ternak</a>
            <a href="{{ route('ternak.index') }}">Data Ternak Aktif</a>
            <a href="{{ route('ternak.history') }}">Riwayat Ternak</a>
        </div>

        <a class="dropdown-toggle">Pakan</a>
        <div class="submenu">
            <a href="{{ route('pakan.index') }}">Stok Pakan</a>
            <a href="{{ route('jadwal-pakan.index') }}">Jadwal Pakan</a>
        </div>

        <a class="dropdown-toggle">Kesehatan</a>
<div class="submenu">
    <a href="{{ route('kesehatan.jadwal-vaksinasi') }}">Jadwal Vaksinasi</a>
    <a href="{{ route('kesehatan.pemeriksaan') }}">Pemeriksaan & Pengobatan</a>
</div>


        <a class="dropdown-toggle">Reproduksi</a>
        <div class="submenu">
            <a href="{{ route('reproduksi.index') }}">Data Kawin</a>
            <a href="{{ route('reproduksi.index') }}">Kelahiran</a>
            <a href="{{ route('reproduksi.index') }}">Kematian</a>
        </div>

        <a class="dropdown-toggle">Laporan</a>
        <div class="submenu">
            <a href="{{ route('laporan.index') }}">Laporan Keuangan</a>
            <a href="{{ route('laporan.index') }}">Laporan Produksi</a>
        </div>

        <a href="{{ route('pengguna.index') }}">Pengguna</a>
    </div>

    <div class="content p-4" style="flex:1">
        @yield('content')
    </div>

    <script>
        document.querySelectorAll('.dropdown-toggle').forEach(item => {
            item.addEventListener('click', () => {
                let submenu = item.nextElementSibling;
                submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>
