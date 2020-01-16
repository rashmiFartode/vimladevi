<?php

namespace App\Http\Controllers;

use App\GovernmentSite;
use App\Activity;
use App\Gallery;
use App\News;
use App\QuickLink;
use App\Notification;
use App\Result;
use App\TeachingStaff;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        return view('frontEnd.index')->with('governmentSites', GovernmentSite::all())
            ->with('activities', Activity::all())
            ->with('quicklinks', QuickLink::all())
            ->with('news', News::all())
            ->with('notifications', Notification::all());
    }

    public function about()
    {
        return view('frontEnd.about');
    }
    public function admission()
    {
        return view('frontEnd.admissions');
    }
    public function agad()
    {
        return view('frontEnd.agad-tantra');
    }
    public function attendance()
    {
        return view('frontEnd.attendance');
    }
    public function ayurved()
    {
        return view('frontEnd.ayurved');
    }
    public function dravyaguna()
    {
        return view('frontEnd.dravyaguna');
    }
    public function kaumarbhritya()
    {
        return view('frontEnd.kaumarbhritya');
    }
    public function kayachikitsa()
    {
        return view('frontEnd.kayachikitsa');
    }
    public function kriya()
    {
        return view('frontEnd.kriya');
    }

    public function medi_camp()
    {
        $medicamp = Gallery::where('category', '=', "1")->get();
        return view('frontEnd.medi_camp')->with('medicamp', $medicamp);
    }
    public function swachha_bharat()
    {
        $swachhaBharat = Gallery::where('category', '=', "2")->get();
        return view('frontEnd.swachhaBharat')->with('swachhaBharat', $swachhaBharat);
    }
    public function madhumeh()
    {
        $madhumeh = Gallery::where('category', '=', "3")->get();
        return view('frontEnd.madhumeh')->with('madhumeh', $madhumeh);
    }
    public function cultural()
    {
        $cultural = Gallery::where('category', '=', "4")->get();
        return view('frontEnd.cultural')->with('culPhotos', $cultural);
    }
    public function sports()
    {
        $sports = Gallery::where('category', '=', "5")->get();
        return view('frontEnd.sports')->with('sports', $sports);
    }

    public function panchkarma()
    {
        return view('frontEnd.panchkarma');
    }
    public function permission()
    {
        return view('frontEnd.permissions');
    }
    public function prasuti()
    {
        return view('frontEnd.prasuti');
    }
    public function president()
    {
        return view('frontEnd.president_message');
    }
    public function principal()
    {
        return view('frontEnd.principal_message');
    }
    public function rachana()
    {
        return view('frontEnd.rachana');
    }
    public function result()
    {
        return view('frontEnd.result')->with('results', Result::paginate(10));
    }
    public function rognidan()
    {
        return view('frontEnd.rogNidan');
    }
    public function shalakya()
    {
        return view('frontEnd.shalakya');
    }
    public function shalyatantra()
    {
        return view('frontEnd.shalyatantra');
    }
    public function shastra()
    {
        return view('frontEnd.shastra');
    }
    public function staff()
    {
        return view('frontEnd.staff')->with('staffs', TeachingStaff::paginate(15));
    }
    public function yoga()
    {
        return view('frontEnd.yoga');
    }

    public function news($id)
    {
        $news = News::findOrFail($id);
        if (isset($news) == null) {
            return response(404);
        } else {

            return view('frontEnd.news')->with('news', $news);
        }
    }
    public function recent_activity($id)
    {
        $recent_activity = Activity::findOrFail($id);
        if (isset($recent_activity) == null) {
            return response(404);
        } else {

            return view('frontEnd.recent_activity')->with('recent_activity', $recent_activity);
        }
    }
}
