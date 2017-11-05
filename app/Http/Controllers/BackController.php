<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Back;
use Session;

class BackController extends Controller
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
        $backs = Back::all();
        return view('admin.tailorshop.back',compact('backs'));
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

        $backs = new Back;
        $backs->name = $request->name;

        $img_link=$request->img_link;
        if($img_link){
          $imageName=$img_link->getClientOriginalName();
          $img_link->move('images/backs/', $imageName);
          $backs['img_link']=$imageName;
      }
      
        $backs->save();
        Session::flash('success', 'New backs has been created');
        return redirect()->route('back.index');
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
        $backs = Back::find($id);
        return view('admin.tailorshop.back_edit',compact('backs'));
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
        $backs = Back::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));

        $backs -> name = $request->input('name');

        if ($request->hasFile('img_link')) {
            $img_link=$request->img_link;
            if($img_link){
              $imageName=$img_link->getClientOriginalName();
              $img_link->move('images/backs/', $imageName);
              $backs['img_link']=$imageName;
          }
      }
            $backs -> save(); //save to the database

        Session::flash('success','backs successfully updated'); //

        return redirect()->route('back.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $backs = Back::find($id);
        $backs->delete();
        Session::flash('success','backs successfully deleted'); //import use Session
        return redirect()->route('back.index');
    }
}
