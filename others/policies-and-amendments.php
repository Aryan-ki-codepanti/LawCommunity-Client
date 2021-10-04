<?php

    if (!isset($_GET["v"])){
        header("location:../index.php");
        exit();
    }

    // db
    require_once "../admin/php/db.inc.php";
    $fetchId = $_GET["v"];
    $table = "policies_amendments";
    $result = mysqli_query($conn , "SELECT * FROM `$table` WHERE id='$fetchId';");

    if (mysqli_num_rows($result) !== 1){
        header("location:../index.php");
        exit();
    }

    $row = mysqli_fetch_assoc($result);
    // no status
    // if ($row["article_status"] !== "accept"){
    //     header("location:../index.php");
    //     exit();
    // }

    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>

<!-- hero -->
<section class="pt-20 pb-10">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 text-cyan d-flex flex-column align-items-center justify-content-center">
                <h3 class="fw-600 text-orange">
                    <?php echo $row["heading"]; ?> 
                </h3>
                <br><br>
            </div>
        </div>
    </div>
</section>


<section class="overflow-hidden">
    <!-- add left -->
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="d-lg-none d-block" src="../assets/images/horizontal-banner.jpg" alt="" width="90%">
        </div>
        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
            <img class="d-none d-lg-block " src="../assets/images/demo-add.jpg">
        </div>
        <!-- text area -->
        <div class="col-lg-6 col-sm-12 p-5 text-white lead fs-8">
            
            <?php echo $row["content"]; ?>
        
            <!-- add right -->
        </div>
        <div class="col-lg-3 d-flex justify-content-center align-items-center">
            <img class="d-none d-lg-block" src="../assets/images/demo-add.jpg">
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="d-lg-none d-block" src="../assets/images/horizontal-banner.jpg" alt="" width="90%">
        </div>
    </div>
</section>


<section class="pt-15">
    <div class="container">
            <h3 class="text-white text-center">Your might also like</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="d-flex">
                        <div class="bg-white rounded-10 mt-6 mx-2" style="width: 300px; height: 400px; position: relative;">
                            <div class="rounded-10 mx-auto mt-2"
                                style="background-image: url(../assets/images/library/article/article.jpg); background-position: center; background-size: cover; width: 90%; height: 45%; filter: drop-shadow(0px 4px 100px rgba(0, 0, 0, 0.2)); ">
                            </div>
                            <div class="p-2">
                                <p class="lead text-orange fw-bolder">Design</p>
                                <p class="lead text-dark fw-bolder fs-base">Lorem ipsum dolor sit amet, consecte tur
                                    adipiscing elit, sed </p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100 p-2"
                                style="position: absolute; bottom: 0;">
                                <p class="lead text-dark fs-sm fw-normal pb-0 mb-0">Established On: 2nd September</p>
                                <i class="bi bi-arrow-right" style="color: #FF4952;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="d-flex">
                        <div class="bg-white rounded-10 mt-6 mx-2" style="width: 300px; height: 400px; position: relative;">
                            <div class="rounded-10 mx-auto mt-2"
                                style="background-image: url(../assets/images/library/article/article.jpg); background-position: center; background-size: cover; width: 90%; height: 45%; filter: drop-shadow(0px 4px 100px rgba(0, 0, 0, 0.2)); ">
                            </div>
                            <div class="p-2">
                                <p class="lead text-orange fw-bolder">Design</p>
                                <p class="lead text-dark fw-bolder fs-base">Lorem ipsum dolor sit amet, consecte tur
                                    adipiscing elit, sed </p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100 p-2"
                                style="position: absolute; bottom: 0;">
                                <p class="lead text-dark fs-sm fw-normal pb-0 mb-0">Established On: 2nd September</p>
                                <i class="bi bi-arrow-right" style="color: #FF4952;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="d-flex">
                        <div class="bg-white rounded-10 mt-6 mx-2" style="width: 300px; height: 400px; position: relative;">
                            <div class="rounded-10 mx-auto mt-2"
                                style="background-image: url(../assets/images/library/article/article.jpg); background-position: center; background-size: cover; width: 90%; height: 45%; filter: drop-shadow(0px 4px 100px rgba(0, 0, 0, 0.2)); ">
                            </div>
                            <div class="p-2">
                                <p class="lead text-orange fw-bolder">Design</p>
                                <p class="lead text-dark fw-bolder fs-base">Lorem ipsum dolor sit amet, consecte tur
                                    adipiscing elit, sed </p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100 p-2"
                                style="position: absolute; bottom: 0;">
                                <p class="lead text-dark fs-sm fw-normal pb-0 mb-0">Established On: 2nd September</p>
                                <i class="bi bi-arrow-right" style="color: #FF4952;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-center mt-6">
                <a href="../library/articles.php" class="btn btn-orange rounded text-white">View More</a>
            </div>
        </div>

    </div>
</section>

<?php
    include('../includes/footer-inner-pages.php');
?>