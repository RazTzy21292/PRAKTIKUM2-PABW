<!DOCTYPE html>
<html>
<head>
    <title>Form Lapor Banjir</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #dbeafe, #93c5fd);
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
        }
        h1 {
            color: #1e3a8a;
            font-size: 22px;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: block;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 6px;
            margin-top: 14px;
            font-size: 14px;
        }
        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
        }
        input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,0.15);
        }
        button {
            width: 100%;
            margin-top: 22px;
            background: #2563eb;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #1d4ed8;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>🌊 Form Pelaporan Banjir</h1>

        <form action="/lapor-banjir/simpan" method="POST">
            @csrf

            <label>Nama Pelapor</label>
            <input type="text" name="nama_pelapor">

            <label>Lokasi Kejadian</label>
            <input type="text" name="lokasi">

            <label>Tinggi Genangan Air (cm)</label>
            <input type="number" name="tinggi_genangan">

            <button type="submit">Kirim</button>
        </form>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            const tinggi = document.querySelector('input[name="tinggi_genangan"]').value;
            if (tinggi < 0) {
                e.preventDefault();
                alert('Tinggi genangan air tidak boleh bernilai negatif!');
            }
        });
    </script>
</body>
</html>