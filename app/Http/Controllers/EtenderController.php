<?php

namespace App\Http\Controllers;

use App\Etender;
use Illuminate\Http\Request;
use App\Http\Requests\Etenders\CreateEtendersRequest;
use App\Http\Requests\Etenders\UpdateEtendersRequest;
use Illuminate\Support\Facades\Storage;


class EtenderController extends Controller
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
        return view('auth.etenders.index')->with('etenders', Etender::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.etenders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEtendersRequest $request)
    {
        Etender::create([
            'title' => $request->title,
            'etender_file' => $this->StoreEtenderFile($request)
        ]);

        session()->flash('status', 'Created successfully');
        return redirect()->route('etenders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etender  $etender
     * @return \Illuminate\Http\Response
     */
    public function show(Etender $etender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etender  $etender
     * @return \Illuminate\Http\Response
     */
    public function edit(Etender $etender)
    {
        return view('auth.etenders.create')->with('etender', $etender);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etender  $etender
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtendersRequest $request, Etender $etender)
    {
        //requested attribute update
        $data = $request->only(['title', 'etender_file']);
        //check if request has new file
        if ($request->hasFile('etender_file')) {
            //store new file
            $etender_file =  $this->StoreEtenderFile($request);
            //delete old file

            //deleteFile()defined in model
            $etender->deleteFile();

            $data['etender_file'] = $etender_file;
        }

        //storing attribute
        $etender->update($data);
        //flashing session
        session()->flash('status', 'Updated successfully');
        //redirect user
        return redirect()->route('etenders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etender  $etender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etender $etender)
    {
        $done = Storage::delete($etender->etender_file);
        if ($done) {
            $etender->delete();
            session()->flash('status', 'Deleted successfully');
            return redirect()->route('etenders.index');
        } else {
            session()->flash('warning', 'failed');
            return redirect()->route('etenders.index');
        }
    }

    //handle the file storage request
    private function StoreEtenderFile($request)
    {
        //if request has file
        if ($request->hasFile('etender_file')) {
            //storing file
            return $etender_file = $request->file('etender_file')->store('etenders', 'public');
        }
    }
}
