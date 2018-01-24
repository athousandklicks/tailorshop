<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Colour;
use Session;

class ColoursController extends Controller
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
        $colours = Colour::all();
        return view('admin.colour.index',compact('colours'));
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
                        // Save a new category and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255',
            'hexvalue' => 'required|max:255'
            ));

        $colours = new Colour;

        $colours->name = $request->name;
        $colours->hexvalue = $request->hexvalue;
        $colours->save();

        Session::flash('success', 'New Colour has been created');

        return redirect()->route('colour.index');
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
        $colours = Colour::find($id);
        return view('admin.colour.edit',compact('colours'));
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
                $colours = Colour::find($id);

            $this->validate($request, array(
            'name' => 'required|max:255',
            'hexvalue' => 'required|max:255'
            ));


            $colours -> name = $request->input('name');
            $colours -> hexvalue = $request->input('hexvalue');

            $colours -> save(); //save to the database

        Session::flash('success','Colour successfully updated'); //

        return redirect()->route('colour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colours = Colour::find($id);
        $colours->products()->detach();
        $colours->delete();

        Session::flash('success','Colour successfully deleted'); //import use Session;

        return redirect()->route('colour.index');
    }
}
