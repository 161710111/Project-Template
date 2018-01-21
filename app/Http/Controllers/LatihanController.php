<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barangs;

class LatihanController extends Controller
{
    public function index()
    {
    	return view('test');
    }

     public function index2()
    {
    	return view('test2');
    }
     public function index3()
    {
    	return view('test3');
    }
    public function table()
    {
    	$a = barangs::all();
    	return view('table', compact('a'));
    }
    public function index1()
    {
    	return view('test4');
    }

}
