<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fabric;
use Session;

class FabricController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fabrics = Fabric::all();
        return view('admin.tailorshop.fabric',compact('fabrics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                // Save a new fabrics and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255',
            'price' => 'required|between:0,99.99',
            'fabric_id' => 'required|max:255',
            'material' => 'required|max:255',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));

        $fabrics = new Fabric;

        $fabrics->name = $request->name;
        $fabrics->price = $request->price;
        $fabrics->fabric_id = $request->fabric_id;
        $fabrics->material = $request->material;
        $fabrics->season = $request->season;
        $fabrics->ply = $request->ply;
        $fabrics->thread_count = $request->thread_count;
        $fabrics->weight = $request->weight;

        $image=$request->image;
        if($image){
          $imageName=$image->getClientOriginalExtension();
          $image->move('images/fabrics/', $request->name.'.'.$imageName);
          $fabrics['image']=$request->name.'.'.$imageName;
      }


      $fabrics->save();

      Session::flash('success', 'New fabrics has been created');

      return redirect()->route('fabric.index');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fabrics = Fabric::find($id);
        return view('admin.tailorshop.fabric_edit',compact('fabrics'));
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
        $fabrics = Fabric::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
            'price' => 'required|between:0,99.99',
            'fabric_id' => 'required|max:255',
            'material' => 'required|max:255',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));


        $fabrics->name = $request->name;
        $fabrics->price = $request->price;
        $fabrics->fabric_id = $request->fabric_id;
        $fabrics->material = $request->material;
        $fabrics->season = $request->season;
        $fabrics->ply = $request->ply;
        $fabrics->thread_count = $request->thread_count;
        $fabrics->weight = $request->weight;

        if ($request->hasFile('image')) {
          $image=$request->image;

          if($image){
            $imageName=$image->getClientOriginalExtension();

            $image->move('images/fabrics/', $request->name.'.'.$imageName);

       // $oldImageName = preg_replace('/\s+/', '_', $product->name).'/'.$imageName;
            $fabrics['image']=$request->name.'.'.$imageName;
   //     Storage::delete($oldImageName);
        }
    }

        $fabrics -> save(); //save to the database

        Session::flash('success','fabrics successfully updated'); //

        return redirect()->route('fabric.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                //find the item to delete
        $fabrics = Fabric::find($id);

        $fabrics->delete();

        Session::flash('success','fabrics successfully deleted'); //import use Session;

        return redirect()->route('fabric.index');
    }
}
