<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Size;
use Session;

class SizeController extends Controller
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
        $sizes = Size::all();
        return view('admin.size.index',compact('sizes'));
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
            'sizes' => 'required|max:255'
            ));

        $sizes = new Size;

        $sizes->sizes = $request->sizes;
        $sizes->save();

        Session::flash('success', 'New Size has been created');

        return redirect()->route('size.index');
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
        $sizes = Size::find($id);
        return view('admin.size.edit',compact('sizes'));
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
        $sizes = Size::find($id);

            $this->validate($request, array(
            'sizes' => 'required|max:255'
            ));


            $sizes -> sizes = $request->input('sizes');

            $sizes -> save(); //save to the database

        Session::flash('success','Size successfully updated'); //

        return redirect()->route('size.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $sizes = Size::find($id);

        $sizes->delete();

        Session::flash('success','Size successfully deleted'); //import use Session;

        return redirect()->route('size.index');
    }
}
