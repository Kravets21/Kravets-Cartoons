<?php 

$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
strip_tags($name);
strip_tags($password);

    $error = '';
    $msg = 'Вы успешно зарегестрировались!';

    if (strlen($name) <=3)
    {   
        $error="Укажите правильный name!";
    }
    else if (strlen($password) <=3)
    {
        $error="Укажите правильный пароль!";
    }
    
    if($error!=''){
        echo $error;
        exit();
    }
 
    $pdo = new PDO('mysql:host=localhost;dbname=anime;port=3306','root');
    

    $sql = 'INSERT INTO users(name,password) VALUES(?,?)';
    $query = $pdo->prepare($sql);
    $query->execute([$name,$password]);

    echo $msg;
    
?>  