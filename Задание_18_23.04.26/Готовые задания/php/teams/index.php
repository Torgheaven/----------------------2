<?php

include '/Teams.php';
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
$content = $TeamsArray;
?>

<!DOCTYPE html>
<html lang="ru">
<?php echo $head; ?>
<body>
    <?php echo $header; ?>

    <h1>Группы</h1>
<?php foreach ($TeamsArray as $team): ?>
    <div class="card">
        <h3><?php echo $team['id_team']; ?></h3>
        <p>Название: <?php echo $team['name']; ?></p>
        <p>Псевдоним: <?php echo $team['alies']; ?></p>
        <p>Страна: <?php echo $team['country']; ?></p>
        <p><?php echo $team['content']; ?></p>
        <p>Год: <?php echo $team['date']; ?></p>
        <p>Стиль: <?php echo $team['style']; ?></p>
        <p><?php echo $team['path']; ?></p>
        <p><?php echo $team['note']; ?></p>
    </div>
    <hr>
<?php endforeach; ?>

    <?php echo $footer; ?>
</body>
</html>