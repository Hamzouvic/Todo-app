<?php

require '../db_connect.php';

if(isset($_POST['id'])){
    print_r($_POST["id"]);
    $stmn = $conn->prepare("delete from notes where id = :id");
    $stmn->bindParam(':id',$_POST["id"]);
    $stmn->execute();
}
