<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Laporan</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #dcfce7, #86efac);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background: #ffffff;
            width: 100%;
            max-width: 420px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            padding: 32px;
            text-align: center;
        }
        h1 {
            color: #166534;
            font-size: 22px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        table td {
            padding: 10px 4px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
        }
        table td:first-child {
            color: #64748b;
            font-weight: 600;
        }
        table td:last-child {
            color: #0f172a;
            font-weight: 600;
            text-align: right;
        }
        .btn-kembali {
            display: inline-block;
            margin-top: 24px;
            padding: 10px 20px;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: background 0.2s;
        }
        .btn-kembali:hover {
            background: #1d4ed8;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>✅ Laporan Diterima</h1>
        <table>
            <tr><td>Nama Pelapor</td><td>{{ $nama_pelapor }}</td></tr>
            <tr><td>Lokasi Kejadian</td><td>{{ $lokasi }}</td></tr>
            <tr><td>Tinggi Genangan</td><td>{{ $tinggi_genangan }} cm</td></tr>
        </table>
        <a href="/lapor-banjir" class="btn-kembali">← Buat Laporan Baru</a>
    </div>
</body>
</html>