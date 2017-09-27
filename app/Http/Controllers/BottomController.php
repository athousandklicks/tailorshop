<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bottom;

class BottomController extends Controller
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
        $bottoms = Bottom::all();
        return view('admin.tailorshop.bottom',compact('bottoms'));
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

        $bottoms = new Bottom;
        $bottoms->name = $request->name;
        $bottoms->save();
        Session::flash('success', 'New bottoms has been created');
        return redirect()->route('bottom.index');
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
        $bottoms = Bottom::find($id);
        return view('admin.tailorshop.bottom_edit',compact('bottoms'));
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
        $bottoms = Bottom::find($id);
            $this->validate($request, array(
            'name' => 'required|max:255'
            ));
            $bottoms -> name = $request->input('name');
            $bottoms -> save(); //save to the database
        Session::flash('success','bottoms successfully updated'); //
        return redirect()->route('bottom.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bottoms = Bottom::find($id);
        $bottoms->delete();
        Session::flash('success','bottoms successfully deleted'); //import use Session
        return redirect()->route('bottom.index');
    }
}
