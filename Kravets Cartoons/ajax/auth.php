<?php 

    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

    $error = '';
    $success = 'done';
    
    if (strlen($name) <=3)
    {   
        $error="Укажите правильный name!";
    }
    else if (strlen($password) <=3)
    {
        $error="Укажите правильный пароль!";
    }
    
    if($error!='')
    {
        echo $error;
        exit();
    }
    
        $user = 'root';
        
        $pdo = new PDO('mysql:host=localhost;dbname=anime;port=3306',$user);

    $sql = 'SELECT `id` FROM `users` WHERE `name` = :name && `password` = :password';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $name, 'password' => $password]);

    $users = $query->fetch(PDO::FETCH_OBJ);
    if ($users->id == 0)
    {
        echo 'Таких пользователей не существует!';
    }
    else{
        setcookie('name', $name, time() + 3600*24, "/");
        echo $success;
    }

    
?>  