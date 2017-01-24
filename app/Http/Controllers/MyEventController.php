<?php

namespace App\Http\Controllers;

use Request;
use App\MyEvent;

class MyEventController extends Controller
{
    protected $myevents;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myevents=MyEvent::all();
        return view('events.index',compact('myevents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('submit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $myevent=Request::all();
        $myevent->title=$myevent->city;
        MyEvent::create($myevent);
        return redirect('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $myevent=MyEvent::find($id);
        return view('events.show',compact('myevent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myevent=MyEvent::find($id);
        return view('events.edit',compact('myevent'));
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
        $myeventUpdate=Request::all();
        $myevent=MyEvent::find($id);
        $myevent->update($myeventUpdate);
        return redirect('events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MyEvent::find($id)->delete();
        return redirect('events');
    }
}
