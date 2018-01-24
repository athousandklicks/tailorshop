<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shirt;
use Session;
use Auth;

class ShirtController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
}


//Generate data for the Current ORDER that was created when Fabric was selected
public function index($id)
{
    $orders = Shirt::where(['id' => $id])->get();
    return response()->json([
        'orders'    => $orders,
    ], 200);
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
        //Shirt data received from fabric controller after fabric is saved to DB
        $shirts = Shirt::find($id);
        return view('front.shirt-design-details', compact('shirts'));
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

        $check_collar=$request->collar;
        $check_sleeve_cuffs=$request->sleeve_cuffs;

        $check_misc_item=$request->misc_item;
        $check_misc_fabric=$request->misc_fabric;

        $shirt = Shirt::find($id);

        if($check_collar){
         $this->validate($request, [
            'collar' => 'required|max:255',
        ]);
         $shirt->collar = $request->input('collar');
     }

     if($check_sleeve_cuffs){
         $this->validate($request, [
            'sleeve_cuffs' => 'required|max:255',
        ]);
         $shirt->sleeve_and_cuffs = $request->input('sleeve_cuffs');
     }


//Check for Misc Items added

     if($check_misc_item){

        if($request->misc_item == 'Contrast Collar type'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->contrast_collar = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Coloured buttonholes'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->coloured_hole_thread = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Coloured button threads'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->coloured_button_thread = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Inside fabric for collar'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->collar_inside_fabric = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Contrast cuffs'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->contrast_cuff = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Inside fabric for cuff'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->cuff_inside_fabric = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Contrast Pocket'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->contrast_pocket = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Contrast Pocket Flap'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->contrast_pocket_flap = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Epaulettes'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->epaulettes = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Inside Placket Lining Buttonhole Side'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->inside_placket_botton_hole = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Inside Placket Lining Buttons Side'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->inside_placket_botton = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Tuxedo'){
           $this->validate($request, [
            'misc_fabric' => 'required|max:255',
        ]);
           $shirt->tuxedo = $request->input('misc_fabric');
       }

       if($request->misc_item == 'Back split'){
         $this->validate($request, [
            'misc_item' => 'required|max:255',
        ]);
         $shirt->back_split = $request->input('misc_item');
     }

     if($request->misc_item == 'Button on the Back Height Collar'){
       $this->validate($request, [
        'misc_item' => 'required|max:255',
    ]);
       $shirt->button_on_back = $request->input('misc_item');
   }

   }       


   $shirt->save();

   return response()->json([
    // 'message' => 'Added Successfully!'
    'message' => $request->misc_item.' Successfully Added'
], 200);
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
