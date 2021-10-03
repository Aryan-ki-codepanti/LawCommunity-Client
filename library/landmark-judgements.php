<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>

<!-- hero -->
<?php
          $heading = "Judgements";
          $subTitle = "Legal Judgements by Various Judges from different courts that changed the landscape of judicial history .";
          $btnTxt = "Read Judgements";
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

    $currentPage = "judgements";
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
                    
                    <!-- Populate judgements here -->

                    <?php
                    
                        // db
                        require_once "../admin/php/db.inc.php";

                        $table = "judgement";
                        $judgements = mysqli_query($conn , "SELECT * FROM `$table` ORDER BY judgement_id DESC;");

                        $html = '';

                        foreach ($judgements as $judgement) {
                            $html = $html . '
                            
                            <div class="d-flex">
                                <div class="bg-white rounded-10 text-dark mx-2 mt-6"
                                    style="width: 300px; height: 400px; position: relative;">
                                    <div class="rounded-10 mx-auto mt-2"
                                        style="background-image: url(../assets/images/library/judgements/judgements.jpg); background-position: center; background-size: cover; width: 90%; height: 70%;">
                                    </div>
                                    <div class="w-100 d-flex justify-content-center">
                                        <div class="judgement-card rounded-10 text-center py-1 mx-auto"
                                            style="position: absolute; bottom: 20px;">
                                            <p class="mb-0 fw-600">'. $judgement['party1'] .'</p>
                                            <p class="fs-sm mb-0 text-dark fw-light">V/s</p>
                                            <p class="mb-0 fw-600">'. $judgement['party2'] .'</p>
                                            <strong class="text-orange fs-md">Sitetation: </strong><span
                                                class="fs-sm text-dark fw-light">'. $judgement["sitetation"] .'</span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                            
                            ';
                        }

                        echo $html;
                    
                    ?>

                    <!-- Populate judgements here -->

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