<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Brian2694\Toastr\Facades\Toastr;

class SliderController extends Controller
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
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('admin/sliders/index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/sliders/create');
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
            'description' => 'required',
            'image' => 'required',
            
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('assets/sliders'), $imageName);

        $slider = new Slider;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->image = $imageName;
        $slider->save();

        Toastr::success('Slider added successfully :)','Success');
        return redirect()->route('slider.index');
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
        $slider =  Slider::find($id);
        return view('admin/sliders/edit', compact('slider'));
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
        $slider =  Slider::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            
        ]);
  
        
        if(is_string($request->image)) {
            $imageName = $request->image;
        } else {

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('assets/sliders'), $imageName);
        }
       
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->image = $imageName;
        $slider->save();
        Toastr::info('Slider Updated successfully :)','Success');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider =  Slider::find($id);
        $slider->delete();
        Toastr::error('Message Deleted successfully :(','Success');
        return redirect()->route('slider.index');
    }
}
