<?php

namespace App\Http\Controllers;

use App\Result;
use App\Http\Requests\Results\CreateResultsRequest;
use App\Http\Requests\Results\UpdateResultsRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.results.index')->with('results', Result::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.results.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateResultsRequest $request)
    {
        Result::create([
            'title' => $request->title,
            'file' => $this->StoreFile($request)
        ]);

        session()->flash('status', 'successfully');
        return redirect()->route('results.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        return view('auth.results.create')->with(compact('result'), $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResultsRequest $request, Result $result)
    {
        //requested attribute update
        $data = $request->only(['title', 'file']);
        //check if request has new image
        if ($request->hasFile('file')) {
            //store new image
            $file = $this->StoreFile($request);
            //delete old image

            //deleteImage()defined in model
            $result->deleteFile();

            $data['file'] = $file;
        }

        //storing attribute
        $result->update($data);
        //flashing session
        session()->flash('status', 'Successfully');
        //redirect user
        return redirect()->route('results.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        $done = Storage::delete($result->file);
        if ($done) {
            $result->delete();
            session()->flash('status', 'Successfully');
            return redirect()->route('results.index');
        } else {
            session()->flash('warning', 'failed');
            return redirect()->route('results.index');
        }
    }


    //handle the image storage request
    private function StoreFile($request)
    {
        //if request has image
        if($request->hasFile('file')) {
            //storing image
            return $file = $request->file('file')->store('results','public');
        }
    }
}
