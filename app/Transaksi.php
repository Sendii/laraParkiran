<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function Konsumen(){
    	return $this->belongsTo('App\Konsumen', 'konsumen_id', 'id');
    }
}
