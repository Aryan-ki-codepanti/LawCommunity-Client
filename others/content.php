<?php

    if (!isset($_GET["v"])){
        header("location:../index.php");
        exit();
    }

    // db
    require_once "../admin/php/db.inc.php";
    $fetchId = $_GET["v"];
    $table = "others";
    $result = mysqli_query($conn , "SELECT * FROM `$table` WHERE id='$fetchId';");

    if (mysqli_num_rows($result) !== 1){
        header("location:../index.php");
        exit();
    }
    
    $row = mysqli_fetch_assoc($result);

    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>

<!-- hero -->
<section class="pt-20 pb-10">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 text-cyan d-flex flex-column align-items-center justify-content-center">
                <h3 class="fw-600 text-orange">
                    <?php echo $row["heading"] ; ?>
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
            <p>
                <?php echo $row["subheading"]; ?>
            </p>
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
        <div class="col-12 d-flex justify-content-center">
        <div class="d-flex flex-wrap justify-content-center justify-content-lg-start text-white">
            <div class="d-flex mx-2 mt-6" style="width: 300px; height: 300px;">
                <div style=" background: linear-gradient(0deg, rgba(255, 73, 82, 0.8), rgba(255, 73, 82, 0.8)),url(../assets/images/library/article/article.jpg); background-position: center; background-size: cover;width: 100%; height: 100%;"
                    class="rounded-10">
                    <div class="d-flex px-2 align-items-center justify-content-center text-white"
                        style="width: 100%; height: 100%;">
                        <div class="text-center">
                            <img class="mb-4" src="../assets/images/icons/stack.svg" alt="">
                            <h5 class="fw-600 mb-4">This is a heading text for demo</h5>
                            <p class="fw-normal fs-base mb-4">Music Search</p>
                            <a href="" class="btn btn-white text-red rounded">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mx-2 mt-6" style="width: 300px; height: 300px;">
                <div style=" background: linear-gradient(0deg, rgba(255, 73, 82, 0.8), rgba(255, 73, 82, 0.8)),url(../assets/images/library/article/article.jpg); background-position: center; background-size: cover;width: 100%; height: 100%;"
                    class="rounded-10">
                    <div class="d-flex px-2 align-items-center justify-content-center text-white"
                        style="width: 100%; height: 100%;">
                        <div class="text-center">
                            <img class="mb-4" src="../assets/images/icons/stack.svg" alt="">
                            <h5 class="fw-600 mb-4">This is a heading text for demo</h5>
                            <p class="fw-normal fs-base mb-4">Music Search</p>
                            <a href="" class="btn btn-white text-red rounded">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mx-2 mt-6" style="width: 300px; height: 300px;">
                <div style=" background: linear-gradient(0deg, rgba(255, 73, 82, 0.8), rgba(255, 73, 82, 0.8)),url(../assets/images/library/article/article.jpg); background-position: center; background-size: cover;width: 100%; height: 100%;"
                    class="rounded-10">
                    <div class="d-flex px-2 align-items-center justify-content-center text-white"
                        style="width: 100%; height: 100%;">
                        <div class="text-center">
                            <img class="mb-4" src="../assets/images/icons/stack.svg" alt="">
                            <h5 class="fw-600 mb-4">This is a heading text for demo</h5>
                            <p class="fw-normal fs-base mb-4">Music Search</p>
                            <a href="" class="btn btn-white text-red rounded">View Details</a>
                        </div>
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