@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container">

        <h2 class="text-center my-5">Syrix Cell</h2>

        <div class="col-lg-12">

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
            </div>
            @endif

            <a href="{{ route('barang.index')}}" class="btn btn-info mb-2">Kembali</a>
            <h4 class="my-5">Tambah Data Handphone</h4>
            <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Form Produk</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" enctype="multipart/form-data"
                                    action="{{ route('barang.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" class="form-control" name="nama_barang">
                                    </div>
    
                                    <div class="form-group">
                                        <label>Harga Barang</label>
                                        <input type="text" class="form-control" name="harga">
                                    </div>
    
                                    <div class="form-group">
                                        <label>Jumlah Barang</label>
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
    
    
                                    <div class="form-group">
                                        <label>Gambar Handphone </label>
                                        <input type="file" class="form-control" name="file">
                                    </div>
    
    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection
