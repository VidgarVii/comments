<?php
include 'db.php';


$error_mail='';
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['category']) && !empty($_POST['comment'])) {

    $name=trim(strip_tags($_POST['name']));
    $email=trim(strip_tags($_POST['email']));
    $category=trim(strip_tags($_POST['category']));
    $comment=trim(strip_tags($_POST['comment']));
    
    
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    
    $quest = $db->prepare("INSERT INTO comments (name, email, category, comment) VALUES (:name, :email, :category, :comment)");
    
    $quest->bindParam(':name', $name);
    $quest->bindParam(':email', $email);
    $quest->bindParam(':category', $category);
    $quest->bindParam(':comment', $comment);
    
    
    $quest->execute();
    
    header('Location:http://localhost/comments');

}else {
    $error_mail = 'Введите e-mail корректно';
}}
?>