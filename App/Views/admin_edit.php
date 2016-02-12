<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
</head>
<body>
<h1>Создать новость</h1>
<form action="/admin/" method="post">
    <input type="hidden" name="action" value="Save" />
    <input type="hidden" name="id" value="<?php echo $article->id; ?>" />
    <p>Название <input type="text" name="title" value="<?php echo $article->title; ?>" /></p>
    <p>Вступление<textarea name="intro_text"><?php echo $article->intro_text; ?></textarea></p>
    <p>Продолжение<textarea name="full_text"><?php echo $article->full_text; ?></textarea></p>
    <p><input type="submit" value="Отправить" /> </p>
</form>

</body>
</html>