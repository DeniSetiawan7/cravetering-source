<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'store_id', 'nama_bank', 'no_rekening', 'nama_pemilik'
    ];

    public function store() {
    	return $this->belongsTo('App\Store');
    }
}
