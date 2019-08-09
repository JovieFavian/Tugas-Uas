@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container">

        <h2 class="text-center my-5">Syrix Cell</h2>

        <div class="col-12">

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
            </div>
            @endif

            <h4 class="my-5">Catalog Handphone</h4>

            <a href="{{ url('barang/create')}}" class="btn btn-info mb-2">Tambah Data</a>


            {{-- <form action="{{ url('search_item')}}" method="POST" class="form-inline mb-4 mt-5">
            @csrf
            <div class="card-body row no-gutters align-items-center">
                <div class="col-auto">
                    <i class="fas fa-search h4 text-body"></i>
                </div>
                <!--end of col-->
                <div class=" col-md-10">
                    <input class="form-control form-control-borderless" type="search"
                        placeholder="Search topics or keywords" name="search">
                </div>
                <!--end of col-->
                <div class="col-auto">
                    <button class="btn btn-lg btn-success" type="submit">Search</button>
                </div>
                <!--end of col-->
            </div>
            </form> --}}
            <div class="col-12">
               <form action="{{ url('search_item')}}" method="POST" class="card card-sm mt-3">
                @csrf
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-borderless" type="search"
                                placeholder="Search" name="search">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>


                <table class="table table-bordered table-striped mt-2">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Foto Handphone</th>
                            <th>Merek Handphone</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th width="1%">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barang as $item)
                        <tr>
                            <td><span class="text-muted">{{$loop->iteration}}</span></td>
                            <td>
                                <img alt="Img" src="{{ asset('uploads/produk/'.$item->file) }} "
                                    class="img-responsive mt-2" width="50" height="50" />
                            </td>
                            <td>{{$item->nama_barang}}</td>
                            <td>{{$item->jumlah}}</td>
                            <td>{{$item->harga}}</td>
                            <td><a class="btn btn-danger" href="{{ url('/konsumen/') }}">Beli</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>
@endsection
