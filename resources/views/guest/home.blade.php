@extends('guest.dashboard')

@section('content')
<div class="container text-center py-5">
  <h1 class="fw-bold text-primary mb-3">Selamat Datang di Data Kependudukan</h1>
  <p class="lead text-muted mb-4">
    Sebagai Guest, Anda dapat melihat data warga dan keluarga dalam bentuk kartu visual.
  </p>

  <div class="mt-4">
    <a href="{{ route('warga.index') }}" class="btn btn-outline-primary btn-lg me-3">
      <i class="bi bi-person-lines-fill"></i> Data Warga
    </a>
    <a href="{{ route('kependudukan.index') }}" class="btn btn-outline-success btn-lg">
      <i class="bi bi-house-door"></i> Data Keluarga
    </a>
  </div>
</div>
@endsection
