<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
</head>
<body>
<?php
foreach ($articles as $article) : ?>
<p><?php echo $article->title; ?>&nbsp;
<a href="admin.php?op=edit&id=<?php echo $article->id; ?>">Редактировать</a>&nbsp;
<a href="admin.php?op=delete&id=<?php echo $article->id; ?>">Удалить</a></p>
<? endforeach; ?>
<h1>Создать новость</h1>
<form action="admin.php" method="post">
    <input type="hidden" name="op" value="add" />
    <p>Название <input type="text" name="title" /></p>
    <p>Вступление<textarea name="intro_text"></textarea></p>
    <p>Продолжение<textarea name="full_text"></textarea></p>
    <p><input type="submit" value="Отправить" /> </p>
</form>
</body>
</html>