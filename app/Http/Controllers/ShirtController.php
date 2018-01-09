<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shirt;
use Session;
use Auth;

class ShirtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($order_id)
    {
        // $orders = Shirt::where(['order_id' => $order_id])->get();
        // return response()->json([
        //     'orders'    => $orders,
        // ], 200);
    }

    public function home($id)
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
        return redirect()->route('makeshirts.edit', $shirts->id);
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
        return view('front.example', compact('shirts'));
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
     $this->validate($request, [
        'collar' => 'required|max:255',
    ]);

    $shirt = Shirt::find($id);


    // $shirt->collar = request('collar');
     $shirt->collar = $request->input('collar');

     $shirt->save();

     return response()->json([
        'message' => 'Task updated successfully!'
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
