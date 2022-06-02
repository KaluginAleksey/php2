<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование</title>
</head>
<body>
<form action="/php2/Controllers/updateArticle.php?id=<?php echo $article->id; ?>" method="post">
    <input type="text" name="title" size="200" value="<?php echo $article->title; ?>"><br>
    <textarea name="text" cols="193" rows="50"><?php echo $article->text; ?></textarea><br>
    <input type="text" name="author" size="50" value="<?php echo $article->author; ?>"><br>
    <input type="date" name="date" value="<?php echo $article->date; ?>">
    <input type="submit" value="Отправить">
</form>
</body>
</html>
