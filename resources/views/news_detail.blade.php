@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="mb-3">{{ $news->title }}</h1>
            <img src="{{ $news->image }}" alt="{{ $news->title }}" class="img-fluid rounded mb-4 shadow-sm">
            <p class="fs-5">{{ $news->content }}</p>

            <a href="{{ $news->source_url }}" target="_blank" class="btn btn-danger">อ่านจากแหล่งที่มา</a>
            <a href="{{ route('news') }}" class="btn btn-outline-secondary">ย้อนกลับ</a>
        </div>
    </div>
</div>
@endsection
