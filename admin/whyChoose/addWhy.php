<?php
// Include config file
require_once "../../config/db.php";
 
// add
if($_POST){
    
    $title = $_POST['title'];
    $image = $_POST['image'];
    $content = $_POST['content'];
    
    $sql = "INSERT INTO why ( title,images,content) VALUES ('$title', '$image', '$content')";
    mysqli_query($connect, $sql);
};

$sql = "SELECT * FROM why";
$result = mysqli_query($connect, $sql);



?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Why Lists</h2>
                    </div>
                    <div class="serviceList">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Content</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    if ($result) {
                                        $numRow = mysqli_num_rows($result);
                                        
                                        if ($numRow > 0) {
                                            $i=0;
                                            while($rows = mysqli_fetch_array($result)){
                                                $i++;
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $i?></th>
                                                <td><?php echo $rows["title"]?></td>
                                                <td><?php echo $rows["images"]?></td>
                                                <td><?php echo $rows["content"]?></td>
                                                <td>
                                                    <a href="editWhy.php?id=<?php echo $rows["id"]?>"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="deleteWhy.php?id=<?php echo $rows["id"]?>"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                        } else {
                                            echo "No records matching your query were found.";
                                        }
                                        
                                    } else {
                                        echo "ERROR: Could not able to execute $sqlServices. " . mysqli_error($connect);
                                    }
                                    
                                ?>
                               
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8 border">
                    <div class="page-header">
                        <h2>Create Why</h2>
                    </div>
                    
                    <form action="addWhy.php" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" require value="">
                            
                        </div>
                        <div class="form-group">
                            <label>Imgae</label>
                            <input type="file" name="image" class="form-control-file form-control">
                            
                        </div>
                        
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" require value=""></textarea>
                            
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
                <div class="col-md-2">

                </div>
            </div>        
        </div>
    </div>
</body>
</html>