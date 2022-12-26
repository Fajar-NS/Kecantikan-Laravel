@extends('dashboard-admin.layouts.main')

@section('container')
<h3 class="mb-4">Tambah Category</h3>

<div class="mb-3">
    <form action="/categories" method="post">
        @csrf
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" required value="{{ old('nama') }}" id="nama" placeholder="Nama Kategori">
        @error('nama')
            <p class="invalid-feedback text-danger">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

@endsection