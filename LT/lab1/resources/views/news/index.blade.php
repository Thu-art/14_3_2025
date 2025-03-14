<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .news-item { margin-bottom: 20px; padding: 10px; border-bottom: 1px solid; }
        .news-title { font-size: 20px; font-weight: bold; }
        .news-content { margin-top: 5px; }
    </style>
</head>
<body>
    <h1>Danh sách tin tức</h1>
    @foreach ($news as $item)
        <div class="news-item">
            <div class="news-title">{{ $item->title }}</div>
            <div class="news-content">{{ $item->content }}</div>
        </div>
    @endforeach
</body>
</html>
