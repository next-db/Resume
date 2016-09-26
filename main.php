<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Resume, Denys, Barabash">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    <title><?=$title ?></title>
</head>
<body>
<header>This is header</header>
<main>
    <section class="menu">
        <a href="index.php?page=indexMain">Главная</a><br>
        <a href="index.php?page=CV">Резюме</a><br>
        <a href="index.php?page=pract">Практика</a><br>
        <a href="index.php?page=form">Форма обратной связи</a><br>
    </section>
    <section class="content">
        <?= $content; ?>
    </section>
</main>
<footer>This is footer</footer>
</body>
</html>