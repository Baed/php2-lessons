<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php echo $charset; ?>">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Новости</h1>

<?php foreach ($articles as $article) : ?>

<div class="panel panel-default">
    <div class="panel-heading">
    	<?php echo $article->title; ?>
    	<p style="text-decoration: underline; font-size: small">Опубликовал <?php echo $article->author->name; ?> в <?php echo $article->created_at; ?></p>
    </div>
    <div class="panel-body">
    	<p><?php echo $article->intro_text; ?></p>
		<p style="text-align: right"><a href="/News/One/?id=<?php echo $article->id; ?>">Читать далее...</a></p>
    </div>
</div>

<?php endforeach; ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
