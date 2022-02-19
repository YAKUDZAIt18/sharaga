<?php
$dbhost = "localhost";
$dbname = "db";
$dbuser = "root";
$dbpassword = "";

// Подключение к БД

$link = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

// проверяем наличие подключения

if ($link -> connect_errno)
{
    echo "Ошибка при подключении к БД: $link->connect_error";
}
?>
