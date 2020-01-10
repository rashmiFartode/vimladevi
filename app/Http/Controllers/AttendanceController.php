<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use App\Http\Requests\Attendances\CreateAttendanceRequest;
use App\Http\Requests\Attendances\UpdateAttendanceRequest;
use Illuminate\Support\Facades\Storage;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.attendances.index')->with('attendances', Attendance::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.attendances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAttendanceRequest $request)
    {
        Attendance::create([
            'attendanceFor' => $request->attendanceFor,
            'title' => $request->title,
            'file' => $this->StoreFile($request),
        ]);
        session()->flash('status', 'Success');
        return redirect()->route('attendances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        return view('auth.attendances.index')->with('attendance', $attendance);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendanceRequest $request, Attendance $attendance)
    {
        $data = $request->only(['attendanceFor', 'title', 'file']);
        if ($request->hasFile('file')) {
            $file = $this->StoreFile($request);

            $attendance->deleteFile();
            $data['file'] = $file;
        }
        $attendance->update($data);
        session()->flash('status', 'Susseccfuly Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        $done = Storage::delete($attendance->file);
        if (isset($done)) {
            $attendance->delete();
            session()->flash('status', 'Successfully');
            return redirect()->route('attendances.index');
        } else {
            session()->flash('warning', 'failed');
            return redirect()->route('attendances.index');
        }
    }
    //handle the image storage request
    private function StoreFile($request)
    {
        //if request has image
        if ($request->hasFile('file')) {
            //storing image
            return $file = $request->file('file')->store('attendances', 'public');
        }
    }
}
