<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Resume, Denys, Barabash">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    <title><?=$title ?></title>
</head>
<body>
<header>Это Шапка Сайта!</header>
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
<footer>Это Подвал!</footer>
</body>
</html>