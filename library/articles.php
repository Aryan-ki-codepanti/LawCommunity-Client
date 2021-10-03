<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>

<!-- hero -->
<?php
          $heading = "Article";
          $subTitle = "An Index of articles about the law with an interesting take by our enthusiastic writers.";
          $btnTxt = "Read an Article";
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

    $currentPage = "article";
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

                <!-- Card Start -->

                <?php
                    // db
                    require_once "../admin/php/db.inc.php";

                    $table = "article";
                    $articles = mysqli_query($conn , "SELECT * FROM `$table` ORDER BY article_id DESC;");
                    
                    $html = '';
                    foreach($articles as $article){
                        $html = $html . '

                        <div class="d-flex">
                            <div class="bg-white rounded-10 mt-6 mx-2" style="width: 300px; height: 400px; position: relative;">
                                <div class="rounded-10 mx-auto mt-2"
                                    style="background-image: url(../admin/img/article/'. $article["article_image"] .'); background-position: center; background-size: cover; width: 90%; height: 45%; filter: drop-shadow(0px 4px 100px rgba(0, 0, 0, 0.2)); ">
                                </div>
                                <div class="p-2">
                                    <p class="lead text-orange fw-bolder">'. $article["article_heading"] .'</p>
                                    <p class="lead text-dark fw-bolder fs-base"> '. $article["article_subheading"] .' </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-100 p-2"
                                    style="position: absolute; bottom: 0;">
                                    <p class="lead text-dark fs-sm fw-normal pb-0 mb-0">Established On: '. date("jS F", strtotime($article["date_posted"])) .'</p>
                                    <i class="bi bi-arrow-right" style="color: #FF4952;"></i>
                                </div>
                            </div>
                        </div>

                        ';
                    }
                    echo $html;
                
                ?>
                <!-- Card End -->
                    
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

    $collaborationImgsrc = "../assets/images/collaboration-2.png";

    include('../components/collaboration.php')
?>

<?php
    include('../includes/footer-inner-pages.php');
?>