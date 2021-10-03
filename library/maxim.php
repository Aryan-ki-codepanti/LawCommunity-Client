<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>

<!-- hero -->
<?php
          $heading = "Maxims";
          $subTitle = "Meanings of Important Latin terms commonly used in Law which as a Legal Professional you should Know..";
          $btnTxt = "Read a Maxim";
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

    $currentPage = "maxims";
    include('../components/knowledge-bank-sub-nav.php');
?>

<section class="overflow-hidden">
    <div class="row">

        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="d-lg-none d-block" src="../assets/images/horizontal-banner.jpg" alt="" width="90%">
        </div>
        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
            <img class="d-none d-lg-block " src="../assets/images/demo-add.jpg">
        </div>
        <!-- text area -->
        <div class="col-lg-6 col-sm-12 text-white lead fs-8 my-5">

            <div class="row d-flex justify-content-center">
                <div class="col-11">
                    <!-- Maxim Populate here -->
                    <?php

                            // db
                            require_once "../admin/php/db.inc.php";

                            $table = "maxim";
                            $maxims = mysqli_query($conn , "SELECT * FROM `$table` ORDER BY maxim_id DESC;");                    
                            $html = ''; 
                            
                            foreach ($maxims as $maxim) {
                                $html = $html . '
                                
                                <div class="accordion my-2 px-3 rounded-10" id="accordion'.$maxim['maxim_id'].'">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading'.$maxim['maxim_id'].'">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse'.$maxim['maxim_id'].'" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>'. $maxim["maxim_heading"] .'</strong>
                                        </button>
                                    </h2>
                                    <div id="collapse'.$maxim['maxim_id'].'" class="accordion-collapse collapse" aria-labelledby="heading'.$maxim['maxim_id'].'"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body row">
                                            <div class="col-sm-12 col-lg-11">
                                                <small class="text-gray fs-sm">'. date("M d, Y", strtotime($maxim["date_posted"])) .'</small>
                                                <br><br>
                                                <p>
                                                '. $maxim["definition"] .'
                                                </p>
                                            </div>
                                            <div class="col-sm-12 col-lg-1" style="position: relative;">
                                                <a href="../maxim/content.php?v='.$maxim["maxim_id"].'" style="position: absolute; right: 0; bottom: 0;">
                                                    <i class="bi bi-arrow-right" style="color: #FF4952;"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                
                                ';
                            }

                            echo $html;


                    ?>

                    <!-- Maxim Populate Done -->
                </div>
            </div>
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



<?php
    $collaborationHeading = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed";
    $collaborationBtn = "Post a Job";

    $collaborationImgsrc = "../assets/images/collaboration-2.png";

    include('../components/collaboration.php')
?>

<?php
    include('../includes/footer-inner-pages.php');
?>