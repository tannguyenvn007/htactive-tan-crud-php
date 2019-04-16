<?php
    require_once "../../config/db.php";
    if($_GET['id']){
        $id = $_GET['id'];
        $sql = "SELECT * FROM why WHERE id = {$id}" ;
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_array($result);
        if ($result) {
            
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        }  
    };
    if($_POST){
        $title = $_POST['title'];
        $image = $_POST['image'];
        $content = $_POST['content'];
        $id = $_POST['id'];
 
        $sql = "UPDATE why SET title = '$title', images = '$image', content = '$content' WHERE id = {$id}";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            header("location: addWhy.php");
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
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="page-header">
                        <h2>Edit Why</h2>
                    </div>
                    
                    <form action="editWhy.php" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" require value="<?php echo $rows["title"]?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control-file form-control" value="<?php echo $rows["image"]?>">
                            
                        </div>
                        
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" require><?php echo $rows["content"]?></textarea>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $rows["id"]?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>