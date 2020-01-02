<?php

namespace App\Http\Controllers;

use App\TeachingStaff;
use Illuminate\Http\Request;
use App\Http\Requests\Teaching\CreateTeachingStaffRequest;
use App\Http\Requests\Teaching\UpdateTeachingStaffRequest;
use Illuminate\Support\Facades\Storage;

class TeachingStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.teachingStaffs.index')->with('teachingStaffs', TeachingStaff::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.teachingStaffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTeachingStaffRequest $request)
    {
        TeachingStaff::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'department' => $request->department,
            'file' => $this->StoreFile($request),
        ]);

        session()->flash('status', 'Created successfully');
        return redirect()->route('teachingStaffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeachingStaff  $teachingStaff
     * @return \Illuminate\Http\Response
     */
    public function show(TeachingStaff $teachingStaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeachingStaff  $teachingStaff
     * @return \Illuminate\Http\Response
     */
    public function edit(TeachingStaff $teachingStaff)
    {
        return view('auth.teachingStaffs.create')->with('teachingStaff', $teachingStaff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeachingStaff  $teachingStaff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeachingStaffRequest $request, TeachingStaff $teachingStaff)
    {   
        $data = $request->only(['name','designation','department','file']);
        if ($request->hasFile('file')){
            $file = $this->StoreFile($request);
            $teachingStaff->deleteFile();
            $data['file'] = $file;
        }

        $teachingStaff->update($data);
        session()->flash('status', 'Updated successfully');
        return redirect()->route('teachingStaffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeachingStaff  $teachingStaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeachingStaff $teachingStaff)
    {
        $done = Storage::delete($teachingStaff->file);
        if ($done) {
            $teachingStaff->delete();
            session()->flash('status', 'Deleted successfully');
            return redirect()->route('teachingStaffs.index');
        } else {
            session()->flash('warning', 'failed');
            return redirect()->route('teachingStaffs.index');
        }
    }
    private function StoreFile($request)
    {
        //if request has file
        if ($request->hasFile('file')) {
            //storing file
            return $file = $request->file('file')->store('teachingStaffs', 'public');
        }
    }
}
