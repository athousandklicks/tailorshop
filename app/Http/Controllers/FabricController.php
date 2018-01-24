<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fabric;
use App\Shirt;
use Session;
use Auth;

class FabricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fabrics = Fabric::all();
        return view('front.choose-fabric',compact('fabrics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fabrics = Fabric::all();
        return response()->json([
            'fabrics'    => $fabrics,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alpahbet = rand_string(2);
        $numeric = rand(1, 100000000);

              $this->validate($request, array(
            'fabric' => 'required|max:255',
            'gender' => 'required|max:255'
        ));

        $shirts = new Shirt;
        $shirts -> fabric = $request -> fabric;
        $shirts -> gender = $request -> gender;
        $shirts -> fabric_status = $request -> fabric_status;
        $shirts -> order_id = $alpahbet."-".$numeric;

        $shirts -> save(); //save to the database

        Session::flash('success','New Order successfully created'); //import use Session;
        //now re-direct to Shirts Controller to continue shirt design
        return redirect()->route('shirt-design-details.edit', $shirts->id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


function rand_string( $length ) {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  
    $str = '';

    $size = strlen( $chars );
    for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];
    }
    return $str;
}