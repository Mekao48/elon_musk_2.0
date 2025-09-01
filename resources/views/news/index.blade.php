@extends('layouts.app')

@section('content')
<h1>ข่าวทั้งหมด</h1>
<ul>
    @foreach ($newsList as $news)
        <li>
            <a href="{{ route('news.detail', $news->id) }}">{{ $news->title }}</a>
        </li>
    @endforeach
</ul>
@endsection
