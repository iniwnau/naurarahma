<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Warga</title>
    <link rel="stylesheet" href="{{ asset('assets-guest/src/css/tailwind.css') }}">
</head>

<body class="bg-gray-50 text-gray-800">

    @extends('guest.dashboard')

    @section('content')
    <style>
        /* ===== FORM STYLE ===== */
        .form-wrapper {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: 120px;
            /* supaya tidak nempel navbar */
            background-color: #f8f9fa;
        }

        .form-card {
            width: 100%;
            max-width: 700px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 40px 50px;
        }

        .form-card h2 {
            text-align: center;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 6px;
            color: #444;
            text-align: left;
        }

        input,
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            outline: none;
        }

        input:focus,
        select:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.2);
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            text-align: center;
        }

        .btn-back {
            background-color: #f3f4f6;
            color: #333;
            border: 1px solid #ddd;
        }

        .btn-back:hover {
            background-color: #e5e7eb;
        }

        .btn-submit {
            background-color: #4f46e5;
            color: #fff;
            border: none;
        }

        .btn-submit:hover {
            background-color: #4338ca;
        }
    </style>

    <div class="form-wrapper">
        <div class="form-card">
            <h2>Tambah Data Warga</h2>

            <form action="{{ route('warga.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>No. KTP</label>
                    <input type="text" name="no_ktp" placeholder="Masukkan Nomor KTP" required>
                </div>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Warga" required>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Agama</label>
                    <input type="text" name="agama" placeholder="Contoh: Islam, Kristen, Hindu">
                </div>

                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" placeholder="Masukkan Pekerjaan">
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" placeholder="Masukkan Nomor Telepon">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Masukkan Email Aktif">
                </div>

                <div class="form-actions">
                    <a href="{{ route('warga.index') }}" class="btn btn-back">← Kembali</a>
                    <button type="submit" class="btn btn-submit">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
    @endsection