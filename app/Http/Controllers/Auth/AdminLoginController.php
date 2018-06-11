<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin')->except('logout');
	}
    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    public function login(Request $request){
    	// Validate the form data
    	$this->validate($request, [
    		'usrname' => 'required|string',
    		'password' => 'required|min:6'

    	]);

    	// Attempt to log the user in
    	if (Auth::guard('admin')->attempt(['usrname' => $request->usrname, 'password' => $request->password])) {
    		// If successful, then redirect to their intended location
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	// If unsuccessful, then redirect back to the login with the form data
    	return redirect()->back()->withInput($request->only('usrname'));
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
