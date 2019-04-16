<?php
    require_once "../../config/db.php";
    if($_GET['id']){
        $id = $_GET['id'];
        
        $sql = "DELETE FROM about WHERE id = {$id}" ;
        $result = mysqli_query($connect, $sql);
        if ($result) {
            header("location: addAbout.php");
            exit();
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        }  
    };
?>