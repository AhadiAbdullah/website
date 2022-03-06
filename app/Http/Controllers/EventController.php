<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Brian2694\Toastr\Facades\Toastr;

class EventController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'DESC')->get();
        return view('admin/events/index', compact('events'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/events/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'date' => 'date',
            'image' => 'required',
            
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('assets/events'), $imageName);
        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->detail = $request->detail;
        $event->location = $request->location;
        $event->social_link = $request->social_link;
        $event->image = $imageName;
        $event->save();

        Toastr::success('Event added successfully :)','Success');
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $event =  Event::find($id);
        return view('admin/events/edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event =  Event::find($id);
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'location' => 'required',
            
        ]);
  
        
        if(is_string($request->image)) {
            $imageName = $request->image;
        } else {

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('assets/events'), $imageName);
        }
       
        $event->title = $request->title;
        $event->date = $request->date;
        $event->detail = $request->detail;
        $event->location = $request->location;
        $event->social_link = $request->social_link;
        $event->image = $imageName;
        $event->save();
        Toastr::info('Event Updated successfully :)','Success');
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        Toastr::error('Event Deleted successfully :(','Success');
        return redirect()->route('event.index');
    }
}
