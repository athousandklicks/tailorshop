<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class FrontController extends Controller
{
	public function index()
	{
        $shirts=Product::all();
        return view('front.home',compact('shirts'));
	}

    public function shirts()
    {
        $shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }

    public function shirt()
    {
        return view('front.shirt');
    }
}
