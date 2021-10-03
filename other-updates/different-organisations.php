<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>

<!-- hero -->
<?php
          $heading = "statutory organization";
          $subTitle = "A list of important statutory organizations established under different acts at one place for you to read.";
          $btnTxt = "Read about Organizations";
          $btnTextColor = "text-blue";

          $feaureTitle1 = "10,000+";
          $feaureTitle2 = "Legal";
          $feaureTitle3 = "Personal ";
          $feaureTitle4 = "Easy";

          $featureSubtitle1 = "Daily Visits";
          $featureSubtitle2 = "Knowledge";
          $featureSubtitle3 = "Growth";
          $featureSubtitle4 = "Process";

          $iconSrc1 = "../assets/images/icons/statsIncrease.svg";
          $iconSrc2 = "../assets/images/icons/organisation.svg";
          $iconSrc3 = "../assets/images/icons/community.svg";
          $iconSrc4 = "../assets/images/icons/categories.svg";

          $bg = "../assets/images/bg-blue.png";
          include('../components/70-hero.php');
      ?>

<?php

    $currentPage = "organization";
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

                    <!-- Diff orgs populate here -->

                    <?php
                        // db
                        require_once "../admin/php/db.inc.php";

                        $table = "different_organisations";
                        $orgs = mysqli_query($conn , "SELECT * FROM `$table` ORDER BY id DESC;");
                    
                        $html = '';

                        foreach ($orgs as $org) {
                            $html = $html . '
                            
                            <div class="d-flex">
                                <div class="bg-white rounded-10 mt-6 mx-2" style="width: 300px; height: 400px; position: relative;">
                                    <div class="rounded-10 mx-auto mt-2"
                                        style="background-image: url(../assets/images/library/article/article.jpg); background-position: center; background-size: cover; width: 90%; height: 45%; filter: drop-shadow(0px 4px 100px rgba(0, 0, 0, 0.2)); ">
                                    </div>
                                    <div class="p-2">
                                        <p class="lead text-orange fw-bolder">'. $org["heading"] .'</p>
                                        <p class="lead text-dark fw-bolder fs-base">'. $org["subheading"] .'</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center w-100 p-2"
                                        style="position: absolute; bottom: 0;">
                                        <p class="lead text-dark fs-sm fw-normal pb-0 mb-0">Established On: '. date("jS F", strtotime($org["date_posted"])) .'</p>
                                        <i class="bi bi-arrow-right" style="color: #FF4952;"></i>
                                    </div>
                                </div>
                            </div>
                            
                            
                            ';
                        }

                        echo $html;
                    
                    ?>

                    <!-- Diff orgs end here -->

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