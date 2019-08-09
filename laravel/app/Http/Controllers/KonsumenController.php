<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Lowercase;

class konsumenController extends Controller
{
    public function index() 
	{
		$data['konsumen'] = \DB::table('konsumen')
		->get();
		return view ('konsumen', $data);
}
public function create()
	{
	return view('konsumen.formkonsumen');
	}
public function store(Request $request)
	{
		$rule = [
			'id' => 'required',
			'nama' => 'required',
			'email' =>  ['required'],
			'pass' => ['required'],
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		unset($input['_token']);
		$status = \DB::table('konsumen')->insert($input);
		
		if ($status) {
			return redirect('/konsumen')->with('success', 'Data berhasil ditambahkan');
		
		}else {
			
			return redirect('/konsumen/create')->with('error', 'Data gagal ditambahkan');
			}
		}
	public function edit(Request $request, $konsumen)
		{
			$data['konsumen'] = \DB::table('konsumen')->find($konsumen);
			return view('konsumen.formkonsumen',$data);
		}
	public function update(Request $request, $konsumen)
	{
		$rule = [
			'id' => 'required',
			'nama' => 'required',
			'email' =>  ['required'],
			'pass' => ['required'],
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		unset($input['_token']);
		unset($input['_method']);
		
		$status = \DB::table('konsumen')->where('konsumen', $konsumen)->update($input);
		
		if ($status) {
			return redirect('/konsumen')->with('success','Data berhasil diubah');
		} else {
			return redirect('/konsumen/create')->with('error','Data gagal diubah');
		}
	}
	public function destroy(Request $request,$id)
		{
		$status=\DB::table('konsumen')->where('id',$id)->delete();
		if ($status) {
				return redirect('/konsumen')->with('success', 'Data berhasil dihapus');
				} else {
					return  redirect('/konsumen/create')->with('error', 'Data gagal dihapus');
					}
	}
}

