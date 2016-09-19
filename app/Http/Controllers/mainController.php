<?php

namespace App\Http\Controllers;
use App\courses;
use Illuminate\Http\Request;

use App\Http\Requests;

class mainController extends Controller
{
    public function index()
    {
    	$records=courses::all();
    	return view('front.index',['records'=>$records]);
    }

    public function courses($id)
    {
    	$record = courses::find($id);
    	return view('front.courses',['records'=>$record]);
    }
}
