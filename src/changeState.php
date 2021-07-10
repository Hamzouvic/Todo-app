<?php
require '../db_connect.php';

if(isset($_POST["id"])){
    print_r($_POST["id"]);
    $stmn = $conn->prepare("UPDATE notes SET checked = 1 WHERE notes.id = :id");
    $stmn->bindParam(':id',$_POST["id"]);
    $stmn->execute();
}

if(isset($_POST["id2"])){
    print_r($_POST["id2"]);
    $stmn = $conn->prepare("UPDATE notes SET checked = 0 WHERE notes.id = :id");
    $stmn->bindParam(':id',$_POST["id2"]);
    $stmn->execute();
}