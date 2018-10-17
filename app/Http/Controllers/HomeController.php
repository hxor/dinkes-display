<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\RunningText as Runtext;
use App\Models\Playlist as Video;
use App\Models\Schedule;
use DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'home']);
    }

    /**
     * Show index page
     */
    public function index()
    {
        $setting = Setting::first();
        $runtext = Runtext::where('status', 1)->get();
        $video = Video::select('media')->where('status', 1)->get();
        $playlist = [];
        foreach ($video as $video) {
            $playlist[] = asset($video->media);
        }

        return view('welcome', compact('setting', 'runtext', 'playlist'));
    }


    public function schedule($id)
    {
        $date = new DateTime();
        $jam = $date->format('Y-m-d H:i' . ':00');
        $graha = "Graha {$id}";
        $data = Schedule::where('clock_start_early', $jam)->where('graha_id', $id)->first();
        return view('_schedule', compact('graha', 'data'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }
}
