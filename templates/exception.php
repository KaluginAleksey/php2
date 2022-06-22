<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/php2/">На главную</a>
<h3>Возникла исключительная ситуация:</h3>
<p>Сообщение ошибки: <?php echo $this->exp->getmessage(); ?></p>
<p>Код ошибки: <?php echo $this->exp->getcode(); ?></p>

</body>
</html>