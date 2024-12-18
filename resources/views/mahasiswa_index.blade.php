@extends('mylayout', ['title' => 'Mahasiswa'])
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Data Mahasiswa</h3>
            <div class="row mb-3 mt-3">
                <div class="col-md-6">
                    <a href="/pasien/create" class="btn btn primary btn-sm">Tambah Mahasiswa</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                        <th>Asal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_mahasiswa}}</td>
                            <td>{{ $item->nim}}</td>
                            <td>{{ $item->prodi}}</td>
                            <td>{{ $item->asal}}</td>
                    @endforeach
                </tbody>
            </table>
            {!! $mahasiswa->links() !!}
        </div>
    </div>
@endsection