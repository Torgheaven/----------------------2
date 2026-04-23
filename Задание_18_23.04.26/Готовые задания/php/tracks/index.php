<?php

include '/Tracks.php';
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
$content = $TracksArray;
?>

<!DOCTYPE html>
<html lang="ru">
<?php echo $head; ?>
<body>
    <?php echo $header; ?>

<h1>Треки</h1>
<?php foreach ($TracksArray as $track): ?>
    <div class="track">
        <p><strong>ID: <?php echo $track['id_track']; ?></strong> — <?php echo $track['name']; ?></p></strong> — <?php echo $track['note']; ?></p></strong> — <?php echo $track['id_album']; ?></p>
    </div>
    <hr>
<?php endforeach; ?>

    <?php echo $footer; ?>
</body>
</html>