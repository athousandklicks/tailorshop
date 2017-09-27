<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fabric;
use App\Shirt;
use App\CollarType;
use App\SleeveAndCuffs;
use App\Button;
use App\Fitting;
use App\Pocket;
use App\PocketHankerchief;
use App\Thread;
use App\ZipperType;
use App\Back;
use App\Bottom;
use App\Placket;

use Session;

class MaleShirtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fabrics = Fabric::all();
        
        return view('front.measurement.male-shirts',compact('fabrics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $shirts = Shirt::all();
        //return view('front.measurement.design-male-shirts', compact('shirts'));
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
            'fabric' => 'required|max:255',
            'gender' => 'required|max:255'
            ));

        $shirts = new Shirt;
        $shirts -> fabric = $request -> fabric;
        $shirts -> gender = $request -> gender;
        $shirts -> fabric_status = $request -> fabric_status;
        $shirts -> order_id = rand(1, 100000000);


        $shirts -> save(); //save to the database

        Session::flash('success','New Order successfully created'); //import use Session;
        return redirect()->route('maleshirt.edit', $shirts->id);

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
        $shirts = Shirt::find($id);
        $collartypes = CollarType::all();
        $sleeveAndCuffs = SleeveAndCuffs::all();
        $buttons = Button::all();
        $fittings = Fitting::all();
        $pockets = Pocket::all();
        $pocketHankerchiefs = PocketHankerchief::all();
        $threads = Thread::all();
        $zipperTypes = ZipperType::all();
        $backs = Back::all();
        $bottoms = Bottom::all();
        $plackets = Placket::all();
        return view('front.measurement.design-male-shirts', compact('shirts', 'collartypes','sleeveAndCuffs','buttons','fittings','pockets','pocketHankerchiefs','threads','zipperTypes','backs','bottoms','plackets'));
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
