<?php

namespace App\Http\Controllers;

use App\Gambar;
use Session;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barang'] = Gambar::get();
        return view('barang.list')->with($data);
 
    }

    public function showPreview(Request $request){
       
        $search = $request->search;

        $data['barang'] = Gambar::where('nama_barang','like', '%' . $search . '%')
        ->orWhere('jumlah', 'like', '%' . $search . '%')
        ->orWhere('harga', 'like', '%' . $search . '%')
        ->get();
        // dd($search);
       
        return view('barang.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->all();

        if ($request->has('file')) {
            $file = $request->file->getClientOriginalName(); //Get file Name
            $fileName = $file; 

            $request->file->storeAs('produk', $fileName, 'public');
            $input['file'] = $fileName;
        }

        $query = Gambar::create($input);

        if($query){
            Session::flash('message', 'Data Berhasil Disimpan'); 
            return redirect()->route('barang.index');
        }else{
            Session::flash('message', 'Data Gagal Disimpan'); 
            return redirect()->route('barang.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
