@extends('layout.back.base')
@section('content_back')
<div class="main">
    <main class="content">
        <div class="container-fluid p-0">

            @include('layout.back.feedback')

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Form Produk</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                                action="{{ route('produk.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Barang</label>
                                    <input type="text" class="form-control" id="name" name="nama_produk">
                                </div>

                                <div class="form-group">
                                    <label for="">Kategori Barang</label>
                                    <select name="id_kategori" class="form-control">
                                        <option value="#">Pilih Kategori</option>
                                        @foreach ($kategori as $item)
                                        <option value="{{$item->id}}">{{$item->kategori_produk}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Harga Barang</label>
                                    <input type="text" class="form-control" id="name" name="harga">
                                </div>


                                <div class="form-group">
                                    <label for="name">Stok Barang</label>
                                    <input type="text" class="form-control" id="name" name="stok">
                                </div>


                                <div class="form-group">
                                    <label>Image Cover</label>
                                    <input type="file" class="form-control" name="gambar_produk">
                                </div>

                                <div class="form-group">
                                    <label for="">Deskripsi Barang</label>
                                    <textarea id="mytextarea" name="desc"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</div>
@push('js')
<script src='{{ asset('back/js/tiny.js')}}' referrerpolicy="origin"></script>
<script>
    $(document).ready(function () {
        tinymce.init({
            selector: '#mytextarea'
        });

        $('input.timepicker').timepicker({});
    });

</script>
@endpush
@endsection
