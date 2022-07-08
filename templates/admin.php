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
<a href="/php2/">На главную</a>
<?php ///** @var \App\Article $news */ ?>
<?php //foreach ($news as $article): ?>
<!--    <a href="/php2/article.php?id=--><?php //echo $article->id; ?><!--">-->
<!--        <h3>--><?php //echo $article->title; ?><!--</h3>-->
<!--    </a>-->
<!--    <p>--><?php //echo mb_substr($article->text, 0, 300) . '...' ?><!--</p>-->
<!--    <a href="/php2/Controllers/change.php?id=--><?php //echo $article->id; ?><!--">Изменить</a>-->
<!--    <a href="/php2/App/Controllers/delete.php?id=--><?php //echo $article->id; ?><!--">Удалить</a>-->
<?php //endforeach; ?>

<table border="1">
    <?php foreach ($this->models as $model): ?>
        <tr>
            <?php foreach ($this->functions as $function): ?>
                <td>
                    <?php echo $function($model); ?>
                </td>

            <?php endforeach; ?>
            <td>
                <a href="/php2/App/Controllers/change.php?id=<?php echo $model->id; ?>">Изменить</a>
            </td>
            <td>
                <a href="/php2/App/Controllers/delete.php?id=<?php echo $model->id; ?>">Удалить</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="/php2/templates/append.php">Добавить новую статью</a>
</body>
</html>