<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\Store;
use App\User;

class PagesController extends Controller
{

	public function index()
	{
		return view('home.index');
	}  

	public function register()
	{
		return view('home.register');
	}

	public function login()
	{
		return view('home.login');
	}

	public function profile_toko($domain_toko)
	{
		$store = Store::where('domain', $domain_toko)->first();
		if ($store == NULL)
		{
			return redirect()->back();
		}
		return view('user.toko.toko', ['store' => $store]);
	}

	public function createstore()
	{
		$user = User::where('id', Auth::user()->id)->first();

		if ($user->hasToko == true) {
			Session::flash('text', 'lanjutkan verifikasi informasi toko anda');
			return redirect('/createstore/verification_data');
		}

		return view('user.toko.opentoko');
	}

	public function verification_data()
	{
		$store = Store::where('user_id', Auth::user()->id)->first();

		if ($store->status == true) {
			return redirect('/store/' . $store->domain);
		}
		else
		{
			return view('user.toko.verification_data', ['store' => $store]);
		}
	}

	public function tambahmenu($domain_toko)
	{
		$store = Store::where('domain', $domain_toko)->first();
		if ($store == NULL) { return redirect()->back(); }
		return view('user.toko.tambahmenu', ['store' => $store]);
	}

}
