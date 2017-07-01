<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
	use RegistersUsers;

    public function getSignedUp()
    {
    	return view('auth.signup');
    }

    public function signup(Request $request, User $user)
    {
    	$this->validate($request, [
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
    	]);

    	User::create([
    		'name' => $request->name,
    		'active' => false,
    		'email' => $request->email,
    		'password' => bcrypt($request->password)
    	]);

    	return redirect('/register')->withInfo('An email has been sent to activate your account');
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        Auth::logout();

        return redirect()->back()->withError('Plaese check your email to activate account');
    }
}
