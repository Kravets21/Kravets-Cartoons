<!DOCTYPE html>     <!-- Точка вхождения сайта(шаблон). В файле .htaccess сделали перенаправление в этот файл ВСЕГДА  --> 
<html lang="ru">

<head>
    <?php require_once 'blocks/head.php'; ?>    <!-- все подключения из тега head  --> 
</head>

<body>

    <?php require_once 'blocks/header.php'; ?> <!-- шапка сайта --> 
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $current_page = explode('?', $_SERVER['REQUEST_URI']);  // считываем адресс такущей странички, чтобы понять какой контент на ней должен быть
    $current_page = $current_page[0]; 
    $current_page = substr($current_page, strrpos($current_page, '/' )+1);  // после вхождения символа "/" последняя строка
    require_once 'blocks/'.$current_page; // контент сайта
    ?>
    <?php require_once 'blocks/footer.php'; ?>  <!-- подвал сайта  --> 

<div class="to-top" id="back2Top" ><span>Наверх</span></div>
                   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/slick.js"></script>
<script src="./js/script.js"></script>
<script src="./js/admin.js"></script>
<script src="./js/reg.js"></script>

</body>

</html>