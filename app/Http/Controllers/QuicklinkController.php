<?php

namespace App\Http\Controllers;

use App\QuickLink;
use Illuminate\Http\Request;
use App\Http\Requests\QuickLinks\CreateQuickLinkRequest;
use App\Http\Requests\QuickLinks\UpdateQuickLinkRequest;

class QuicklinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        QuickLink::create([
            'name' => $request->name,
            'link' => $request->link,
        ]);

        session()->flash('status', 'Success');

        return redirect()->route('quicklink.index');
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
    public function edit(QuickLink $quicklink)
    {
        return view('auth.quicklinks.create')->with(compact('quicklink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuickLinkRequest $request, QuickLink $quicklink)
    {
        $data = $request->only(['name', 'link']);
        $quicklink->update($data);
        //flashing session
        if (isset($quicklink)) {
            session()->flash('status', 'Success');
        } else {
            session()->flash('danger', 'Please try again');
        }
        //redirect user
        return redirect()->route('quicklink.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuickLink $quicklink)
    {
        $delete = $quicklink->delete();
        if (isset($delete)) {
            //flashing session
            session()->flash('status', 'Success');
        } else {
            session()->flash('danger', 'Please try again');
        }
        //redirect user
        return redirect()->route('quicklink.index');
    }
}
