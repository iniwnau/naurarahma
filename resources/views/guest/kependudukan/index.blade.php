@extends('guest.layout')

@section('content')
<div class="container py-5">
  <h2 class="text-center mb-4 fw-bold text-success">
    <i class="bi bi-house-door"></i> Data Kependudukan (Keluarga KK)
  </h2>

  {{-- Flash message --}}
  @if (session('success'))
  <div class="alert alert-success text-center">
    {{ session('success') }}
  </div>
  @endif

  {{-- Tombol tambah --}}
  <div class="text-end mb-4">
    <a href="{{ route('kependudukan.create') }}" class="btn btn-success">
      <i class="bi bi-plus-circle"></i> Tambah Data KK
    </a>
  </div>

  {{-- Card Data KK --}}
  @if($keluarga->isEmpty())
  <div class="alert alert-warning text-center">Belum ada data keluarga.</div>
  @else
  <div class="row g-4">
    @foreach($keluarga as $item)
    <div class="col-md-4">
      <div class="card border-0 shadow-sm h-100 rounded-3">
        <div class="card-body">
          <h5 class="card-title text-success fw-bold"><i class="bi bi-house"></i> No KK: {{ $item->no_kk }}</h5>
          <p class="card-text mb-1"><i class="bi bi-person-circle"></i> <strong>Kepala Keluarga:</strong> {{ $item->kepalaKeluarga->nama ?? '-' }}</p>
          <p class="card-text mb-1"><i class="bi bi-geo-alt"></i> <strong>Alamat:</strong> {{ $item->alamat }}</p>
          <p class="card-text mb-1"><i class="bi bi-signpost-split"></i> <strong>RT/RW:</strong> {{ $item->rt }}/{{ $item->rw }}</p>
        </div>
        {{-- Tombol Edit --}}
        <a href="{{ route('kependudukan.edit', $item) }}" class="btn btn-sm btn-warning me-2">
          <i class="bi bi-pencil-square"></i> Edit
        </a>

        {{-- Tombol Hapus --}}
        <form action="{{ route('kependudukan.destroy', $item) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">
            <i class="bi bi-trash"></i> Hapus
          </button>
        </form>

      </div>
    </div>
  </div>
  @endforeach
</div>
@endif
</div>
@endsection