<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PocketHankerchief;
use Session;

class PocketHankerchiefController extends Controller
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
        $pocketHankerchiefs = PocketHankerchief::all();
        return view('admin.tailorshop.pocketHankerchief',compact('pocketHankerchiefs'));
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
                // Save a new pocketHankerchiefs and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));

        $pocketHankerchiefs = new PocketHankerchief;

        $pocketHankerchiefs->name = $request->name;

        $img_link=$request->img_link;
        if($img_link){
          $imageName=$img_link->getClientOriginalName();
          $img_link->move('images/pocketHankerchiefs/', $imageName);
          $pocketHankerchiefs['img_link']=$imageName;
      }

        $pocketHankerchiefs->save();

        Session::flash('success', 'New pocketHankerchiefs has been created');

        return redirect()->route('pocketHankerchief.index');
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
        $pocketHankerchiefs = PocketHankerchief::find($id);
        return view('admin.tailorshop.pocketHankerchief_edit',compact('pocketHankerchiefs'));
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
        $pocketHankerchiefs = PocketHankerchief::find($id);

            $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));


            $pocketHankerchiefs -> name = $request->input('name');

                    if ($request->hasFile('img_link')) {
            $img_link=$request->img_link;
            if($img_link){
              $imageName=$img_link->getClientOriginalName();
              $img_link->move('images/pocketHankerchiefs/', $imageName);
              $pocketHankerchiefs['img_link']=$imageName;
          }
      }

            $pocketHankerchiefs -> save(); //save to the database

        Session::flash('success','pocketHankerchiefs successfully updated'); //

        return redirect()->route('pocketHankerchief.index');
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
        $pocketHankerchiefs = PocketHankerchief::find($id);

        $pocketHankerchiefs->delete();

        Session::flash('success','pocketHankerchiefs successfully deleted'); //import use Session;

        return redirect()->route('pocketHankerchief.index');
    }
}
