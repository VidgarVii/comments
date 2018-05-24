<?php

$config = require_once 'config.php';
$dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];

try {
    
   $db = new PDO($dsn, $config['username'], $config['psw']);
}
catch(  PDOException $e  ) {
    
    echo "Фигня какая-то: ".$e->getMessage()."<br>";
    echo "Тут: ".$e->getLine();
}


//Получаем запись из БД
//Коменты    
$answer = $db->query('SELECT * FROM comments');
$res_comment = $answer->FETCHALL(PDO::FETCH_ASSOC);

//Категории
$category = $db->query('SELECT * FROM category');
$res_categ = $category->FETCHALL(PDO::FETCH_ASSOC);


//Добавляем запись в БД
$quest = $db->prepare("INSERT INTO category (name) VALUES (:name)");
$quest->bindParam(':name', $name);
$name = 'WW';

//$quest->execute();
