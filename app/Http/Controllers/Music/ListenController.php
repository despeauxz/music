<?php

namespace App\Http\Controllers\Music;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListenController extends Controller
{
    public function index()
    {
    	return view('music.listen');
    }
}
