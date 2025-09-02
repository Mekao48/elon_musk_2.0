<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of all news items.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $allNews = News::all();
        return view('news', ['newsList' => $allNews]);
    }

    /**
     * Display the specified news item.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $newsItem = News::findOrFail($id);
        return view('news_detail', ['news' => $newsItem]);
    }
}
