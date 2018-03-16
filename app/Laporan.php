<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    //
    protected $table ='Laporan';
    protected $fillable = ['jenis'];


    public function barang(){
    	return $this->hasMany('App\jenis');
    }
 	public function pembelian(){
    	return $this->hasMany('App\Pembelian');
    }
 	public function penjualan(){
    	return $this->hasMany('App\Penjualan');
    }
          
}

}
