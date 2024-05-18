<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница регистрации</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaini&family=Sedan+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="username">Иван | Программист</div>
            <div class="header__btns">
                <?php if (!isset($_SESSION['id'])) : ?>
                    <a href="/auth.php" class="btn" id="auth">Войти</a>
                <?php else : ?>
                    <form action="profile/logout.php">
                        <div class="btn" id="btn-exit">Выйти</div>
                    </form>
                <?php endif; ?>
                <a href="/registration.php" class="btn" id="auth">Зарегистрироваться</a>
            </div>
        </header>
        <div class="container">
            <div class="img-wrap">
                <img class="user-img" width="300px" src="/img/user.jpg" alt="Фото">
            </div>
            <div class="info">
                <div class="info__username"><span>И</span>ван</div>
                <div class="info__about">Scam</div>
                <div class="info__btns">
                    <?php if (!isset($_SESSION['id'])) : ?>
                        <a href="/profile/account.php" class="btn">Личный кабинет</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>