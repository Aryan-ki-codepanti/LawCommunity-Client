<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>

<!-- hero -->
<?php
          $heading = "Legal Jobs";
          $subTitle = "Opportunities for Law Graduates in Different Fields of Law such as Law Firm, Law Chambers, NGO.";
          $btnTxt = "Post an Job";
          $btnTextColor = "text-red";

          $feaureTitle1 = "Real Time ";
          $feaureTitle2 = "Industry";
          $feaureTitle3 = "Genuine";
          $feaureTitle4 = "Easy ";

          $featureSubtitle1 = "Updates";
          $featureSubtitle2 = "Specific";
          $featureSubtitle3 = "Companies";
          $featureSubtitle4 = "To Apply";

          $iconSrc1 = "../assets/images/icons/statsIncrease.svg";
          $iconSrc2 = "../assets/images/icons/organisation.svg";
          $iconSrc3 = "../assets/images/icons/community.svg";
          $iconSrc4 = "../assets/images/icons/categories.svg";

          $bg = "../assets/images/bg-red.png";
          include('../components/70-hero.php');
      ?>

<section class="py-15 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="d-flex justify-content-center">
          <a href="jobs.php" class="d-flex justify-content-center">
            <img src="../assets/images/icons/chat-right-dots.svg" alt="" style="width: 40px; margin-right: 20px;">
            <span class="lead fw-bold text-orange fs-4">Jobs</span>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 mt-5 mt-lg-0">
        <div class="d-flex justify-content-center">
          <a href="internships.php" class="d-flex justify-content-center">
            <img src="../assets/images/icons/internships-white.svg" alt="" style="width: 40px; margin-right: 20px;">
            <span class="lead fw-bold text-white fs-4">Internships</span>
          </a>
        </div>
      </div>
    </div>
    <br>
    <hr style="height: 3px;">
    <br>
    <p class="lead text-white text-center">Employment or professional growth avenue from whole country, details
      available for Legal Professionals and Law Students</p>
  </div>
</section>

