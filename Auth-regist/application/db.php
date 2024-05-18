<?php
$host = "localhost"; // хост БД
$username = "root"; // имя пользователя БД
$password = ""; // пароль пользователя БД
$database = "Blog"; // Имя БД

// Устанавливаем соединение с БД:
$conn = new mysqli($host, $username, $password, $database);

// Проверим подключение к БД

if ($conn->connect_error) {
    die("Ошибка подключени к БД" . $conn->connect_error);
}
