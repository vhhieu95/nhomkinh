<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $columns = [
            'id',
            'title',
            'description',
            'content',
            'image',
            'slug',
            'created_at',
        ];
            
        $news = News::select($columns)
            ->orderby('id', 'DESC')->paginate(5);
        $time = new Carbon($news[0]->created_at);
        $day = $time->toFormattedDateString();
        // dd($day->day);
        return view('frontend.news.index', compact('news', 'day'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $time = new Carbon($news->created_at);
        $day = $time->toFormattedDateString();
        $newsDiff = News::first();

        return view('frontend.news.show', compact('news', 'newsDiff', 'day'));
    }
}
