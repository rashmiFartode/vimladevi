<?php

namespace App\Http\Controllers;

use App\GovernmentSite;
use App\Http\Requests\GovernmentSite\CreateGovernmentSitesRequest;
use App\Http\Requests\GovernmentSite\UpdateGovernmentSitesRequest;
use Illuminate\Http\Request;

class GovernmentSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.governmentSites.index')->with('governmentSites', GovernmentSite::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.governmentSites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGovernmentSitesRequest $request)
    {
        GovernmentSite::create([
            'name' => $request->name,
            'link' => $request->link,
        ]);

        session()->flash('status', 'Success');

        return redirect()->route('governmentSites.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GovernmentSite  $governmentSite
     * @return \Illuminate\Http\Response
     */
    public function show(GovernmentSite $governmentSite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GovernmentSite  $governmentSite
     * @return \Illuminate\Http\Response
     */
    public function edit(GovernmentSite $governmentSite)
    {
        return view('auth.governmentSites.create')->with(compact('governmentSite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GovernmentSite  $governmentSite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGovernmentSitesRequest $request, GovernmentSite $governmentSite)
    {
        $data = $request->only(['name', 'link']);
        //storing attribute
        $governmentSite->update($data);
        //flashing session
        if (isset($governmentSite)) {
            session()->flash('status', 'Success');
        } else {
            session()->flash('danger', 'Please try again');
        }
        //redirect user
        return redirect()->route('governmentSites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GovernmentSite  $governmentSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(GovernmentSite $governmentSite)
    {
        // $id =  GovernmentSite::find($id);
        $delete = $governmentSite->delete();
        if (isset($delete)) {
            //flashing session
            session()->flash('status', 'Success');
        } else {
            session()->flash('danger', 'Please try again');
        }
        //redirect user
        return redirect()->route('governmentSites.index');
    }
}
