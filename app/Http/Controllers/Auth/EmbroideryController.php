<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Embroidery;
use Session;

class EmbroideryController extends Controller
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
        $embroideries = Embroidery::all();
        return view('admin.tailorshop.embroidery',compact('embroideries'));
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
                // Save a new Embroideries and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255'
            ));

        $embroideries = new Embroidery;

        $embroideries->name = $request->name;
        $embroideries->save();

        Session::flash('success', 'New Embroideries has been created');

        return redirect()->route('embroidery.index');
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
        $embroideries = Embroidery::find($id);
        return view('admin.tailorshop.embroidery_edit',compact('embroideries'));
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
        $embroideries = Embroidery::find($id);

            $this->validate($request, array(
            'name' => 'required|max:255'
            ));


            $embroideries -> name = $request->input('name');

            $embroideries -> save(); //save to the database

        Session::flash('success','Embroideries successfully updated'); //

        return redirect()->route('embroidery.index');
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
        $embroideries = Embroidery::find($id);

        $embroideries->delete();

        Session::flash('success','Embroideries successfully deleted'); //import use Session;

        return redirect()->route('embroidery.index');
    }
}
