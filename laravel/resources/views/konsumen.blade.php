{{-- <html>
 <head>
  Terimakasih anda telah berbelanja di website kami. <br>
  Mohon untuk membayar tagihan dengan mentransfer uang ke Rekening Kami. <br>
  Kami akan memberikan jangka waktu selama 2 hari.
 </head>
</b></center>
</table>
</body>
</html> --}}

@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-12">
            <a href="{{ route('barang.index' )}}" class="btn btn-info">Halaman Utama</a>
            <div class="jumbotron jumbotron-fluid mt-2">
                <div class="container">
                    {{-- <h1 class="display-4">Info Pembelian</h1> --}}
                    <p class="lead text-center  ">Terimakasih anda telah berbelanja di website kami. <br>
                        Mohon untuk membayar tagihan dengan mentransfer uang ke Rekening Kami. <br>
                        Kami akan memberikan jangka waktu selama 2 hari.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
