<?php
    require_once "../../config/db.php";
    if($_GET['id']){
        $id = $_GET['id'];
        
        $sql = "DELETE FROM services WHERE id = {$id}" ;
        $result = mysqli_query($connect, $sql);
        if ($result) {
            header("location: addService.php");
            exit();
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        }  
    };
?>