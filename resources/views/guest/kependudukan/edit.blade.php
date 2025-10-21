<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data KK</title>
    <link rel="stylesheet" href="{{ asset('assets-guest/src/css/tailwind.css') }}">
</head>
<body class="bg-gray-50">
    <main class="min-h-screen bg-gray-50 pt-24 pb-12 px-4">
        <div class="container mx-auto">
            <div class="bg-white rounded-2xl shadow-md p-6 border border-gray-200">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-primary">Edit Data KK</h2>
                    <a href="{{ route('kependudukan.index') }}" class="text-blue-600 hover:underline text-sm">
                        ← Kembali ke Data KK
                    </a>
                </div>

                <form action="{{ route('kependudukan.update', $kk->kk_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium">Nomor KK</label>
                            <input type="text" name="kk_nomor" value="{{ old('kk_nomor', $kk->kk_nomor) }}" class="mt-1 w-full border-gray-300 rounded-md" required>
                            @error('kk_nomor') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Kepala Keluarga</label>
                            <select name="kepala_keluarga_warga_id" class="mt-1 w-full border-gray-300 rounded-md" required>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium">Alamat</label>
                            <input type="text" name="alamat" value="{{ old('alamat', $kk->alamat) }}" class="mt-1 w-full border-gray-300 rounded-md" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium">RT</label>
                            <input type="text" name="rt" value="{{ old('rt', $kk->rt) }}" class="mt-1 w-full border-gray-300 rounded-md" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium">RW</label>
                            <input type="text" name="rw" value="{{ old('rw', $kk->rw) }}" class="mt-1 w-full border-gray-300 rounded-md" required>
                        </div>
                    </div>

                    <button type="submit" class="mt-6 px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
                        Update Data
                    </button>
                </form>
            </div>
        </div>
    </main>
    @endsection
</body>
</html>
