<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CollarType;
use Session;

class CollarTypeController extends Controller
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
        $collarTypes = CollarType::all();
        return view('admin.tailorshop.collarType',compact('collarTypes'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                // Save a new collarTypes and then redirect back to index


        $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
        ));

        $collarTypes = new CollarType;

        $collarTypes->name = $request->name;


        $img_link=$request->img_link;
        if($img_link){
          $imageName=$img_link->getClientOriginalName();
          $img_link->move('images/collartypes/', $imageName);
          $collarTypes['img_link']=$imageName;
      }

      $collarTypes->save();

      Session::flash('success', 'New collarTypes has been created');

      return redirect()->route('collarType.index');
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
        $collarTypes = CollarType::find($id);
        return view('admin.tailorshop.collarType_edit',compact('collarTypes'));
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
        $collarTypes = CollarType::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
            'img_link'=>'image|mimes:png,jpg,jpeg|max:10000'
        ));


        $collarTypes -> name = $request->input('name');


        if ($request->hasFile('img_link')) {
            $img_link=$request->img_link;
            if($img_link){
              $imageName=$img_link->getClientOriginalName();
              $img_link->move('images/collartypes/', $imageName);
              $collarTypes['img_link']=$imageName;
          }
      }
            $collarTypes -> save(); //save to the database

        Session::flash('success','collarTypes successfully updated'); //

        return redirect()->route('collarType.index');
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
        $collarTypes = CollarType::find($id);

        $collarTypes->delete();

        Session::flash('success','collarTypes successfully deleted'); //import use Session;

        return redirect()->route('collarType.index');
    }
}
