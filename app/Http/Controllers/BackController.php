<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Back;

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
            'name' => 'required|max:255'
            ));

        $backs = new Back;
        $backs->name = $request->name;
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
            'name' => 'required|max:255'
            ));
            $backs -> name = $request->input('name');
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
