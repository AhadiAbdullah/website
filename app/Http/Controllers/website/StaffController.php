<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\News;


class StaffController extends Controller
{
    public function index() {

        $staff = Staff::orderBy('id','DESC')->get();
        return view('website.staff.staff',[
            'staff' => $staff
        ]);
    }


    public function singleStaff($id) {
        $staff = Staff::where('id', $id)->first();
        $cause = News::limit(1)->orderBy('id', 'DESC')->first();

        return view('website.staff.singleStaff',[
            'staff' => $staff,
            'cause' => $cause
        ]);
    }
}
