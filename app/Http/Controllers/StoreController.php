<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Store;
use App\User;
use App\Payment;

class StoreController extends Controller
{
    public function init(Request $data) {

    	$this->validate($data, [
    		'catering_name' => 'required',
    		'domain_name' => 'required|unique:stores,domain'
    	]);

    	Store::create([
    		'user_id' => Auth::user()->id,
    		'name' => $data->catering_name,
    		'domain' => $data->domain_name,
            'dob' => date("Y-m-d")
    	]);

        $user = User::find(Auth::user()->id);
        $user->hasToko = 1;
        $user->save();

    	return redirect('/createstore/verification_data');
    }

    public function final(Request $data) {

        $this->validate($data, [
            'slogan' => 'required',
            'description' => 'required',
            'logo' => 'required|image',
            'alamat_toko' => 'required',
            'kota' => 'required',
            'kodepos' => 'required',
            'nama_bank' => 'required',
            'no_rekening' => 'required',
            'nama_pemilik' => 'required'
        ]);

        if ($data->hasFile('logo'))
        {
            $logo_toko = $data->logo;
            $logo_toko_new = date("d-m-Y"). '_' . uniqid() . '_' . $logo_toko->getClientOriginalName();
            $logo_toko->move('images/logo', $logo_toko_new);
        }

        $store = Store::where('user_id', Auth::user()->id)->first();
        $store->slogan = $data->slogan;
        $store->description = $data->description;
        $store->logo = 'images/logo/' . $logo_toko_new;
        $store->alamat_toko = $data->alamat_toko;
        $store->kota = $data->kota;
        $store->kodepos = $data->kodepos;
        $store->banner = 'images/logo/banner/default_banner.jpg';
        $store->status = 1;
        $store->save();

        Payment::create([
            'store_id' => $store->id,
            'nama_bank' => $data->nama_bank,
            'no_rekening' => $data->no_rekening,
            'nama_pemilik' => $data->nama_pemilik
        ]);

        $data->session()->flash('type', 'success');
        $data->session()->flash('msg', 'Selamat Toko Anda Sudah Terverfikasi');
        $data->session()->flash('title', 'Congratulation');
        return redirect('/store/' . $store->domain);
    }
}
