<?php

    $host = "localhost";
    $db_name = "myTodoApp";
    $uName = "root";
    $pass = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $uName, $pass);
    } catch (PDOException $e) {
        echo "connection failed ".$e->getMessage();
    }
