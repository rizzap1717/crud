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

                {{-- <div class="card-body">
                    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang"
                                value="{{ $barang->nama_barang }}" placeholder="barang Name" disabled>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                value="{{ $barang->harga }}" placeholder="Harga" disabled>
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok"
                                value="{{ $barang->stok }}" placeholder="stok" disabled>
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">id_merk</label>
                            <input type="number" class="form-control @error('id_merk') is-invalid @enderror" name="id_merk"
                                value="{{ $barang->harga }}" placeholder="id_merk" disabled>
                            @error('id_merk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </form>
                </div> --}}
                <div class="card-body">
                    <hr>
                    <h4>{{ $barang->nama_barang}}</h4>
                    <p class="tmt-3">
                        Harga : Rp.{{ number_format($barang->harga, 2)}}
                    </p>
                    <p class="tmt-3">
                        Stock : {{$barang->stok}} Unit
                    </p>
                    <p class="tmt-3">
                        Merk : {{$barang->merk->nama_merk}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection