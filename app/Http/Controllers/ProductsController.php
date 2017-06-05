<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Size;
use Image;
use App\Colour;
use Storage;
use Session;


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
      'right_image'=>'image|mimes:png,jpg,jpeg|max:10000'

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
     $products = Product::find($id);
     $categories = Category::all();
     $colours = Colour::all();
     $cats = array();
     foreach ($categories as $category) {
      $cats[$category->id] = $category->name;
    }

    $colour_array = array();
    foreach ($colours as $colour) {
      $colour_array[$colour->id] = $colour->name;
    }
        // return the view and pass in the var we previously created
    //return view('admin.product.edit', compact('products', '$cats', '$colour_array'));

    return view('admin.product.edit')->withProduct($products)->withCategories($cats)->withColours($colour_array);
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

      //dd($request);
                // Validate the data
      $product = Product::find($id);

      $this->validate($request, array(
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
        'right_image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ));

      $product = Product::find($id);

      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->category_id = $request->input('category_id');
      $product->small = $request->input('small');
      $product->medium = $request->input('medium');
      $product->large = $request->input('large');
      $product->xlarge = $request->input('xlarge');
      $product->xxlarge = $request->input('xxlarge');

if ($request->hasFile('front_image')) {
      $front_image=$request->front_image;

      if($front_image){
        $imageName=$front_image->getClientOriginalName();
              
        $front_image->move('images/products/'.preg_replace('/\s+/', '_', $request->name), $imageName);
        //dd($front_image);
        $oldImageName = preg_replace('/\s+/', '_', $product->name).'/'.$imageName;
        $product['front_image']=$imageName;
        Storage::delete($oldImageName);
      }
    }
if ($request->hasFile('back_image')) {
      $back_image=$request->back_image;
      if($back_image){
        $imageName=$back_image->getClientOriginalName();
        $back_image->move('images/products/'.preg_replace('/\s+/', '_', $request->input('name')) ,$imageName);
        $oldImageName = preg_replace('/\s+/', '_', $product->name).'/'.$imageName;
        $product['back_image']=$imageName;
        Storage::delete($oldImageName);
      }
    }
if ($request->hasFile('left_image')) {
      $left_image=$request->left_image;
      if($left_image){
        $imageName=$left_image->getClientOriginalName();
        $left_image->move('images/products/'.preg_replace('/\s+/', '_', $request->input('name')) ,$imageName);
        $oldImageName = preg_replace('/\s+/', '_', $product->name).'/'.$imageName;
        $product['left_image']=$imageName;
        Storage::delete($oldImageName);
      }
}
if ($request->hasFile('right_image')) {
      $right_image=$request->right_image;
      if($right_image){
        $imageName=$right_image->getClientOriginalName();
        $right_image->move('images/products/'.preg_replace('/\s+/', '_', $request->input('name')) ,$imageName);
        $oldImageName = preg_replace('/\s+/', '_', $product->name).'/'.$imageName;
        $product['right_image']=$imageName;
        Storage::delete($oldImageName);
      }
}


      $product->save();

      if (isset($request->colours)) {
        $product->colours()->sync($request->colours);
      } else {
        $product->colours()->sync(array());
      }


        // set flash data with success message
      Session::flash('success', 'This products was successfully saved.');

        // redirect with flash data to productss.show
        return redirect()->route('product.show', $product->id);//
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Product::find($id);
      $product->colours()->detach();
      $product->delete();
      session()->flash('Success', 'Product Successfully Deleted!');
      return redirect()->route('admin.product.index');
    }

  }
