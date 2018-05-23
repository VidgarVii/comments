<?php
$host = 'localhost';
$database = 'comments_cetera'; 
$user = 'root'; 
$password = ''; 

// подключаемся к базе MySQL

$link = mysqli_connect($host, $user, $password, $database);
    

if (!$link) {
    die("Ошибка " .mysqli_error($link));
}


//закрываем соединение
mysqli_close($link);
?>