<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pocket;
use Session;

class PocketController extends Controller
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
        $pockets = Pocket::all();
        return view('admin.tailorshop.pocket',compact('pockets'));
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
                // Save a new pockets and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255'
            ));

        $pockets = new Pocket;

        $pockets->name = $request->name;
        $pockets->save();

        Session::flash('success', 'New pockets has been created');

        return redirect()->route('pocket.index');
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
        $pockets = Pocket::find($id);
        return view('admin.tailorshop.pocket_edit',compact('pockets'));
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
        $pockets = Pocket::find($id);

            $this->validate($request, array(
            'name' => 'required|max:255'
            ));


            $pockets -> name = $request->input('name');

            $pockets -> save(); //save to the database

        Session::flash('success','pockets successfully updated'); //

        return redirect()->route('pocket.index');
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
        $pockets = Pocket::find($id);

        $pockets->delete();

        Session::flash('success','pockets successfully deleted'); //import use Session;

        return redirect()->route('pocket.index');
    }
}
