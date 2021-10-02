<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>
<!-- hero -->
      <?php
          $heading = "Join as Mentor ";
          $subTitle = "Now join as a mentor and get the opportunity to educate learners in an interactive manner";
          $btnTxt = "Explore our Milestones";
          $btnTextColor = "text-red";

          $feaureTitle1 = "10,000+";
          $feaureTitle2 = "Various";
          $feaureTitle3 = "Brand ";
          $feaureTitle4 = "Social";

          $featureSubtitle1 = "Daily Visits";
          $featureSubtitle2 = "Categories";
          $featureSubtitle3 = "Visibility";
          $featureSubtitle4 = "Welfare";

          $iconSrc1 = "../assets/images/icons/statsIncrease.svg";
          $iconSrc2 = "../assets/images/icons/organisation.svg";
          $iconSrc3 = "../assets/images/icons/community.svg";
          $iconSrc4 = "../assets/images/icons/categories.svg";

          $bg = "../assets/images/bg-purple.png";
          include('../components/70-hero.php');
      ?>

<!-- steps -->

<?php
          $heading1 = "Post Details";
          $heading2 = "Review Process";
          $heading3 = "Our Response";
          $heading4 = "Final Step";

          $subHeading1 = "If you are an individual who is interested in mentoring learners now you can start with sharing necessary details in the form given below.";
          $subHeading2 = "Your application now go into our review process in which we will check your profile, experience and other information ";
          $subHeading3 = "After the review it will go for the approval and within 24 hours you will get the response and a meeting will be scheduled for discussion";
          $subHeading4 = "After final acceptance every detail regarding collaboration and details about the agreement will be shared with you. ";

          include('../components/steps-4.php');
      ?>

    <!-- post -->
    <section class="overflow-hidden">
      <!-- add left -->
        <div class="row">
          <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="d-lg-none d-block" src="../assets/images/horizontal-banner.jpg" alt="" width="90%">
          </div>
          <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
            <img class="d-none d-lg-block " src="../assets/images/demo-add.jpg">
          </div>
          <!-- form -->
          <div class="col-lg-6 col-sm-12 p-5">
            <p class="h3 text-white">Lets make something big together</p>
            <form action="#" method="post">
            <div class="row g-3">
              <div class="col-md-12">
                  <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="email" placeholder="Your Email">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="phone" placeholder="Your Phone No.">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="linkedin-link" placeholder="LinedIn profile link">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="area-of-interest" placeholder="Areas of interest">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="experience" placeholder="Years of experience">
                </div>
                <div class="col-md-8 col-lg-12 mt-4">
                  <div class="form-check text-white">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">I Accept the <a class="text-orange" href="#">Terms and conditions</a> and acknowledge that my identy will be used in accordance with privacy policy.</label>
                  </div>
                  <a href="" class="mt-4 btn btn-lg btn-outline-white rounded-pill">Submit</a>
                </div>
              </form>
              <!-- add right -->
            </div>
          </div>
          <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
            <img class="d-none d-lg-block" src="../assets/images/demo-add.jpg">
          </div>
          <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="d-lg-none d-block" src="../assets/images/horizontal-banner.jpg" alt="" width="90%">
          </div>
        </div>
    </section>

 <!-- advertisement -->
  <?php
      $addHeading = "Now Join as Mentor at Law Community";
      $addSubHeading = "We provide an amazing platform for you to become a mentor and guide learners with technically advanced methods.";

      $title1 = "Personal Branding";
      $text1 = "Collaboration with Law Community will help in your personal branding and reach within Legal Fraternity ";
      
      $title2 = "Mentorship";
      $text2 = "You can help learners by providing solution to complex problems they face by mentoring them through practical applications. ";

      include('../components/advertisement.php');
  ?>

 <?php
    include('../includes/footer-inner-pages.php');
?>