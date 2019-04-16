<section class="service pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="">SERVICE</h1>
                <div class="line"></div>
                <p class="lead lead-cus">By using our services, you will get all of the great experience.</p>
                <div class="row">
                    <?php
                        $sqlServices = "SELECT * FROM services";
                        $resultServices = mysqli_query($connect, $sqlServices);
                        if ($resultServices) {
                            $numRow = mysqli_num_rows($resultServices);
                            if ($numRow > 0) {
                                while($rows = mysqli_fetch_array($resultServices)){
                                ?>
                                <div class="col-4">
                                    <div class="box-service">
                                        <i class="<?php echo $rows["icon"]?>"></i>
                                        <h2 class="pt-4"><?php echo $rows["title"]?></h2>
                                        <p class="pt-3"><?php echo $rows["content"]?></p>
                                        <a class="btn btn-danger  btn-cus" href="">READ MORE</a>
                                    </div>
                                </div>
                                <?php
                                }
                            } else {
                                echo "No records matching your query were found.";
                            }
                            
                        } else {
                            echo "ERROR: Could not able to execute $sqlServices. " . mysqli_error($connect);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>