@extends('layouts.app_modern', ['title' => 'Pendaftaran Pasien'])
@section('content')
    <div class="card">
        <h5 class="card-header">Pendaftaran Pasien</h5>
        <div class="card-body">
            <form action="">
                <div class="row g-3 mb-2">
                    <div class="col">
                        <input type="text" name="q" class="form-control" placeholder="Nama atau nomor Pasien"
                            value="{{ request('q') }}">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">CARI</button>
                    </div>
                </div>
            </form>
            Halo, saya sedang belajar Laravel
            <div class="row mb-3 mt-3">
                <div class="col-md-6">
                    <a href="/daftar/create" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Daftar</th>
                    <th>Poli</th>
                    <th>Biaya</th>
                    <th>Keluhan</th>
                    <th>Tindakan</th>
                    <th>AKSI</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($daftar as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->pasien->nama }}</td>
                        <td>{{ $item->pasien->jenis_kelamin}}</td>
                        <td>{{ $item->tanggal_daftar }}</td>
                        <td>{{ $item->poli->nama }}</td>
                        <td>{{ $item->poli->biaya }}</td>
                        <td>{{ $item->keluhan }}</td>
                        <td>{{ $item->tindakan }}</td>
                        <td>
                            <a href="/daftar/{{ $item->id }}" class="btn btn-warning btn-sm">Detail</a>
                            <form action="/daftar/{{ $item->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ml-2"
                                    onclilck="return confirm('Yakin ingin menghapus data?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $daftar->links() !!}
    </div>
@endsection
