<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = 'barangs';
 	public $timestamps = true;
    protected $fillable =['jenis_barang','nama_barang','stok','jumlah'];

    public function peminjam()
    {
    	return $this->belongsTo('App\Peminjam','barang_id');
    }
}
