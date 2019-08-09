<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gambar;

class UploadController extends Controller
{
	public function upload(){
		$gambar = Gambar::get();
		return view('upload',['gambar' => $gambar]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'nama_barang' => 'required',
			'jumlah' => 'required',
			'harga' => 'required',
		]);

		
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Gambar::create([
			'file' => $nama_file,
			'nama_barang' => $request->nama_barang,
			'jumlah' => $request->jumlah,
			'harga' => $request->harga,
		]);

		return redirect()->back();
	}
}