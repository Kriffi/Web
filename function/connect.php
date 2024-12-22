<?php

    $connect = new mysqli("MySQL-8.2", "root", "", "db_demo_2024");

    if(!$connect){
        echo "Ошибка подключения к базе данных";
    }

?>