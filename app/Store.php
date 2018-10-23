<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Store extends Model
{
    protected $fillable = [
        'user_id', 'name', 'domain', 'slogan', 'description', 'logo', 'dob', 'banner', 'kota', 'alamat_toko', 'kodepos', 'status'
    ];

    public function getCreatedAtAttribute($created_at)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $created_at)->format('F Y');
    }

    public function getBannerAttribute($banner) {
        return asset($banner);
    }

    public function getLogoAttribute($logo) {
        return asset($logo);
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function rekening() {
    	return $this->hasOne('App\Payment');
    }
}
