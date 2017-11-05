<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fitting;
use Session;

class FittingController extends Controller
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
        $fittings = Fitting::all();
        return view('admin.tailorshop.fitting',compact('fittings'));
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
                // Save a new fittings and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));

        $fittings = new Fitting;

        $fittings->name = $request->name;

        $img_link=$request->img_link;
        if($img_link){
          $imageName=$img_link->getClientOriginalName();
          $img_link->move('images/fittings/', $imageName);
          $fittings['img_link']=$imageName;
      }

        $fittings->save();

        Session::flash('success', 'New fittings has been created');

        return redirect()->route('fitting.index');
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
        $fittings = Fitting::find($id);
        return view('admin.tailorshop.fitting_edit',compact('fittings'));
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
        $fittings = Fitting::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));


        $fittings -> name = $request->input('name');

          if ($request->hasFile('img_link')) {
            $img_link=$request->img_link;
            if($img_link){
              $imageName=$img_link->getClientOriginalName();
              $img_link->move('images/fittings/', $imageName);
              $fittings['img_link']=$imageName;
          }
      }

            $fittings -> save(); //save to the database

        Session::flash('success','fittings successfully updated'); //

        return redirect()->route('fitting.index');
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
        $fittings = Fitting::find($id);

        $fittings->delete();

        Session::flash('success','fittings successfully deleted'); //import use Session;

        return redirect()->route('fitting.index');
    }
}
