<?php

namespace App\Http\Controllers;

use App\GalleryMultiple;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MultipleUploadController extends Controller
{
    public function index()
    {
        return view('auth.galleryMultiple.multiple_file_upload')->with('files', GalleryMultiple::all() );
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'files' => 'required',
            'files.*' => 'mimes:jpg,jpeg,png,gif'
        ]);
        if ($request->hasfile('files')) {
                GalleryMultiple::create([
                    'files' => $request->file('files')->store('gallery', 'public'),
                ]);
        }

        session()->flash('status', 'Success');
        return redirect()->route('galleryimage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryMultiple $galleryMultiple)
    {

        $done = Storage::delete($galleryMultiple->files);
        if ($done) {
            $galleryMultiple->delete();
            session()->flash('status', 'Deleted successfully');
            return redirect()->route('galleryimage');
        } else {
            session()->flash('warning', 'failed');
            return redirect()->route('galleryimage');
        }
    }
}
