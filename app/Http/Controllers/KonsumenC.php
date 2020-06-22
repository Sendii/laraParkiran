<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konsumen;

class KonsumenC extends Controller
{
    public function all(){
    	$data['konsumens'] = Konsumen::all();
    	return view('konsumen.all', $data);
    }

    public function edit($id){
    	$data['edits'] = Konsumen::find($id);
    	if (isset($data['edits'])) {
    		return view('konsumen.edit', $data);
    	}else{
    		echo "data tidak ditemukan";
    	}
    }

    public function update(Request $r){
    	$edit = Konsumen::find($r->input('edit_id'));
    	$edit->konsumen = $r->input('edit_konsumen');
    	$edit->jenis_kendaraan = $r->input('edit_jenis_kendaraan');
    	$edit->no_polisi = $r->input('edit_no_polisi');
    	$edit->tgl_lahir = $r->input('edit_tgl_lahir');
    	$edit->jenis_kelamin = $r->input('edit_jenis_kelamin');
    	$edit->no_hp = $r->input('edit_no_hp');
    	$edit->save();

    	return redirect('/konsumen');
    }

    public function save(Request $r){
    	$new = new Konsumen;
    	$new->konsumen = $r->input('add_konsumen');
    	$new->jenis_kendaraan = $r->input('add_jenis_kendaraan');
    	$new->no_polisi = $r->input('add_no_polisi');
    	$new->tgl_lahir = $r->input('add_tgl_lahir');
    	$new->jenis_kelamin = $r->input('add_jenis_kelamin');
    	$new->no_hp = $r->input('add_no_hp');
    	$new->save();

    	return redirect('/konsumen');
    }

    public function delete($id){
    	$del = Konsumen::find($id);
    	if (isset($del)) {
    		$del->delete();
    		return redirect('/konsumen');
    	}else{
    		echo "data tidak ditemukan";
    	}
    }
}
