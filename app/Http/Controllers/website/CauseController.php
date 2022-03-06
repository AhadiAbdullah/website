<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causes = News::select(['id','title', 'description', 'image'])->orderBy('id', 'DESC')->paginate(4);
        $latestcauses = News::limit(2)->orderBy('id', 'DESC')->get();
        return view('website.causes.cause',[
            'causes' => $causes,
            'latestcauses' => $latestcauses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singleCause($id)
    {
        $cause = News::where('id', $id)->first();
        $causes = News::limit(2)->orderBy('id', 'DESC')->get();
        return view('website.causes.singleCause',[
            'cause' => $cause,
            'causes' => $causes
        ]);
    }

}
