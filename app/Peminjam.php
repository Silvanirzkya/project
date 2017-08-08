<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    //
     protected $table = 'peminjams';
    protected $fillable = ['anggota_id','barang_id','tgl_pinjam','jumlah_hari'];
    protected $visible = ['anggota_id','barang_id','tgl_pinjam','jumlah_hari'];
    public $timestamps = true;

    public function barang()
    {
    	return $this->hasMany('App\Barang','barang_id');
    }
    public function anggota()
    {
    	return $this->hasMany('App\Anggota','anggota_id');
    }
}
