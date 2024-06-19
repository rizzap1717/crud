@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('Dashboard') }}
                        </div>
                        <div class="float-end">
                            <a href="{{ route('barang.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama barang</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                    name="nama_barang" value="{{ old('nama_barang') }}" placeholder="nama barang" required>
                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ old('harga') }}" placeholder="Harga" required>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">stok</label>
                                <input type="number" class="form-control @error('stok') is-invalid @enderror"
                                    name="stok" value="{{ old('stok') }}" placeholder="stok" required>
                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Merk</label>
                                {{-- <input type="number" class="form-control @error('id_merk') is-invalid @enderror" name="id_merk"
                                value="{{ old('id_merk') }}" placeholder="id_merk" required> --}}
                                <select name="id_merk" class="form-select">
                                    @forelse ($barang as $data)
                                        <option value="{{ $data->id }}" @error('id_merk') is-invalid @enderror>
                                            {{ $data->nama_merk }}</option>
                                    @empty
                                        <option value="" disabled>Data belum tersedia</option>
                                    @endforelse
                                </select>
                                @error('id_merk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-sm btn-danger">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
