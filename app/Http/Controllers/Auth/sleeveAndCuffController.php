<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
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
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));

        $sleeveAndCuffs = new SleeveAndCuffs;

        $sleeveAndCuffs->name = $request->name;

            $img_link=$request->img_link;
        if($img_link){
          $imageName=$img_link->getClientOriginalName();
          $img_link->move('images/sleeveAndCuffs/', $imageName);
          $sleeveAndCuffs['img_link']=$imageName;
      }

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
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));


            $sleeveAndCuffs -> name = $request->input('name');

                    if ($request->hasFile('img_link')) {
            $img_link=$request->img_link;
            if($img_link){
              $imageName=$img_link->getClientOriginalName();
              $img_link->move('images/sleeveAndCuffs/', $imageName);
              $sleeveAndCuffs['img_link']=$imageName;
          }
      }

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
