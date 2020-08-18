<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Konsumen;
use DateTime;


class TransaksiC extends Controller
{
    public function all(){        
    	$data['transaksis'] = Transaksi::all();
    	$data['konsumens'] = Konsumen::all();
    	return view('transaksi.all', $data);
    }

    public function edit($id){
    	$data['edits'] = Transaksi::find($id);
    	if (isset($data['edits'])) {
    		return view('transaksi.edit', $data);
    	}else{
    		echo "data tidak ditemukan";
    	}
    }

    public function update(Request $r){
    	$edit = Transaksi::find($r->input('edit_id'));
    	$edit->konsumen_id = Konsumen::where('no_polisi', $r->input('edit_no_polisi'))->value('id');
    	$edit->no_polisi = $r->input('edit_no_polisi');
        // $jam_keluar = new DateTime(date('d-m-Y H:i:s'));
        $jam_keluar = new DateTime('30-06-2020 14:50:00');
        $edit->waktu_keluar = $jam_keluar;

        //biaya
        // $awal = ;
        $begin = new DateTime($r->input('edit_waktu_masuk'));
        $end = $jam_keluar;
        $diff = $begin->diff($end);   
        $jam = substr($diff->format("%h jam %i menit"), 0, 2);
        
        // first
        // ngecek mobil atau motor
        $cek = Konsumen::where('no_polisi', $r->input('edit_no_polisi'))->value('jenis_kendaraan');
        $bayarmobil = 5000;
        $bayarmotor = 2000;

        if ($cek == "Mobil") {
            if ($jam >= 1) {
                for ($i=1; $i <= $jam ; $i++) { 
                     $bayarmobil += 1000;
                }                
            }
            $edit->biaya = $bayarmobil;
        }elseif ($cek == "Motor") {
            if ($jam >= 1) {                
                for ($i=1; $i <= $jam ; $i++) { 
                    $bayarmotor += 500;
                }
            }
            $edit->biaya = $bayarmotor;
        }        
        $edit->save();

        return redirect('/transaksi');
    }

    public function save(Request $r){
    	$new = new Transaksi;
    	$new->konsumen_id = Konsumen::where('no_polisi', $r->input('add_nopol'))->value('id');
    	$new->no_polisi = $r->input('add_nopol');
    	$new->waktu_masuk = date('d-m-Y H:i:s');
    	$new->save();

    	return redirect('/transaksi');
    }

    public function delete($id){
    	$del = Transaksi::find($id);
    	if (isset($del)) {
    		$del->delete();
    		return redirect('/transaksi');
    	}else{
    		echo "data tidak ditemukan";
    	}
    }
}

        // $awal = ;
        // $begin = new DateTime('2017-08-01 23:00');
        // $end = new DateTime('2017-08-05 02:22');
        // $diff = $begin->diff($end); 
        // $lengkap = $diff->format("%d hari %h jam %i menit");       
        // $jam = substr($diff->format("%h jam %i menit"), 0, 2);
        

        // first
        // $awalmotor = 2000;
        // $awalmobil = 5000;
        // for ($i=1; $i <= $jam ; $i++) { 
        //     $biayamotor = $awalmotor += 500;
        //     $biayamobil = $awalmobil += 1000;
        // }
        // echo 'motor:'.$biayamotor.', mobil: '.$biayamobil.'</br>';
        //end first

        //second
        // $awalmotor = 2000;
        // $awalmobil = 5000;
        // $jam = str_replace(' ', '', $jam);
        // $biayamotor2 = $awalmotor + $jam * 500;
        // $biayamobil2 = $awalmobil + $jam * 1000;
        // echo 'motor:'.$biayamotor2.', mobil: '.$biayamobil2.'</br>';
        //end second
