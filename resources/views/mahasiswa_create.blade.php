<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tambah Mahasiswa</title>
</head>
<body>
    Halo saya berada di file Mahasiswa_create.blade.php
    <h1>Saya sedang sedang belajar MVC-R</h1>
    <a href="/mahasiswa/create">Tambah Mahasiswa</a>
    {{-- Tampilkan pesan sukses jika ada --}}
    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    {{-- Form untuk membuat post --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content">{{ old('content') }}</textarea>
            @error('content')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Create Post</button>
    </form>
</body>
</html>