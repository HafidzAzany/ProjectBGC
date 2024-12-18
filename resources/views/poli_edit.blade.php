@extends('layouts.app_modern', ['title' => 'Edit Data Poli'])
@section('content')
    <div class="card">
        <h5 class="card-header">Edit Data Poli : <b>{{ strtoupper($poli->nama) }}</b></h5><br>
        <div class="card-body">           
            <form action="/poli/{{ $poli->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf               
                <div class="form-group mt-1 mb-3">
                    <label for="nama">Nama Poli</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                    name="nama" id="nama" value="{{ old('nama') ?? $poli->nama}}">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="biaya">Biaya</label>
                    <input type="text" class="form-control @error('biaya') is-invalid @enderror" 
                    name="biaya" id="biaya" value="{{ old('biaya') ?? $poli->biaya}}">
                    <span class="text-danger">{{ $errors->first('biaya') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="keterangan" class="form-control @error('keterangan') is-invalid @enderror" 
                    name="keterangan" id="keterangan" value="{{ old('keterangan') ?? $poli->keterangan }}">
                    <span class="text-danger">{{ $errors->first('keterangan') }}</span>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection