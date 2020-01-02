<?php

namespace App\Http\Controllers;

use App\QuickLink;
use Illuminate\Http\Request;
use App\Http\Requests\QuickLinks\CreateQuickLinkRequest;
use App\Http\Requests\QuickLinks\UpdateQuickLinkRequest;

class QuickLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('auth.quicklinks.index')->with('quicklinks', QuickLink::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.quicklinks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateQuickLinkRequest $request)
    {
        QuickLink::create([
            'name' => $request->name,
            'link' => $request->link,
        ]);

        session()->flash('status' ,'Success');

        return redirect()->route('quicklink.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuickLink  $quickLink
     * @return \Illuminate\Http\Response
     */
    public function show(QuickLink $quickLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuickLink  $quickLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($quickLink);
        return view('auth.quicklinks.create')->with('quicklink' , QuickLink::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuickLink  $quickLink
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuickLinkRequest $request, QuickLink $quickLink)
    {
        $data = $request->only(['name', 'link']);
        //storing attribute
        $quickLink->update($data);
        //flashing session
        if(isset($quickLink)){
        session()->flash('status', 'Success');
        }
        else {
            session()->flash('danger', 'Please try again');
        }
        //redirect user
        return redirect()->route('quicklink.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuickLink  $quickLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id =  QuickLink::find($id);
        $delete = $id->delete();
        if(isset($delete)){
            //flashing session
            session()->flash('status', 'Success');
        }
        else {
            session()->flash('danger', 'Please try again');
        }
        //redirect user
        return redirect()->route('quicklink.index');
    }
}
