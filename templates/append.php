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
<form action="/php2/App/Controllers/appendArticle.php" method="post">
    <input type="text" name="title" size="200"><br>
    <textarea name="text" cols="193" rows="50"></textarea><br>
    <input type="date" name="date">
    <input type="submit" value="Отправить">
</form>
</body>
</html>
