<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Size;
use Image;
use App\Colour;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products=Product::all();

      return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories=Category::pluck('name','id');
      $colours = Colour::all();
      $sizes = Size::all();
      return view('admin.product.create',compact('categories', 'colours', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request);
//        validation
     $this->validate($request,[
      'name'=>'required|max:255',
      'description'=>'required|max:1000',
      'price'=>'required',
      'category_id'=>'required|integer',
      'small'=>'integer',
      'medium'=>'integer',
      'large'=>'integer',
      'xlarge'=>'integer',
      'xxlarge'=>'integer',
      'front_image'=>'image|mimes:png,jpg,jpeg|max:10000',
      'back_image'=>'image|mimes:png,jpg,jpeg|max:10000',
      'left_image'=>'image|mimes:png,jpg,jpeg|max:10000',
      'right_image'=>'image|mimes:png,jpg,jpeg|max:10000',
      'detailed_image'=>'image|mimes:png,jpg,jpeg|max:10000'

      ]);

        // store in the database
     $product = new Product;

     $product->name = $request->name;
     $product->description = $request->description;
     $product->price = $request->price;
     $product->category_id = $request->category_id;
     $product->small = $request->small;
     $product->medium = $request->medium;
     $product->large = $request->large;
     $product->xlarge = $request->xlarge;
     $product->xxlarge = $request->xxlarge;


     $front_image=$request->front_image;
     if($front_image){
      $imageName=$front_image->getClientOriginalName();
      $front_image->move('images/products/'.preg_replace('/\s+/', '_', $request->name) ,$imageName);
      $product['front_image']=$imageName;
    }

    $back_image=$request->back_image;
    if($back_image){
      $imageName=$back_image->getClientOriginalName();
      $back_image->move('images/products/'.preg_replace('/\s+/', '_', $request->name) ,$imageName);
      $product['back_image']=$imageName;
    }

    $left_image=$request->left_image;
    if($left_image){
      $imageName=$left_image->getClientOriginalName();
      $left_image->move('images/products/'.preg_replace('/\s+/', '_', $request->name) ,$imageName);
      $product['left_image']=$imageName;
    }

    $right_image=$request->right_image;
    if($right_image){
      $imageName=$right_image->getClientOriginalName();
      $right_image->move('images/products/'.preg_replace('/\s+/', '_', $request->name) ,$imageName);
      $product['right_image']=$imageName;
    }

    $detailed_image=$request->detailed_image;
    if($detailed_image){
      $imageName=$detailed_image->getClientOriginalName();
      $detailed_image->move('images/products/'.preg_replace('/\s+/', '_', $request->name) ,$imageName);
      $product['detailed_image']=$imageName;
    }

    

    $product->save();

//connect to products to colours in a many to many relationship using this next line of sync
    $product->colours()->sync($request->colours, false);

    return redirect()->route('admin.index');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $products=Product::find($id);
      return view('admin.product.product-details', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

  }
