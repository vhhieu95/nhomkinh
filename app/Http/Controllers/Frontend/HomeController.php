<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\Product;
use App\Model\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsproduct = Product::select('id', 'name', 'description', 'slug', 'created_at')->orderby('created_at', 'DESC')->first();
        $products = Product::select('id', 'name', 'description', 'slug', 'created_at')->orderby('created_at', 'DESC')->limit(6)->get();
        $projects = Project::select('id', 'title', 'description', 'content', 'image', 'slug', 'created_at')->orderby('created_at', 'DESC')->limit(4)->get();
        $news = News::select('id', 'title', 'description', 'content', 'image', 'slug', 'created_at')->orderby('created_at', 'DESC')->limit(3)->get();
        return view('frontend.home.index', compact('products', 'projects', 'news','newsproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
