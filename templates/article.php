<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $article->title; ?>></title>
</head>
<body>
<a href="/php2/">На главную</a>
<h3><?php echo $article->title; ?></h3>
<p><?php echo $article->text; ?></p>
<p><?php echo $article->author; ?></p>
<p><?php echo $article->date; ?></p>
</body>
</html>
