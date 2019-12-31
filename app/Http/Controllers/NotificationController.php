<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use App\Http\Requests\Notifications\CreateNotificationsRequest;
use App\Http\Requests\Notifications\UpdateNotificationsRequest;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
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
        return view('auth.notifications.index')->with('notifications', Notification::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNotificationsRequest $request)
    {
        Notification::create([
            'title' => $request->title,
            'new' => 1,
            'notification_file' => $this->StoreNotificationFile($request)
            ]);

        session()->flash('status', 'notification created successfully');
        return redirect()->route('notifications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        return view('auth.notifications.create')->with('notification',$notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotificationsRequest $request, Notification $notification)
    {
        //requested attribute update
        $data = $request->only(['title', 'notification_file', 'new']);
        //check if request has new image
        if ($request->hasFile('notification_file')) {
            //store new image
            $notification_file = $this->StoreNotificationFile($request);
            //delete old image

            //deleteImage()defined in model
            $notification->deleteFile() ;

            $data['notification_file'] = $notification_file;
        }

        //storing attribute
        $notification->update($data);
        //flashing session
        session()->flash('status', 'Notification updated successfully');
        //redirect user
        return redirect()->route('notifications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        $done = Storage::delete($notification->notification_file);
        if($done){ 
        $notification->delete();
        session()->flash('status', 'notification deleted successfully');
         return redirect()->route('notifications.index');
        }
        else{
        session()->flash('warning', 'failed');
        return redirect()->route('notifications.index');
        }
    }
    //handle the image storage request
    private function StoreNotificationFile($request)
    {
        //if request has image
        if($request->hasFile('notification_file')) {
            //storing image
            return $notification_file = $request->file('notification_file')->store('notifications','public');
        }
    }
}
