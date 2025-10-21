<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Warga Desa</title>
  <link rel="stylesheet" href="{{ asset('assets-guest/src/css/tailwind.css') }}">
</head>

<body class="bg-gray-50 flex flex-col min-h-screen">
  @extends('guest.dashboard')

  @section('content')
  <style>
    body {
      background-color: #f8f9fa;
    }

    .center-container {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      padding-top: 100px;
      text-align: center;
    }

    .card {
      max-width: 1100px;
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 30px;
    }

    /* ===== TABEL DAFTAR WARGA ===== */
    .table-container {
      width: 100%;
      margin: 30px auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      font-size: 15px;
      text-align: left;
    }

    table th,
    table td {
      border: 1px solid #e5e5e5;
      padding: 10px 12px;
    }

    table th {
      background-color: #f5f6f8;
      font-weight: 600;
      color: #333;
    }

    table tr:nth-child(even) {
      background-color: #fafafa;
    }

    table tr:hover {
      background-color: #f1f1f1;
      transition: 0.2s ease-in-out;
    }

    /* ===== PESAN "Belum ada data warga" ===== */
    .empty-data {
      text-align: center;
      padding: 15px;
      color: #888;
      font-style: italic;
    }

    /* ===== TOMBOL AKSI ===== */
    .btn {
      padding: 6px 12px;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      font-size: 14px;
    }

    .btn-edit {
      background-color: #4caf50;
      color: #fff;
    }

    .btn-delete {
      background-color: #e74c3c;
      color: #fff;
    }

    .btn-edit:hover {
      background-color: #43a047;
    }

    .btn-delete:hover {
      background-color: #d32f2f;
    }

    /* Flash message style */
    .flash-message {
      position: relative;
      padding: 12px 20px;
      border-radius: 8px;
      font-weight: 500;
      animation: slideDown 0.5s ease forwards;
      opacity: 0;
    }

    /* Slide down animation */
    @keyframes slideDown {
      0% {
        transform: translateY(-20px);
        opacity: 0;
      }

      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }
  </style>

  <!-- Flash message -->
  @if(session('success'))
  <tr>
    <td colspan="9" class="bg-green-100 text-green-800 font-medium text-center py-3 animate-slideDown" id="flash-message">
      {{ session('success') }}
    </td>
  </tr>
  @endif

  <div class="center-container">
    <div class="text-center mb-4">
      <h2 class="mt-3 fw-bold text-primary">Data Warga Desa</h2>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="card-title fw-bold mb-0">Daftar Warga</h5>
          <a href="{{ route('warga.create') }}" class="btn btn-primary">
            + Tambah Warga
          </a>
        </div>

        <table class="table table-bordered text-center align-middle">
          <thead class="table-light">
            <tr>
              <th>No</th>
              <th>No. KTP</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Agama</th>
              <th>Pekerjaan</th>
              <th>Telepon</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($warga as $index => $item)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $item->no_ktp }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->jenis_kelamin }}</td>
              <td>{{ $item->agama }}</td>
              <td>{{ $item->pekerjaan }}</td>
              <td>{{ $item->telepon }}</td>
              <td>{{ $item->email }}</td>
              <td>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"
                  onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="9" class="text-center text-muted">Belum ada data warga.</td>
            </tr>
            @endforelse
          </tbody>
        </table>

        <div class="text-start mt-3">
          <a href="{{ route('dashboard') }}" class="text-decoration-none">
            ← Kembali ke Dashboard
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Flash message -->
  @if(session('success'))
  <div id="flash-message" class="bg-green-500 text-white px-4 py-3 rounded mb-4">
    {{ session('success') }}
  </div>
  @endif

  @endsection
</body>

</html>