<section class="text-white">
  <div class="container mt-5 mt-xl-10">
    <div class="row justify-content-center mb-5 mb-xl-10">
      <div class="col-lg-12 text-center">
        <button class="btn btn-filter rounded-pill current mt-2" data-filter="*" data-target="#grid1">all</button>
        <button class="btn btn-filter rounded-pill mt-2" data-filter=".filter-government" data-target="#grid1">Government</button>
        <button class="btn btn-filter rounded-pill mt-2" data-filter=".filter-litigation" data-target="#grid1">Litigation</button>
        <button class="btn btn-filter rounded-pill mt-2" data-filter=".filter-corporate" data-target="#grid1">Corporate</button>
      </div>
    </div>

    <div class="row g-1" id="grid1" data-isotope="" style="position: relative; height: 1251px;">

      <div class="col-12 filter-litigation" style="position: absolute; left: 0px; top: 139px;">
        <a href="job-inside.php" class="card bg-new" style="border-radius: 10px;">
          <div class="card-body">
            <div class="row d-flex align-items-center g-2 g-md-4 text-center text-md-start">
              <div class="col-md-2 col-lg-2">
                <img src="../assets/images/logo/logo-full.svg" alt="Logo" class="logo">
              </div>
              <div class="col-md-6">
                <p class="fs-lg mb-0">Senior Visual Designer</p>
                <ul class="list-inline list-inline-separated text-muted">
                  <li class="list-inline-item">at Bending tech, Delhi, India</li>
                </ul>
                <div class="d-flex align-items-center text-white">
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/clock-white.svg" alt="" style="margin-right: 8px;">
                    <span>3hrs</span>
                  </div>
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/cash-white.svg" alt="" style="margin-right: 8px;">
                    <span>14K</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <img src="../assets/images/icons/location-white.svg" alt="" style="margin-right: 8px;">
                    <span>Remote</span>
                  </div>
                </div>

              </div>
              <div class="col-md-4 text-lg-end">
                <img src="../assets/images/icons/arrow.svg" alt="" width="30px">
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-12 filter-government" style="position: absolute; left: 0px; top: 139px;">
        <a href="" class="card bg-new" style="border-radius: 10px;">
          <div class="card-body">
            <div class="row d-flex align-items-center g-2 g-md-4 text-center text-md-start">
              <div class="col-md-2 col-lg-2">
                <img src="../assets/images/logo/logo-full.svg" alt="Logo" class="logo">
              </div>
              <div class="col-md-6">
                <p class="fs-lg mb-0">Senior Visual Designer</p>
                <ul class="list-inline list-inline-separated text-muted">
                  <li class="list-inline-item">at Bending tech, Delhi, India</li>
                </ul>
                <div class="d-flex align-items-center text-white">
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/clock-white.svg" alt="" style="margin-right: 8px;">
                    <span>3hrs</span>
                  </div>
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/cash-white.svg" alt="" style="margin-right: 8px;">
                    <span>14K</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <img src="../assets/images/icons/location-white.svg" alt="" style="margin-right: 8px;">
                    <span>Remote</span>
                  </div>
                </div>

              </div>
              <div class="col-md-4 text-lg-end">
                <img src="../assets/images/icons/arrow.svg" alt="" width="30px">
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-12 filter-corporate" style="position: absolute; left: 0px; top: 139px;">
        <a href="" class="card bg-new" style="border-radius: 10px;">
          <div class="card-body">
            <div class="row d-flex align-items-center g-2 g-md-4 text-center text-md-start">
              <div class="col-md-2 col-lg-2">
                <img src="../assets/images/logo/logo-full.svg" alt="Logo" class="logo">
              </div>
              <div class="col-md-6">
                <p class="fs-lg mb-0">Senior Visual Designer</p>
                <ul class="list-inline list-inline-separated text-muted">
                  <li class="list-inline-item">at Bending tech, Delhi, India</li>
                </ul>
                <div class="d-flex align-items-center text-white">
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/clock-white.svg" alt="" style="margin-right: 8px;">
                    <span>3hrs</span>
                  </div>
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/cash-white.svg" alt="" style="margin-right: 8px;">
                    <span>14K</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <img src="../assets/images/icons/location-white.svg" alt="" style="margin-right: 8px;">
                    <span>Remote</span>
                  </div>
                </div>

              </div>
              <div class="col-md-4 text-lg-end">
                <img src="../assets/images/icons/arrow.svg" alt="" width="30px">
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-12 filter-litigation" style="position: absolute; left: 0px; top: 139px;">
        <a href="" class="card bg-new" style="border-radius: 10px;">
          <div class="card-body">
            <div class="row d-flex align-items-center g-2 g-md-4 text-center text-md-start">
              <div class="col-md-2 col-lg-2">
                <img src="../assets/images/logo/logo-full.svg" alt="Logo" class="logo">
              </div>
              <div class="col-md-6">
                <p class="fs-lg mb-0">Senior Visual Designer</p>
                <ul class="list-inline list-inline-separated text-muted">
                  <li class="list-inline-item">at Bending tech, Delhi, India</li>
                </ul>
                <div class="d-flex align-items-center text-white">
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/clock-white.svg" alt="" style="margin-right: 8px;">
                    <span>3hrs</span>
                  </div>
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/cash-white.svg" alt="" style="margin-right: 8px;">
                    <span>14K</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <img src="../assets/images/icons/location-white.svg" alt="" style="margin-right: 8px;">
                    <span>Remote</span>
                  </div>
                </div>

              </div>
              <div class="col-md-4 text-lg-end">
                <img src="../assets/images/icons/arrow.svg" alt="" width="30px">
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-12 filter-corporate" style="position: absolute; left: 0px; top: 139px;">
        <a href="" class="card bg-new" style="border-radius: 10px;">
          <div class="card-body">
            <div class="row d-flex align-items-center g-2 g-md-4 text-center text-md-start">
              <div class="col-md-2 col-lg-2">
                <img src="../assets/images/logo/logo-full.svg" alt="Logo" class="logo">
              </div>
              <div class="col-md-6">
                <p class="fs-lg mb-0">Senior Visual Designer</p>
                <ul class="list-inline list-inline-separated text-muted">
                  <li class="list-inline-item">at Bending tech, Delhi, India</li>
                </ul>
                <div class="d-flex align-items-center text-white">
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/clock-white.svg" alt="" style="margin-right: 8px;">
                    <span>3hrs</span>
                  </div>
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/cash-white.svg" alt="" style="margin-right: 8px;">
                    <span>14K</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <img src="../assets/images/icons/location-white.svg" alt="" style="margin-right: 8px;">
                    <span>Remote</span>
                  </div>
                </div>

              </div>
              <div class="col-md-4 text-lg-end">
                <img src="../assets/images/icons/arrow.svg" alt="" width="30px">
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-12 filter-litigation" style="position: absolute; left: 0px; top: 139px;">
        <a href="" class="card bg-new" style="border-radius: 10px;">
          <div class="card-body">
            <div class="row d-flex align-items-center g-2 g-md-4 text-center text-md-start">
              <div class="col-md-2 col-lg-2">
                <img src="../assets/images/logo/logo-full.svg" alt="Logo" class="logo">
              </div>
              <div class="col-md-6">
                <p class="fs-lg mb-0">Senior Visual Designer</p>
                <ul class="list-inline list-inline-separated text-muted">
                  <li class="list-inline-item">at Bending tech, Delhi, India</li>
                </ul>
                <div class="d-flex align-items-center text-white">
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/clock-white.svg" alt="" style="margin-right: 8px;">
                    <span>3hrs</span>
                  </div>
                  <div class="d-flex align-items-center" style="margin-right: 20px;">
                    <img src="../assets/images/icons/cash-white.svg" alt="" style="margin-right: 8px;">
                    <span>14K</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <img src="../assets/images/icons/location-white.svg" alt="" style="margin-right: 8px;">
                    <span>Remote</span>
                  </div>
                </div>

              </div>
              <div class="col-md-4 text-lg-end">
                <img src="../assets/images/icons/arrow.svg" alt="" width="30px">
              </div>
            </div>
          </div>
        </a>
      </div>

    </div>
</section>


<?php
          $collaborationHeading = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed";
          $collaborationBtn = "Post a Job";

          $collaborationImgsrc = "../assets/images/collaboration-1.png";

          include('../components/collaboration.php');

?>

<?php
    include('../includes/footer-inner-pages.php');
?>