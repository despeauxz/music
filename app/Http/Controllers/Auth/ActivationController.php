<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ActivationToken;
use App\Http\Controllers\Controller;

class ActivationController extends Controller
{
    public function activate(ActivationToken $token)
    {
    	$token->user()->update([
    		'active' => true,
    	]);

    	$token->delete();

    	return redirect('/login');
    }
}
