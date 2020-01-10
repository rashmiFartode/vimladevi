<?php

namespace App\Http\Controllers;

use App\GovernmentSite;
use App\Activity;
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
    public function contact()
    {
        return view('frontEnd.contact');
    }
    public function cultural()
    {
        return view('frontEnd.cultural');
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
    public function madhumeh()
    {
        return view('frontEnd.madhumeh');
    }
    public function medi_camp()
    {
        return view('frontEnd.medi_camp');
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
    public function sports()
    {
        return view('frontEnd.sports');
    }
    public function staff()
    {
        return view('frontEnd.staff')->with('staffs', TeachingStaff::paginate(15));
    }
    public function swachha_bharat()
    {
        return view('frontEnd.swachhaBharat');
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
