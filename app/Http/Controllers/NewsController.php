<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::all();
        return view('news', compact('newsList'));
    }

    public function show($id)
    {
        $newsItem = News::findOrFail($id);
        return view('news_detail', compact('newsItem'));
    }
}