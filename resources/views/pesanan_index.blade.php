@extends('layouts.app2')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Daftar Pesanan</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('pesanan.create') }}" class="btn btn-primary">Buat Pesanan Baru</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Pemesan</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal Pemesanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pesanans as $pesanan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pesanan->nama_pemesan }}</td>
                <td>{{ $pesanan->produk }}</td>
                <td>{{ $pesanan->jumlah }}</td>
                <td>{{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
                <td>{{ $pesanan->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <a href="{{ route('pesanan.edit', $pesanan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pesanan.destroy', $pesanan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pesanan ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Belum ada pesanan</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $pesanans->links() }}
    </div>
</div>
@endsection