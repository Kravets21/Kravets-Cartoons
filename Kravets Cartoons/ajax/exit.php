<<?php 
unset($_COOKIE['name']);
setcookie('name', null, -1, '/');
echo true;
?>