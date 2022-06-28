<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php /** @var \App\Article $article */ ?>
    <?php $article = $this->article; ?>
    <title><?php echo $article->title; ?></title>
</head>
<body>
<a href="/php2/">На главную</a>
<h3><?php echo $article->title; ?></h3>
<p><?php echo $article->text; ?></p>
<?php if (isset($article->author->name)): ?>
    <p><?php echo $article->author->name; ?></p>
<?php endif; ?>
<p><?php echo $article->date; ?></p>
<footer>
    Потребление ресурсов <?php echo $this->resource; ?>
</footer>
</body>
</html>
