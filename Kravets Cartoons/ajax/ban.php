<?php 

$name = $_POST['name'];

    $msg = 'Готово';

    $user = 'root';
    $pdo = new PDO('mysql:host=localhost;dbname=anime;port=3306',$user);

    $sql = 'DELETE FROM `users` WHERE `name`= :name';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $name]);

    echo $msg;
    
?>