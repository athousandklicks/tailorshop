<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thread;
use Session;

class ThreadController extends Controller
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
        $threads = Thread::all();
        return view('admin.tailorshop.thread',compact('threads'));
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
                // Save a new threads and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255'
            ));

        $threads = new Thread;

        $threads->name = $request->name;
        $threads->save();

        Session::flash('success', 'New threads has been created');

        return redirect()->route('thread.index');
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
        $threads = Thread::find($id);
        return view('admin.tailorshop.thread_edit',compact('threads'));
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
        $threads = Thread::find($id);

            $this->validate($request, array(
            'name' => 'required|max:255'
            ));


            $threads -> name = $request->input('name');

            $threads -> save(); //save to the database

        Session::flash('success','threads successfully updated'); //

        return redirect()->route('thread.index');
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
        $threads = Thread::find($id);

        $threads->delete();

        Session::flash('success','threads successfully deleted'); //import use Session;

        return redirect()->route('thread.index');
    }
}
