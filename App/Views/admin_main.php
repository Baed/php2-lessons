<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
foreach ($objects as $news)
{
?>
<p><?php echo $news->title; ?>&nbsp;
<a href="admin.php?op=edit&id=<?php echo $news->id; ?>">Редактировать</a>&nbsp;
<a href="admin.php?op=delete&id=<?php echo $news->id; ?>">Удалить</a></p>
<?php
};
?>
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