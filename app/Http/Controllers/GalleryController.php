<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\Gallery\CreateGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.gallery.index')->with('galleries', Gallery::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGalleryRequest $request)
    {
        Gallery::create([
            'category' => $request->category,
            'file' => $this->storeFile($request),
        ]);
        session()->flash('status', 'Success');
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('auth.gallery.create')->with('gallery', $gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $data = $request->only(['category', 'file']);
        if ($request->hasFile('file')) {
            $file = $this->storeFile($request);
            $gallery->deleteFile();
            $data['file'] = $file;
        }

        $gallery->update($data);
        session()->flash('status', 'Created successfully');
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $done = Storage::delete($gallery->file);
        if (isset($done)) {
            $gallery->delete();
            session()->flash('status', 'Successfully');
            return redirect()->route('gallery.index');
        } else {
            session()->flash('warning', 'failed');
            return redirect()->route('gallery.index');
        }
    }

    //handle the image storage request
    private function StoreFile($request)
    {
        //if request has image
        if ($request->hasFile('file')) {
            //storing image
            return $file = $request->file('file')->store('gallery', 'public');
        }
    }
}
