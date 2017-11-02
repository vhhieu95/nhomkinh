<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
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
}
