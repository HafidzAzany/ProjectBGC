@extends('layouts.app2')

@section('content')
    <h3>Edit Produk</h3>

    {{-- Tampilkan pesan error jika validasi gagal --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form untuk mengedit produk --}}
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $produk->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" value="{{ old('stok', $produk->stok) }}" min="0" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ old('harga', $produk->harga) }}" min="0" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection