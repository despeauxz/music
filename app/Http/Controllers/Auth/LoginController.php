<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
	use AuthenticatesUsers;

    public function getLoggedIn()
    {
    	return view('auth.signin');
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required'
    	]);

		if (!Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => 1], $request->has('remember'))) {
    		return redirect('/login')->withError('Could not login with those credentials');
    	}

    	return redirect()->to('/');
    }

    public function getLoggedOut()
    {
    	Auth::logout();

    	return redirect('/');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if (!$user->active) {
        	Auth::logout();

        	return redirect('/login')->withError('Please activate your account. <a href="#">Resend</a>');
        }
    }
}
