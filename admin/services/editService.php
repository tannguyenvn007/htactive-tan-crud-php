<?php
    require_once "../../config/db.php";
    if($_GET['id']){
        $id = $_GET['id'];
        $sql = "SELECT * FROM services WHERE id = {$id}" ;
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_array($result);
        if ($result) {
            
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        }  
    };
    if($_POST){
        $icon = $_POST['icon'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $id = $_POST['id'];
 
        $sql = "UPDATE services SET icon = '$icon', title = '$title', content = '$content' WHERE id = {$id}";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            header("location: addService.php");
            exit();
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 border">
                <div class="page-header">
                    <h2 class="text-center">Edit Service</h2>
                </div>
                <form action="editService.php" method="post">
                    <div class="form-group">
                        <label>Icon</label>
                        <input type="text" name="icon" class="form-control" require value="<?php echo $rows["icon"]?>">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control" require ><?php echo $rows["content"]?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" require value="<?php echo $rows["title"]?>">
                    </div>
                    <div class="pb-3">
                        <input type="hidden" name="id" value="<?php echo $rows["id"]?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-primary" value="Reset">
                    </div>
                </form>
                </div>
            <div class="col-md-2"></div>
        </div>      
    </div>
</body>
</html>