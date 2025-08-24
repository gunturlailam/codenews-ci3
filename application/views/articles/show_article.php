<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Article</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 40px auto;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
            border-radius: 8px;
            padding: 32px 28px;
        }

        h1 {
            color: #2d3748;
            margin-bottom: 18px;
            font-size: 2.2em;
        }

        .article-meta {
            color: #718096;
            font-size: 0.95em;
            margin-bottom: 24px;
        }

        .article-content {
            color: #333;
            line-height: 1.7;
            font-size: 1.15em;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Halaman untuk baca artikel</h1>
        <div class="article-meta">
            <!-- Tanggal, Penulis, dll bisa ditampilkan di sini -->
            <span>Tanggal: <?= isset($article['date']) ? $article['date'] : 'Tidak tersedia'; ?></span> |
            <span>Penulis: <?= isset($article['author']) ? $article['author'] : 'Tidak tersedia'; ?></span>
        </div>
        <div class="article-content">
            <?= isset($article['content']) ? $article['content'] : 'Konten tidak tersedia.'; ?>
        </div>
    </div>
</body>

</html>