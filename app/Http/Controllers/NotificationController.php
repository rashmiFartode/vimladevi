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
            'notification_file' => $this->StoreNotificationFile($request)
            ]);

        session()->flash('status', 'Added successfully');
        return redirect()->route('important_links.index');
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
    public function edit(Notification $important_link)
    {
        return view('auth.notifications.create')->with('notification', $important_link);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotificationsRequest $request, Notification $important_link)
    {
        //requested attribute update
        $data = $request->only(['title', 'notification_file']);
        //check if request has new image
        if ($request->hasFile('notification_file')) {
            //store new image
            $notification_file = $this->StoreNotificationFile($request);
            //delete old image

            //deleteImage()defined in model
            $important_link->deleteFile() ;

            $data['notification_file'] = $notification_file;
        }

        //storing attribute
        $important_link->update($data);
        //flashing session
        session()->flash('status', 'Updated successfully');
        //redirect user
        return redirect()->route('important_links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $important_link)
    {
        $done = Storage::delete($important_link->notification_file);
        if($done){
            $important_link->delete();
        session()->flash('status', 'Deleted successfully');
         return redirect()->route('important_links.index');
        }
        else{
        session()->flash('warning', 'failed');
        return redirect()->route('important_links.index');
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
