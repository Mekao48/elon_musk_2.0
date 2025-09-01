<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\News;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

// Route::get('/news', function () {
//     $allNews = News::all();
//     return view('news.index', ['newsList' => $allNews]);
// })->name('news');

// Route::get('/news/{id}', function ($id) {
//     $newsItem = News::findOrFail($id);
//     return view('news.detail', ['news' => $newsItem]);
// })->name('news.detail');
Route::get('/news', function () {
    $newsList = News::all();
    return view('news', compact('newsList'));
})->name('news');

Route::get('/news/{id}', function ($id) {
    $newsItem = News::findOrFail($id);
    return view('news_detail', compact('newsItem'));
})->name('news.detail');
