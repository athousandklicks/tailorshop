<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Misc;
use Session;

class MiscController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $miscs = Misc::all();
        return view('admin.tailorshop.misc',compact('miscs'));
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
            'price' => 'max:64',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
        ));

        $miscs = new Misc;

        $miscs->name = $request->name;
        $miscs->price = $request->price;

        $img_link=$request->img_link;
        if($img_link){
          $imageName=$img_link->getClientOriginalName();
          $img_link->move('images/miscs/', $imageName);
          $miscs['img_link']=$imageName;
      }

      $miscs->save();

      Session::flash('success', 'New Miscellaneous item has been added');

      return redirect()->route('misc.index');
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
     $miscs = Misc::find($id);
     return view('admin.tailorshop.misc_edit',compact('miscs'));
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
        $miscs = Misc::find($id);
        $this->validate($request, array(
            'name' => 'required|max:255',
            'price' => 'max:64',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
        ));

        $miscs -> name = $request->input('name');
        $miscs -> price = $request->input('price');

        if ($request->hasFile('img_link')) {
            $img_link=$request->img_link;
            if($img_link){
              $imageName=$img_link->getClientOriginalName();
              $img_link->move('images/miscs/', $imageName);
              $miscs['img_link']=$imageName;
          }
      }

            $miscs -> save(); //save to the database
        Session::flash('success','Miscellaneous Item successfully updated'); //
        return redirect()->route('misc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $miscs = Misc::find($id);
        $miscs->delete();
        Session::flash('success','Miscellaneous Item successfully deleted'); //import use Session
        return redirect()->route('misc.index');
    }
}
