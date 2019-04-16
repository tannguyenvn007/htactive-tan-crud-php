<?php
// Include config file
require_once "../../config/db.php";
 
// add
if($_POST){
    $icon = $_POST['icon'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $sql = "INSERT INTO about (icon, title, content) VALUES ('$icon', '$title', '$content')";
    mysqli_query($connect, $sql);
};

$sql = "SELECT * FROM about";
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="text-center">About Lists</h2>
                    </div>
                    <div class="serviceList">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Title</th>
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
                                                <td><?php echo $rows["icon"]?></td>
                                                <td><?php echo $rows["title"]?></td>
                                                <td><?php echo $rows["content"]?></td>
                                                <td>
                                                    <a href="editAbout.php?id=<?php echo $rows["id"]?>"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="deleteAbout.php?id=<?php echo $rows["id"]?>"><i class="fas fa-trash-alt"></i></a>
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
                        <h2 class="text-center">Create About</h2>
                    </div>
                    
                    <form action="addAbout.php" method="post">
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="text" name="icon" class="form-control" require value="">
                            
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" require value=""></textarea>
                            
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" require value="">
                            
                        </div>
                        <div class="pb-3">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-primary" value="Reset">
                        </div>
                        
                    </form>
                </div>
                <div class="col-md-2">

                </div>
            </div>            
        </div>
    </div>
</body>
</html>