<?php
    if (!isset($_GET["v"])){
        header("location:../index.php");
        exit();
    }

    // db
    require_once "../admin/php/db.inc.php";
    $fetchId = $_GET["v"];
    $table = "article";
    $result = mysqli_query($conn , "SELECT * FROM `$table` WHERE article_id='$fetchId';");

    if (mysqli_num_rows($result) !== 1){
        header("location:../index.php");
        exit();
    }
    
    $row = mysqli_fetch_assoc($result);
    if ($row["article_status"] !== "accept"){
        header("location:../index.php");
        exit();
    }


    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');

?>

<!-- hero -->
<section class="py-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 text-white d-flex flex-column align-items-center justify-content-center">
                <h3 class="fw-600 text-white">
                    <?php echo $row["article_heading"]; ?>
                </h3>
                <br><br>
                <p class="fs-base fw-normal text-white">
                    <?php echo $row["article_subheading"]; ?>
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 position-relative mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
                <div style="width: 500px; height: 400px;">

                    <div class="rounded-10" style="background-image: url(../assets/images/articles/hero-main.png); background-position: center; background-size: cover; width: 80%; height: 80%; position: absolute;  top: 0; right: 20px;">
                    </div>
                    <div class="rounded-10" style="background-image: url(
                        <?php
                            if (empty(trim($row["article_image"]))){
                                echo "//unsplash.it/500/500";
                            }
                            else{
                               echo "../admin/img/article/".$row["article_image"]; 
                            }
                        ?>
                    ); background-position: center; background-repeat: no-repeat ; background-size: cover; width: 80%; height: 80%; position: absolute;  bottom: 0; left: 20px;">
                    </div>
                </div>
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
        <!-- Content -->
        <div class="col-lg-6 col-sm-12 p-5 text-white lead fs-8">
            <?php
                echo $row["article_content"];
            ?>
        </div>
        <!-- add right -->
        <div class="col-lg-3 d-flex justify-content-center align-items-center">
            <img class="d-none d-lg-block" src="../assets/images/demo-add.jpg">
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="d-lg-none d-block" src="../assets/images/horizontal-banner.jpg" alt="" width="90%">
        </div>
    </div>
</section>

<?php
    $collaborationHeading = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed";
    $collaborationBtn = "Post a Job";

    $collaborationImgsrc = "../assets/images/collaboration-1.png";

    include('../components/collaboration.php')
?>

<section class="pt-15">
    <div class="container">
            <h3 class="text-white text-center">Featured Articles</h3>
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