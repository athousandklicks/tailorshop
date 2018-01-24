<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ZipperType;
use Session;

class ZipperTypeController extends Controller
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
        $zipperTypes = ZipperType::all();
        return view('admin.tailorshop.zipperType',compact('zipperTypes'));
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
                // Save a new zipperTypes and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));

        $zipperTypes = new ZipperType;

        $zipperTypes->name = $request->name;

              $img_link=$request->img_link;
        if($img_link){
          $imageName=$img_link->getClientOriginalName();
          $img_link->move('images/zipperTypes/', $imageName);
          $zipperTypes['img_link']=$imageName;
      }
      
        $zipperTypes->save();

        Session::flash('success', 'New zipperTypes has been created');

        return redirect()->route('zipperType.index');
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
        $zipperTypes = ZipperType::find($id);
        return view('admin.tailorshop.zipperType_edit',compact('zipperTypes'));
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
        $zipperTypes = ZipperType::find($id);

            $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));


            $zipperTypes -> name = $request->input('name');

                    if ($request->hasFile('img_link')) {
            $img_link=$request->img_link;
            if($img_link){
              $imageName=$img_link->getClientOriginalName();
              $img_link->move('images/zipperTypes/', $imageName);
              $zipperTypes['img_link']=$imageName;
          }
      }

            $zipperTypes -> save(); //save to the database

        Session::flash('success','zipperTypes successfully updated'); //

        return redirect()->route('zipperType.index');
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
        $zipperTypes = ZipperType::find($id);

        $zipperTypes->delete();

        Session::flash('success','zipperTypes successfully deleted'); //import use Session;

        return redirect()->route('zipperType.index');
    }
}
