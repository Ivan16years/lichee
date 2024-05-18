<?php
include("./application/users.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизации</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaini&family=Sedan+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <form class="form" action="auth.php" method="POST">
            <div class="form__content">
                <h3 class="form__title">Authorization</h3>
                <div class="form__row">
                    <input type="email" class="form__input" id="email" name="email" placeholder="your email">
                </div>
                <div class="form__row">
                    <input type="password" class="form__input" id="password" name="password" placeholder="your password">
                </div>
                <div>
                    <input type="checkbox" id="men" name="men" />
                    <label for="men">Men</label>
                </div>
                <input type="checkbox" id="women" name="women" />
                <label for="women">Women</label>
            </div>
            <div class="form__row">
                <button name="button-log" type="submit" class="btn">Sing in</button>
            </div>
    </div>
    </form>
    </div>
</body>

</html>