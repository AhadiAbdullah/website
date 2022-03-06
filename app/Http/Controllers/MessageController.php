<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Brian2694\Toastr\Facades\Toastr;
class MessageController extends Controller
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
        $message = Message::orderBy('id', 'DESC')->get();
        return view('admin/message/index', compact('message'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/message/create');
        
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
            
        ]);

        
        $message = new Message;
        $message->title = $request->title;
        $message->description = $request->description;
       
        $message->save();

        Toastr::success('Message added successfully :)','Success');
        return redirect()->route('message.index');
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
        $message =  Message::find($id);
        return view('admin/message/edit', compact('message'));
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
        $message =  Message::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            
        ]);
  
    
        $message->title = $request->title;
        $message->description = $request->description;
        $message->save();
        Toastr::info('Message Updated successfully :)','Success');
        return redirect()->route('message.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message =  Message::find($id);
        $message->delete();
        Toastr::error('Message Deleted successfully :(','Success');
        return redirect()->route('message.index');
              
    }
}
