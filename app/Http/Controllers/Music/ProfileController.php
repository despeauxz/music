<?php

namespace App\Http\Controllers\Music;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('music.profile');
    }
}
