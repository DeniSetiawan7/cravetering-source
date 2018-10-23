<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;

class UserController extends Controller
{
    // register account
    public function registering(Request $data) {

    	$this->validate($data, [
    		'username' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|min:8',
    		'phone' => 'required|max:13'
    	]);

    	// unique user id
    	$id_user = date("s") . uniqid();

    	User::create([
    		'name' => $data->username,
    		'slug_uname' => $id_user,
    		'email' => $data->email,
    		'password' => bcrypt($data->password),
    		'phone' => $data->phone,
    		'picture' => 'images/profile/default_picture.jpg'
    	]);

    	$data->session()->flash('type', 'success');
    	$data->session()->flash('msg', 'thank you for registering');
    	$data->session()->flash('title', 'Welcome');
    	return redirect('/login');
    }

    public function login(Request $data) {
    	
    	$this->validate($data, [
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	]);

    	// data login handling
        $email = $data->email;
        $password = $data->password;
        $remember_me = $data->has('remember_me') ? true : false; 

    	if (Auth::attempt(["email" => $email, "password" => $password], $remember_me))
        {
            // correct
            $data->session()->flash('type', 'success');
	    	$data->session()->flash('msg', 'Welcome ' . Auth::user()->name);
	    	$data->session()->flash('title', 'logged in');
            return redirect("/");
        }
        else
        {
            // incorrect
            $data->session()->flash('type', 'error');
	    	$data->session()->flash('msg', 'email or password was incorrect');
	    	$data->session()->flash('title', 'incorrect');
            return redirect()->back();
        }
    }

    public function logout() {

    	Session::flash('type', 'success');
    	Session::flash('msg', 'have a nice day ' . Auth::user()->name);
    	Session::flash('title', 'logged out');
        Auth::logout();
        return redirect('/login');
    }
}
