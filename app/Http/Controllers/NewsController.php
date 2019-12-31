<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests\News\CreateNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
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
        return view('auth.news.index')->with('news', News::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsRequest $request)
    {
        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'news_file' => $this->StoreFile($request)
        ]);

        session()->flash('status', 'Created successfully');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('auth.news.create')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //requested attribute update
        $data = $request->only(['title', 'description', 'news_file']);
        //check if request has new file
        if ($request->hasFile('news_file')) {
            //store new file
            $news_file =  $this->StoreFile($request);
            //delete old file

            //deleteFile()defined in model
            $news->deleteFile();

            $data['news_file'] = $news_file;
        }

        //storing attribute
        $news->update($data);
        //flashing session
        session()->flash('status', 'Updated successfully');
        //redirect user
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $done = Storage::delete($news->news_file);
        if ($done) {
            $news->delete();
            session()->flash('status', 'Deleted successfully');
            return redirect()->route('news.index');
        } else {
            session()->flash('warning', 'failed');
            return redirect()->route('news.index');
        }
    }

    //handle the file storage request
    private function StoreFile($request)
    {
        //if request has file
        if ($request->hasFile('news_file')) {
            //storing file
            return $news_file = $request->file('news_file')->store('news', 'public');
        }
    }

}
