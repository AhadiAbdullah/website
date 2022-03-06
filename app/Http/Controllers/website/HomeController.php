<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\News;
use App\Models\Event;
use App\Models\Message;
use App\Models\Staff;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $sliders = Slider::select(['title', 'description', 'image'])->orderBy('id', 'DESC')->get();
        // get two random records
        $featureNews = News::inRandomOrder()->limit(2)->get();
        $latestEvent = Event::limit(1)->orderBy('id', 'DESC')->first();
        $fourLatestNews = News::limit(4)->get();
        $latestMsg = Message::limit(1)->orderBy('id', 'DESC')->first();
        $staff = Staff::limit(4)->orderBy('id', 'DESC')->get();
        
        return view('website.home',
        [
            'sliders' => $sliders,
            'featureNews' => $featureNews,
            'fourLatestNews' => $fourLatestNews,
            'latestEvent' => $latestEvent,
            'latestMsg' => $latestMsg,
            'staff' => $staff,
        ]);
    }
}
