<?php

include '/albums.php';
?>
<head>
	<div class="content ins">
			<?php include "../inc/head.php"?>
		</div>
</head>

<body>
	<header>
		<div class="content ins">
			<?php include "../inc/header.php"?>
		</div>
	</header>

	<div class="main">
		<div class="content ins">
			<?php include "../inc/content.php"?>
		</div>
	</div>

	<footer>
		<div class="content ins">
			<?php include "../inc/footer.php"?>
		</div>
	</footer>
<?php
$content = $albumsArray;
?>

<!DOCTYPE html>
<html lang="ru">
<?php echo $head; ?>
<body>
    <?php echo $header; ?>

    <h1>Альбомы</h1>
<?php foreach ($albumsArray as $album): ?>
    <div class="card">
        <h3><?php echo $album['id_album']; ?></h3>
        <p>Название: <?php echo $album['name']; ?></p>
        <p>Псевдоним: <?php echo $album['alias']; ?></p>
        <p>Страна: <?php echo $album['country']; ?></p>
        <p>Страна: <?php echo $album['content']; ?></p>
        <p>Год: <?php echo $album['date']; ?></p>
        <p><?php echo $album['path']; ?></p>
        <p><?php echo $album['note']; ?></p>
        <p><?php echo $album['id_team']; ?></p>
    </div>
    <hr>
<?php endforeach; ?>

    <?php echo $footer; ?>
</body>
</html>