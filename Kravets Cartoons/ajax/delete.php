<?php 

$title = $_POST['title'];

    $msg = 'Готово';

    $user = 'root';
    $pdo = new PDO('mysql:host=localhost;dbname=anime;port=3306',$user);

    $sql = 'DELETE FROM `animeitem` WHERE `title`= :title';
    $query = $pdo->prepare($sql);
    $query->execute(['title' => $title]);

    echo $msg;
    
?>  