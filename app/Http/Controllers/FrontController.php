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
        return view('front.index',compact('shirts'));
    }

    public function shirts()
    {
        $shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }

    public function about()
    {
        return view('front.about');
    }

       public function example()
    {
        return view('front.example');
    }

    public function design_shirts()
    {
        return view('front.design-shirts');
    }

    public function design_pants()
    {
        return view('front.design-pants');
    }

        public function suit_jackets()
    {
        return view('front.suit-jackets');
    }

        public function design_skirts()
    {
        return view('front.design-skirts');
    }

        public function dresses_skirts()
    {
        return view('front.dresses-skirts');
    }

    public function accessories()
    {
        return view('front.accessories');
    }

    public function shop()
    {
        return view('front.shop');
    }

    public function contact()
    {
        return view('front.contact');
    }
    
    public function user_login()
    {
        return view('front.user_login');
    }

    public function shirt()
    {
        return view('front.shirt');
    }

    //Online Design Functions

    public function design_options()
    {
        return view('front.measurement.design-options');
    }

    public function suite_home()
    {
        return view('front.measurement.suite-home');
    }

    public function male_suite()
    {
        return view('front.measurement.male-suite');
    }

    public function female_suite()
    {
        return view('front.measurement.female-suite');
    }

    public function male_jacket()
    {
        return view('front.measurement.male-jacket');
    }

    public function female_jacket()
    {
        return view('front.measurement.female-jacket');
    }

    public function shirts_home()
    {
        return view('front.measurement.shirts-home');
    }

    public function male_shirts()
    {
        return view('front.measurement.male-shirts');
    }

    public function female_shirts()
    {
        return view('front.measurement.female_shirts');
    }

    public function trousers_home()
    {
        return view('front.measurement.trousers-home');
    }

    public function male_trousers()
    {
        return view('front.measurement.male-trousers');
    }

    public function female_trousers()
    {
        return view('front.measurement.female-trousers');
    }
}
