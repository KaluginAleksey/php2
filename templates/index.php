<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
<a href="/php2/Controllers/admin.php">Админка</a>

<?php foreach ($this->news as $article): ?>
    <?php /** @var \App\Article $article */ ?>
    <a href="/php2/article.php?id=<?php echo $article->id; ?>">
        <h3><?php echo $article->title; ?></h3>
    </a>
    <p><?php echo mb_substr($article->text, 0, 300) . '...' ?></p>
<?php endforeach; ?>
</body>
</html>