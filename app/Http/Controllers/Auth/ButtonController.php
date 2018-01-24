<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Button;
use Session;

class ButtonController extends Controller
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
        $buttons = Button::all();
        return view('admin.tailorshop.button',compact('buttons'));
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
                // Save a new buttons and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255'
            ));

        $buttons = new Button;

        $buttons->name = $request->name;
        $buttons->save();

        Session::flash('success', 'New buttons has been created');

        return redirect()->route('button.index');
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
        $buttons = Button::find($id);
        return view('admin.tailorshop.button_edit',compact('buttons'));
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
        $buttons = Button::find($id);

            $this->validate($request, array(
            'name' => 'required|max:255'
            ));


            $buttons -> name = $request->input('name');

            $buttons -> save(); //save to the database

        Session::flash('success','buttons successfully updated'); //

        return redirect()->route('button.index');
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
        $buttons = Button::find($id);

        $buttons->delete();

        Session::flash('success','buttons successfully deleted'); //import use Session;

        return redirect()->route('button.index');
    }
}
