<?php
    $title = "Law Community";
    include('includes/navbar.php');
?>

<!-- hero -->
<?php
          $heading = "Opportunities";
          $subTitle = "In the middle of the difficulty lies opportunity, now find easily in various legal firms and Lawyers ";
          $btnTxt = "Post your Own Article";
          $btnTextColor = "text-teal";

          $feaureTitle1 = "10,000+";
          $feaureTitle2 = "500+";
          $feaureTitle3 = "Real Time";
          $feaureTitle4 = "28";

          $featureSubtitle1 = "Visits per days";
          $featureSubtitle2 = "Organizations";
          $featureSubtitle3 = "Updates";
          $featureSubtitle4 = "States";

          $iconSrc1 = "assets/images/icons/statsIncrease.svg";
          $iconSrc2 = " assets/images/icons/organisation.svg";
          $iconSrc3 = "assets/images/icons/community.svg";
          $iconSrc4 = "assets/images/icons/categories.svg";

          $bg = "assets/images/bg-teal.png";
          include('components/70-hero.php');
      ?>

<section class="overflow-hidden py-15">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="d-lg-none d-block" src="assets/images/horizontal-banner.jpg" alt="" width="90%">
        </div>
        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
            <img class="d-none d-lg-block " src="assets/images/demo-add.jpg">
        </div>
        <!-- text area -->
        <div class="col-lg-6 col-sm-12 p-5 text-white lead fs-8">
            <div class="row justify-content-center mb-5 mb-xl-10">
                <div class="col-lg-12 text-center">
                    <button class="btn btn-filter rounded-pill current mt-2" data-filter="*"
                        data-target="#grid1">All</button>
                    <button class="btn btn-filter rounded-pill mt-2" data-filter=".filter-moot"
                        data-target="#grid1">Moot Court</button>
                    <button class="btn btn-filter rounded-pill mt-2" data-filter=".filter-workshop"
                        data-target="#grid1">Workshop/seminar</button>
                    <button class="btn btn-filter rounded-pill mt-2" data-filter=".filter-paper"
                        data-target="#grid1">Call for paper</button>
                    <button class="btn btn-filter rounded-pill mt-2" data-filter=".filter-quiz"
                        data-target="#grid1">Quiz</button>
                    <button class="btn btn-filter rounded-pill mt-2" data-filter=".filter-other"
                        data-target="#grid1">Other</button>
                </div>
            </div>

            <div class="row g-1 d-flex justify-content-between" id="grid1" data-isotope="" style="position: relative; height: 1251px;">
                <div class="col-lg-4 col-md-6 col-sm-12 filter-workshop" style="position: absolute; left: 0px; top: 139px;">
                    <div style="width: 300px; height: 400px;">
                        <div style="background-image: url('assets/images/events/event-card.jpg');background-size: cover; background-position: center; width: 100%; height: 100%; filter: brightness(50%); border-radius: 10px; position: absolute;">
                        </div>
                        <div class="row text-white fs-sm p-2" style="position: absolute; bottom: 0;">
                            <p class="mb-0">Cateogary</p>
                            <p class="fs-4 fw-bolder">Lorem ipsum dolor sit amet.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">September 20th</p>
                                <a href="#" class="bg-white p-1 rounded text-dark">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filter-moot" style="position: absolute; left: 0px; top: 139px;">
                    <div style="width: 300px; height: 400px;">
                        <div style="background-image: url('assets/images/events/event-card.jpg');background-size: cover; background-position: center; width: 100%; height: 100%; filter: brightness(50%); border-radius: 10px; position: absolute;">
                        </div>
                        <div class="row text-white fs-sm p-2" style="position: absolute; bottom: 0;">
                            <p class="mb-0">Cateogary</p>
                            <p class="fs-4 fw-bolder">Lorem ipsum dolor sit amet.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">September 20th</p>
                                <a href="#" class="bg-white p-1 rounded text-dark">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filter-quiz" style="position: absolute; left: 0px; top: 139px;">
                    <div style="width: 300px; height: 400px;">
                        <div style="background-image: url('assets/images/events/event-card.jpg');background-size: cover; background-position: center; width: 100%; height: 100%; filter: brightness(50%); border-radius: 10px; position: absolute;">
                        </div>
                        <div class="row text-white fs-sm p-2" style="position: absolute; bottom: 0;">
                            <p class="mb-0">Cateogary</p>
                            <p class="fs-4 fw-bolder">Lorem ipsum dolor sit amet.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">September 20th</p>
                                <a href="#" class="bg-white p-1 rounded text-dark">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filter-paper" style="position: absolute; left: 0px; top: 139px;">
                    <div style="width: 300px; height: 400px;">
                        <div style="background-image: url('assets/images/events/event-card.jpg');background-size: cover; background-position: center; width: 100%; height: 100%; filter: brightness(50%); border-radius: 10px; position: absolute;">
                        </div>
                        <div class="row text-white fs-sm p-2" style="position: absolute; bottom: 0;">
                            <p class="mb-0">Cateogary</p>
                            <p class="fs-4 fw-bolder">Lorem ipsum dolor sit amet.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">September 20th</p>
                                <a href="#" class="bg-white p-1 rounded text-dark">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filter-other" style="position: absolute; left: 0px; top: 139px;">
                    <div style="width: 300px; height: 400px;">
                        <div style="background-image: url('assets/images/events/event-card.jpg');background-size: cover; background-position: center; width: 100%; height: 100%; filter: brightness(50%); border-radius: 10px; position: absolute;">
                        </div>
                        <div class="row text-white fs-sm p-2" style="position: absolute; bottom: 0;">
                            <p class="mb-0">Cateogary</p>
                            <p class="fs-4 fw-bolder">Lorem ipsum dolor sit amet.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">September 20th</p>
                                <a href="#" class="bg-white p-1 rounded text-dark">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filter-moot" style="position: absolute; left: 0px; top: 139px;">
                    <div style="width: 300px; height: 400px;">
                        <div style="background-image: url('assets/images/events/event-card.jpg');background-size: cover; background-position: center; width: 100%; height: 100%; filter: brightness(50%); border-radius: 10px; position: absolute;">
                        </div>
                        <div class="row text-white fs-sm p-2" style="position: absolute; bottom: 0;">
                            <p class="mb-0">Cateogary</p>
                            <p class="fs-4 fw-bolder">Lorem ipsum dolor sit amet.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">September 20th</p>
                                <a href="#" class="bg-white p-1 rounded text-dark">Register</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- add right -->
        </div>
        <div class="col-lg-3 d-flex justify-content-center align-items-center">
            <img class="d-none d-lg-block" src="assets/images/demo-add.jpg">
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="d-lg-none d-block" src="assets/images/horizontal-banner.jpg" alt="" width="90%">
        </div>
    </div>
</section>

<?php
          $collaborationHeading = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed";
          $collaborationBtn = "Post a Job";

          $collaborationImgsrc = "assets/images/collaboration-1.png";

          include('components/collaboration.php');
?>

<?php
    include('includes/footer.php');
?>