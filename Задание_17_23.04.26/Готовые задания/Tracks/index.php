<?php
include '../data/Tracks.php';

$head = <<<head
<head>
    <meta charset="utf-8">
    <title>Треки - Музыкальный сервис</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
head;

$header = <<<header
<header>
    <div class="content">
        <div class="logo">
            <img src="../assets/logo.png" alt="logo">
            <a href="/">
                <h3>Музыкальный сервис</h3>
            </a>
        </div>
        <nav>
            <a href="/teams">Группы</a> |
            <a href="/albums">Альбомы</a> |
            <a href="/tracks">Треки</a> |
            <a href="/admin">Консоль</a>
        </nav>
    </div>
</header>
header;

$footer = <<<footer
<footer>
    <div class="content">
        <div class="block">
            <div class="logo">
                <img src="../assets/logo.png" alt="logo">
                <h2>Музыкальный сервис</h2>
            </div>
        </div>

        <div class="block">
            <div class="head">КОМПАНИЯ</div>
            <div class="links">
                <p><a href="/about">О нас</a></p>
                <p><a href="/contacts">Контакты</a></p>
            </div>
        </div>
        <div class="block">
            <div class="head">ПОЛЕЗНЫЕ ССЫЛКИ</div>
            <div class="links">
                <p><a href="https://www.spotify.com/ru-ru/" target="_blank">Spotify</a></p>
                <p><a href="https://support.spotify.com/ru-ru/" target="_blank">Справка</a></p>
            </div>
        </div>
    </div>
</footer>
footer;

$content = $tracksArray;
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