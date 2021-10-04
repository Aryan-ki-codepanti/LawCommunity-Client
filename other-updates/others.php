<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>

<!-- hero -->
<?php
          $heading = "others";
          $subTitle = "An assortment of engaging legal topics at one place for you to gain knowledge and legal skills..";
          $btnTxt = "Other Interesting Stuff";
          $btnTextColor = "text-blue";

          $feaureTitle1 = "10,000+";
          $feaureTitle2 = "Creative";
          $feaureTitle3 = "Engaging ";
          $feaureTitle4 = "Easy";

          $featureSubtitle1 = "Daily Visits";
          $featureSubtitle2 = "Content";
          $featureSubtitle3 = "Topics";
          $featureSubtitle4 = "To Understand";

          $iconSrc1 = "../assets/images/icons/statsIncrease.svg";
          $iconSrc2 = "../assets/images/icons/organisation.svg";
          $iconSrc3 = "../assets/images/icons/community.svg";
          $iconSrc4 = "../assets/images/icons/categories.svg";

          $bg = "../assets/images/bg-blue.png";
          include('../components/70-hero.php');
      ?>

<?php

    $currentPage = "others";
    include('../components/knowledge-bank-sub-nav.php');
?>

<section class="overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img class="d-lg-none d-block" src="../assets/images/horizontal-banner.jpg" alt="" width="90%">
            </div>
            <div class="col-lg-10 col-sm-12 d-flex justify-content-center">
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start">

                <!-- Other/More populate here  -->

                <?php
                    // db
                    require_once "../admin/php/db.inc.php";

                    $table = "others";
                    $others = mysqli_query($conn , "SELECT * FROM `$table` ORDER BY id DESC;");
                    
                    $html = '';
                    foreach($others as $other){
                        $html = $html . '

                        <div class="d-flex mx-2 mt-6" style="width: 300px; height: 300px;">
                            <div style=" background: linear-gradient(0deg, rgba(255, 73, 82, 0.8), rgba(255, 73, 82, 0.8)),url(../assets/images/library/article/article.jpg); background-position: center; background-size: cover;width: 100%; height: 100%;" class="rounded-10">
                                <div class="d-flex px-2 align-items-center justify-content-center text-white" style="width: 100%; height: 100%;">
                                    <div class="text-center">
                                        <img class="mb-4" src="../assets/images/icons/stack.svg" alt="">
                                        <h5 class="fw-600 mb-4">'. $other["heading"] .'</h5>
                                        <p class="fw-normal fs-base mb-4">'. $other["subheading"] .'</p>
                                        <a href="../others/content.php?v='. $other["id"] .'" class="btn btn-white text-red rounded">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        ';
                    }
                    echo $html;
                
                ?>

                <!-- Other/More end here -->
                    
                </div>
            </div>
            <div class="col-lg-2 d-flex justify-content-center align-items-start">
                <img class="d-none d-lg-block mt-6" src="../assets/images/demo-add.jpg">
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img class="d-lg-none d-block mt-5" src="../assets/images/horizontal-banner.jpg" alt="" width="90%">
            </div>
        </div>
    </div>
</section>


<?php
    $collaborationHeading = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed";
    $collaborationBtn = "Post a Job";

    $collaborationImgsrc = "../assets/images/collaboration-3.png";

    include('../components/collaboration-white.php')
?>

<?php
    include('../includes/footer-inner-pages.php');
?>