<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Brian2694\Toastr\Facades\Toastr;

class NewsController extends Controller
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
        $news = News::orderBy('id', 'DESC')->get();
        return view('admin/news/index', compact('news'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/news/create');
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
            'date' => 'date',
            'image' => 'required',
            
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('assets/news'), $imageName);
        $news = new News;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->image = $imageName;
        $news->save();

        Toastr::success('News added successfully :)','Success');
        return redirect()->route('news.index');
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
        $news =  News::find($id);
        return view('admin/news/edit', compact('news'));
        
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
        $news =  News::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            
        ]);
  
        
        if(is_string($request->image)) {
            $imageName = $request->image;
        } else {

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('assets/news'), $imageName);
        }
       
        $news->title = $request->title;
        $news->description = $request->description;
        $news->image = $imageName;
        $news->save();
        Toastr::info('News Updated successfully :)','Success');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        Toastr::error('News Deleted successfully :(','Success');
        return redirect()->route('news.index');
    }
}
