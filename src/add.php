<?php 
    require '../db_connect.php';
    if(isset($_GET['add'])){
        if(empty($_GET['note'])){
            header('Location: /index.php');        
        }else{
            $query = $conn->prepare("INSERT INTO notes(title) values (?)");
            $res = $query->execute([$_GET['note']]);
            if($res == 1){
                header('Location: ../');
            }else{
                echo "error";
            }
        }
    }
?>