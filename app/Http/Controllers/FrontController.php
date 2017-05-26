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

    public function about()
    {
        return view('front.about');
    }

    public function women()
    {
        return view('front.women');
    }

    public function men()
    {
        return view('front.men');
    }

    public function accessories()
    {
        return view('front.accessories');
    }

    public function online_design()
    {
        return view('front.online_design');
    }

    public function contact()
    {
        return view('front.contact');
    }
    
    public function user_login()
    {
        return view('front.user_login');
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
