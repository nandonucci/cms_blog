<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'cms';

    $connection = mysqli_connect($host, $user, $pass, $db_name);

    if(!$connection){
        die('Não conectou');
    }


?>
