<?php
session_start();
include("application/db.php");

// Функция для установки значение в сессию
function setSession($id, $us_name, $age)
{
    $_SESSION['id'] = $id;
    $_SESSION['us_name'] = $us_name;
}

// Авторизация пользователя
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['button-log'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "логин " . $email;
    echo '<br>';
    echo "пароль " . $password;
    echo '<br>';
    echo $_POST;
}
