<section class="why-choose mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">WHY CHOOSE HT ACTIVE</h1>
                <div class="line"></div>
                <p class="text-center pb-5">HT Active offers a great service in the design, development and programming of your website/application. We strive to offer the best solution for your business and impartial advice at an honest price. We are constantly investigating new technologies and recommend them when they make sense.</p>
                <div class="tabs tabs-bg">
                    <div class="row">
                        <div class="col-3 tabs-item">
                            <div class="nav nav-cus flex-column nav-pills nav-pills-cus" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php
                                $sql = "SELECT * FROM why";
                                $result = mysqli_query($connect, $sql);
                                if ($result) {
                                    $numRow = mysqli_num_rows($result);
                                    if ($numRow > 0) {
                                        $i = -1;
                                        while($rows = mysqli_fetch_array($result)){
                                            $i++;
                                            ?>
                                            <a class="nav-link nav-link-cus text-uppercase <?php if( $i == 0){ echo "active";}else{ echo "";}?> " 
                                                id="v-pills-home-tab<?php echo $i?>" 
                                                data-toggle="pill" 
                                                href="#v-pills-home<?php echo $i?>" 
                                                role="tab" aria-controls="v-pills-home" 
                                                aria-selected="true">
                                                    <?php echo $rows["title"]?>
                                            </a>
                                            <?php
                                        }
                                    }
                                    
                                } else {
                                    echo "ERROR: Could not able to execute $sqlServices. " . mysqli_error($connect);
                                }
                            ?>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                            <?php
                                $sql = "SELECT * FROM why";
                                $result = mysqli_query($connect, $sql);
                                if ($result) {
                                    $numRow = mysqli_num_rows($result);
                                    if ($numRow > 0) {
                                        $i = -1;
                                        while($rows = mysqli_fetch_array($result)){
                                            $i++;
                                            ?>
                    
                                            <div class="tab-pane fade  <?php if( $i == 0){ echo "show active";}else{ echo "";}?> " id="v-pills-home<?php echo $i?>" role="tabpanel" aria-labelledby="v-pills-home-tab<?php echo $i?>">
                                                <h1 class="text-center text-uppercase"><?php echo $rows["title"]?></h1>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p><?php echo $rows["content"]?></p>
                                                        <img class="img-why-choose" src="<?php echo $rows["images"]?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    
                                } else {
                                    echo "ERROR: Could not able to execute $sqlServices. " . mysqli_error($connect);
                                }
                            ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>