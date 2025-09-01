@extends('layouts.app')

@section('content')
<h1>{{ $news->title }}</h1>
<p>{{ $news->content }}</p>
<a href="{{ route('news') }}">กลับไปหน้ารายการข่าว</a>
@endsection
