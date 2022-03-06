<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::select(['id','title','detail','image','location','social_link','date'])->paginate(4);
        $latestevents = Event::limit(2)->orderBy('id', 'DESC')->get();
        return view('website.events.events',[
            'events' => $events,
            'latestevents' => $latestevents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singleEvent($id)
    {
        $event = Event::where('id', $id)->first();
        $events = Event::limit(2)->orderBy('id', 'DESC')->get();
        return view('website.events.singleEvent',[
            'event' => $event,
            'events' => $events
        ]);
    }

    
    public function pastEvents()
    {
        $events = Event::select(['id','title','detail','image','location','social_link','date'])->orderBy('id', 'DESC')->paginate(4);
        $latestevents = Event::limit(2)->orderBy('id', 'DESC')->get();
        return view('website.events.events',[
            'events' => $events,
            'latestevents' => $latestevents
        ]);
    }
}
