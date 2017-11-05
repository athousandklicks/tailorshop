<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Placket;
use Session;

class PlacketController extends Controller
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
        $plackets = Placket::all();
        return view('admin.tailorshop.placket',compact('plackets'));
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
        $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));

        $plackets = new Placket;
        $plackets->name = $request->name;

               $img_link=$request->img_link;
        if($img_link){
          $imageName=$img_link->getClientOriginalName();
          $img_link->move('images/plackets/', $imageName);
          $plackets['img_link']=$imageName;
      }
      
        $plackets->save();
        Session::flash('success', 'New plackets has been created');
        return redirect()->route('placket.index');
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
        $plackets = Placket::find($id);
        return view('admin.tailorshop.placket_edit',compact('plackets'));
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
        $plackets = Placket::find($id);
            $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));
            $plackets -> name = $request->input('name');

                  if ($request->hasFile('img_link')) {
            $img_link=$request->img_link;
            if($img_link){
              $imageName=$img_link->getClientOriginalName();
              $img_link->move('images/plackets/', $imageName);
              $plackets['img_link']=$imageName;
          }
      }

            $plackets -> save(); //save to the database
        Session::flash('success','plackets successfully updated'); //
        return redirect()->route('placket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plackets = Placket::find($id);
        $plackets->delete();
        Session::flash('success','plackets successfully deleted'); //import use Session
        return redirect()->route('placket.index');
    }
}
