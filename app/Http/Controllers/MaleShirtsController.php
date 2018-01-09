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
use App\User;

use Session;
use Auth;

class MaleShirtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $tasks = Shirt::where(['user_id' => '12'])->get();
        // return response()->json([
        //     'tasks'    => $tasks,
        // ], 200);
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
        $users = User::find($id);



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


        //Pass values to array before sending to frontend for each object

        $collartypesList = array();
        foreach ($collartypes as $collartype) {
            $collartypesList[$collartype->name] = $collartype->name;

        }

        $sleeveAndCuffsList = array();
        foreach ($sleeveAndCuffs as $sleeveAndCuff) {
            $sleeveAndCuffsList[$sleeveAndCuff->name] = $sleeveAndCuff->name;
        }

        $buttonsList = array();
        foreach ($buttons as $button) {
            $buttonsList[$button->name] = $button->name;
        }


        $fittingsList = array();
        foreach ($fittings as $fitting) {
            $fittingsList[$fitting->name] = $fitting->name;
        }


        $pocketsList = array();
        foreach ($pockets as $pocket) {
            $pocketsList[$pocket->name] = $pocket->name;
        }


        $pocketHankerchiefsList = array();
        foreach ($pocketHankerchiefs as $pocketHankerchief) {
            $pocketHankerchiefsList[$pocketHankerchief->name] = $pocketHankerchief->name;
        }

        $threadsList = array();
        foreach ($threads as $thread) {
            $threadsList[$thread->name] = $thread->name;
        }

        $zipperTypesList = array();
        foreach ($zipperTypes as $zipperType) {
            $zipperTypesList[$zipperType->name] = $zipperType->name;
        }

        $backsList = array();
        foreach ($backs as $back) {
            $backsList[$back->name] = $back->name;
        }

        $bottomsList = array();
        foreach ($bottoms as $bottom) {
            $bottomsList[$bottom->name] = $bottom->name;
        }

        $placketsList = array();
        foreach ($plackets as $placket) {
            $placketsList[$placket->name] = $placket->name;
        }

        return view('front.measurement.design-male-shirts', compact('shirts', 'collartypesList','sleeveAndCuffsList','buttonsList','fittingsList','pocketsList','pocketHankerchiefsList','threadsList','zipperTypesList','backsList','bottomsList','placketsList','users','collartypes','sleeveAndCuffs','fittings','pockets','pocketHankerchiefs','zipperTypes','backs','bottoms','plackets'));
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
       // dd($request);

        $this->validate($request, array(
            'collar' => 'required|max:255',
            'sleeve_and_cuffs' => 'required|max:255',
            'buttons' => 'required|max:255',
            'pockets' => 'required|max:255',
            'neck' => 'required|between:0,999.99',
            'arm_length' => 'required|between:0,999.99',
            'arm_round' => 'required|between:0,999.99',
            'chest_bust' => 'required|between:0,999.99',
            'front_length' => 'required|between:0,999.99',
            'back_length' => 'required|between:0,999.99',
            'placket' => 'required|max:255',
            'fit' => 'required|max:255',
            'back' => 'required|max:255',
            'bottom' => 'required|max:255',
            'zip' => 'required|max:255',
            'thread_colour' => 'required|max:255',
            'pocket_hankerchief' => 'required|max:255',
            'description' => 'required|max:255',
            'refImage2'=>'image|mimes:png,jpg,jpeg|max:10000',
            'refImage2'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));

    //dd($request);

        $shirts = Shirt::find($id);

        $shirts -> collar = $request -> collar;
        $shirts -> sleeve_and_cuffs = $request -> sleeve_and_cuffs;
        $shirts -> buttons = $request -> buttons;
        $shirts -> pockets = $request -> pockets;
        $shirts -> neck = $request -> neck;
        $shirts -> arm_length = $request -> arm_length;
        $shirts -> arm_round = $request -> arm_round;
        $shirts -> chest_bust = $request -> chest_bust;
        $shirts -> front_length = $request -> front_length;
        $shirts -> back_length = $request -> back_length;
        $shirts -> placket = $request -> placket;
        $shirts -> fit = $request -> fit;
        $shirts -> back = $request -> back;
        $shirts -> bottom = $request -> bottom;
        $shirts -> zip = $request -> zip;
        $shirts -> thread_colour = $request -> thread_colour;
        $shirts -> pocket_hankerchief = $request -> pocket_hankerchief;
        $shirts -> description = $request -> description;


        if ($request->hasFile('refImage1')) {
            $ref1_image=$request->refImage1;
            if($ref1_image){
              $imageName=$ref1_image->getClientOriginalName();
              $ref1_image->move('images/customersdesigns/',$imageName);
              $shirts['refImage1']=$imageName;
          }
      }

      if ($request->hasFile('refImage2')) {
        $ref2_image=$request->refImage2;
        if($ref2_image){
          $imageName=$ref2_image->getClientOriginalName();
          $ref2_image->move('images/customersdesigns/',$imageName);
          $shirts['refImage2']=$imageName;
      }
  }

   $shirts -> save(); //save to the database

        Session::flash('success','New Tale successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added post
        //the show function is given the newly added id as a parameter.
        return redirect()->route('maleshirt.show', $shirts->id);

        // 'required|between:0,99.99' - Decimal Validation
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
