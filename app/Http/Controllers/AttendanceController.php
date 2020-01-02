<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use App\Http\Requests\Attendances\CreateAttendancesRequest;
use App\Http\Requests\Attendances\UpdateAttendancesRequest;
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
        return view('auth.attendances.index')->with('attendances',Attendance::paginate(10));    //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.attendances.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAttendancesRequest $request)
    {
        Attendance::create([
            'title' => $request->title,
            'file' => $this->StoreFile($request),
        ]);

        session()->flash('status', 'Created successfully');
        return redirect()->route('attendances.index');    //
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
        return view('auth.attendances.create')->with('attendance', $attendance); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendancesRequest $request, Attendance $attendance)
    {
        $data = $request->only(['title', 'file']);
        if ($request->hasFile('file')){
            $file = $this->StoreFile($request);
            $attendance->deleteFile();
            $data['file'] = $file;
        }

        $attendance->update($data);
        session()->flash('status', 'Updated successfully');
        return redirect()->route('attendances.index'); //
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
        if ($done) {
            $attendance->delete();
            session()->flash('status', 'Deleted successfully');
            return redirect()->route('attendances.index');
        } else {
            session()->flash('warning', 'failed');
            return redirect()->route('attendances.index');
        } //
    }

    private function StoreFile($request)
    {
        //if request has file
        if ($request->hasFile('file')) {
            //storing file
            return $file = $request->file('file')->store('attendances', 'public');
        }
    }
}
