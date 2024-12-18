@extends('layouts.app_modern', ['title' => 'tambah Data Poli'])
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-header">Tambah Data Poli</h5><br>
            <form action="/poli" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-1 mb-3">
                    <label for="nama">Nama Poli</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                    name="nama" id="nama" value="{{ old('nama') }}">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="biaya">Biaya</label>
                    <input type="text" class="form-control @error('biaya') is-invalid @enderror" 
                    name="biaya" id="biaya" value="{{ old('biaya') }}">
                    <span class="text-danger">{{ $errors->first('biaya') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" 
                    name="keterangan" id="keterangan" value="{{ old('keterangan') }}">
                    <span class="text-danger">{{ $errors->first('keterangan') }}</span>
                </div>
            
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection