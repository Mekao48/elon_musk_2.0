
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>{{ $newsItem->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <a href="{{ route('news') }}" class="btn btn-secondary mb-3">← กลับหน้ารายการข่าว</a>
    <div class="card">
        @if($newsItem->image)
            <img src="{{ $newsItem->image }}" class="card-img-top" alt="news image">
        @endif
        <div class="card-body">
            <h2 class="card-title">{{ $newsItem->title }}</h2>
            <p class="card-text">{{ $newsItem->content }}</p>
        </div>
    </div>
</div>
</body>
</html>