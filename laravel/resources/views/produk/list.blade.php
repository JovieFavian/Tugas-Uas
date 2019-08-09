@extends('layout.back.base')
@section('content_back')
<div class="main">
    <main class="content">
        {{-- alert --}}
        @include('layout.back.feedback')
       
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Data Barang</h1>


            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Barang</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatables-basic" class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Stok</th>
                                        <th>Harga Sewa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($produk as $item)
                                    <tr class="text-left">
                                        <td><span class="text-muted">{{$loop->iteration}}</span></td>
                                        <td>
                                                <img alt="Img" src="{{ asset('uploads/produk/'.$item->gambar_produk) }} "
                                                class="img-responsive mt-2" width="50" height="50" />
                                            </td>
                                        <td>{{ $item->nama_produk}}</td>
                                        <td>{{ $item->kategori->kategori_produk}}</td>
                                        <td>{{ $item->stok}}</td>
                                        <td>Rp. {{ number_format($item->harga) }} / Hari</td>
                                        <td width="100px" class="text-center">
                                            <div class="btn-group btn-group-sm ">
                                                <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Aksi
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{route('produk.edit', $item->id)}}">Ubah</a>

                                                    <form id="destroy-item"
                                                        action="{{ route('produk.destroy', $item->id) }}" method="POST"
                                                        class="delete_form">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="dropdown-item" id="delBtn">Hapus</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

@push('js')
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        // Datatables basic
        $('#datatables-basic').DataTable({
            responsive: true
        });
        $('button#delBtn').on('click', function (e) {
            e.preventDefault();
            var self = $(this);
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this Album!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "btn btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancle",
                    closeOnConfirm: false,
                    closeOnCancel: true
                },
                function (isConfirm) {
                    if (isConfirm) {
                        setTimeout(function () {
                            self.parents(".delete_form").submit();
                        }, 2000); //2 second delay (2000 milliseconds = 2 seconds)
                    }
                });

        });
    });

</script>
@endpush
