@extends('guest.dashboard')

@section('content')
<style>
    /* ===== FORM STYLE ===== */
    .form-wrapper {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
        padding-top: 120px; /* supaya tidak nempel navbar */
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

    .btn-submit,
    .btn-primary {
        background-color: #4f46e5;
        color: #fff;
        border: none;
    }

    .btn-submit:hover,
    .btn-primary:hover {
        background-color: #4338ca;
    }

    .btn-secondary {
        background-color: #f3f4f6;
        color: #333;
        border: 1px solid #ddd;
    }

    .btn-secondary:hover {
        background-color: #e5e7eb;
    }
</style>

<div class="form-wrapper">
    <div class="form-card">
        <h2>Tambah Data Kependudukan</h2>

        <form action="{{ route('kependudukan.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="kk_nomor">Nomor KK</label>
                <input type="text" name="kk_nomor" id="kk_nomor" value="{{ old('kk_nomor') }}" required>
            </div>

            <div class="form-group">
                <label for="kepala_keluarga">Kepala Keluarga</label>
                <input type="text" name="kepala_keluarga" id="kepala_keluarga" value="{{ old('kepala_keluarga') }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" required>
            </div>

            <div class="form-group">
                <label for="rt">RT</label>
                <input type="text" name="rt" id="rt" value="{{ old('rt') }}" required>
            </div>

            <div class="form-group">
                <label for="rw">RW</label>
                <input type="text" name="rw" id="rw" value="{{ old('rw') }}" required>
            </div>

            <div class="form-actions">
                <a href="{{ route('kependudukan.index') }}" class="btn btn-back">← Kembali</a>
                <button type="submit" class="btn btn-submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
