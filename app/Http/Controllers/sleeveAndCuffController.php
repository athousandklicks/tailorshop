<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SleeveAndCuffs;
use Session;

class sleeveAndCuffController extends Controller
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
        $sleeveAndCuffs = SleeveAndCuffs::all();
        return view('admin.tailorshop.sleeveandcuffs',compact('sleeveAndCuffs'));
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
            'name' => 'required|max:255'
            ));

        $sleeveAndCuffs = new SleeveAndCuffs;

        $sleeveAndCuffs->name = $request->name;
        $sleeveAndCuffs->save();

        Session::flash('success', 'New sleeveAndCuffs has been created');

        return redirect()->route('sleeveAndCuff.index');
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
         $sleeveAndCuffs = SleeveAndCuffs::find($id);
        return view('admin.tailorshop.sleeveandcuffs_edit',compact('sleeveAndCuffs'));
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
         $sleeveAndCuffs = SleeveAndCuffs::find($id);

            $this->validate($request, array(
            'name' => 'required|max:255'
            ));


            $sleeveAndCuffs -> name = $request->input('name');

            $sleeveAndCuffs -> save(); //save to the database

        Session::flash('success','Sleeve And Cuffs successfully updated'); //

        return redirect()->route('sleeveAndCuff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sleeveAndCuffs = SleeveAndCuffs::find($id);

        $sleeveAndCuffs->delete();

        Session::flash('success','Sleeve And Cuffs successfully deleted'); //import use Session;

        return redirect()->route('sleeveAndCuff.index');
    }
}
