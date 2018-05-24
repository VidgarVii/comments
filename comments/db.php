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

$answer = $db->query('SELECT * FROM comments');
$result = $answer->FETCHALL(PDO::FETCH_ASSOC);

foreach( $result  as  $arry )
{
    echo $arry["name"]  .  "<br>";
    echo $arry["email"]  .  "<br>";
    echo $arry["category"]  .  "<br>";
    echo $arry["comment"]  .  "<br>";
}

$quest = $db->prepare("INSERT INTO category (name) VALUES (:name)");
$quest->bindParam(':name', $name);
$name = 'WW';
$quest->execute();
