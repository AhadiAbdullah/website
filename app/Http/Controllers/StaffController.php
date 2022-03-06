<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Brian2694\Toastr\Facades\Toastr;

class StaffController extends Controller
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
        $staff = Staff::orderBy('id', 'DESC')->get();
        return view('admin/staff/index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/staff/create');

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
            'name' => 'required',
            'image' => 'required',
            'details' => 'required',
            
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('assets/staff'), $imageName);
        $staff = new Staff;
        $staff->title = $request->title;
        $staff->name = $request->name;
        $staff->details = $request->details;
        $staff->image = $imageName;
        $staff->save();

        Toastr::success('Message added successfully :)','Success');
        return redirect()->route('staff.index');
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
        $staff =  Staff::find($id);
        return view('admin/staff/edit', compact('staff'));
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
        $staff =  Staff::find($id);
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            
        ]);
  
        
        if(is_string($request->image)) {
            $imageName = $request->image;
        } else {

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('assets/staff'), $imageName);
        }
       
        $staff->title = $request->title;
        $staff->name = $request->name;
        $staff->details = $request->details;
        $staff->image = $imageName;
        $staff->save();
        Toastr::info('Message Updated successfully :)','Success');
        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        Toastr::error('Message Deleted successfully :(','Success');
        return redirect()->route('staff.index');
    }
}
