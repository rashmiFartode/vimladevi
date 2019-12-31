<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use App\Http\Requests\Activities\CreateActivitiesRequest;
use App\Http\Requests\Activities\UpdateActivitiesRequest;
use Illuminate\Support\Facades\Storage;


class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.activities.index')->with('activities', Activity::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateActivitiesRequest $request)
    {
        Activity::create([
            'title' => $request->title,
            'description' => $request->description,
            'file' => $this->StoreFile($request),
        ]);

        session()->flash('status', 'Created successfully');
        return redirect()->route('activities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('auth.activities.create')->with('activity', $activity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivitiesRequest $request, Activity $activity)
    {
        $data = $request->only(['title', 'description', 'file']);
        if ($request->hasFile('file')){
            $file = $this->StoreFile($request);
            $activity->deleteFile();
            $data['file'] = $file;
        }

        $activity->update($data);
        session()->flash('status', 'Created successfully');
        return redirect()->route('activities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {

        $done = Storage::delete($activity->file);
        if ($done) {
            $activity->delete();
            session()->flash('status', 'Deleted successfully');
            return redirect()->route('activities.index');
        } else {
            session()->flash('warning', 'failed');
            return redirect()->route('activities.index');
        }
    }

    //handle the file storage request
    private function StoreFile($request)
    {
        //if request has file
        if ($request->hasFile('file')) {
            //storing file
            return $file = $request->file('file')->store('activities', 'public');
        }
    }
}
