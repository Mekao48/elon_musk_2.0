
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>รายการข่าวออนไลน์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">รายการข่าวออนไลน์</h1>
    <div class="row">
        @foreach($newsList as $news)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($news->image)
                        <img src="{{ $news->image }}" class="card-img-top" alt="news image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $news->title }}</h5>
                        <p class="card-text">{{ Str::limit($news->content, 80) }}</p>
                        <a href="{{ route('news.detail', $news->id) }}" class="btn btn-primary">อ่านต่อ</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>