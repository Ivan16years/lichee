<?php
session_start();
// Очистить все данные в сессии
session_unset();
// Уничтожении сессии
session_destroy();
// Переход на главную страницу
header("Location: /index.php");
exit;
