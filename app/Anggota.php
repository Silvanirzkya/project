<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //
    	protected $table = 'anggotas';
 	    public $timestamps = true;
        protected $fillable =['nama','jk','status'];

        public function peminjam()
    {
    	return $this->belongsTo('App\Peminjam','anggota_id');
    }

}
