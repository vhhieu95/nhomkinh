<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $introduces = Introduction::select('id', 'title', 'content')->paginate(10);
        return view('frontend.about-us.index');
    }

    public function indexTuyenDung()
    {
        return view('frontend.about-us.indexTuyenDung');
    }

    public function indexBaoGia()
    {
        return view('frontend.about-us.indexBaoGia');
    }
}
