<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    //
    protected $table = 'kembalis';
    protected $fillable = ['tgl_kembali','peminjam_id','telat','denda'];
    protected $visible = ['tgl_kembali','peminjam_id','telat','denda'];
    public $timestamps = true;

    public function peminjam()
    {
    	return $this->hasMany('App\Peminjam','peminjam_id');
    }
   
}
