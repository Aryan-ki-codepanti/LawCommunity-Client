<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>
<!-- hero -->
      <?php
          $heading = "Post An Internship";
          $subTitle = "Post on this platform to find Legal Interns from colleges across india";
          $btnTxt = "Find an Internship";
          $btnTextColor = "text-red";

          $feaureTitle1 = "10,000+";
          $feaureTitle2 = "500+";
          $feaureTitle3 = "Community ";
          $feaureTitle4 = "Various";

          $featureSubtitle1 = "Daily Visits";
          $featureSubtitle2 = "Organizations";
          $featureSubtitle3 = "Support";
          $featureSubtitle4 = "Categories";

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

          $subHeading1 = "If you are an established organization who requires Legal Interns now you can start with sharing details in the form given below.";
          $subHeading2 = "Your application now go into our review process in which we will check for valid location, details of organization and other information ";
          $subHeading3 = "After the review it will go for the approval and within 24 hours you will get the response, incase of rejection you can restart the process again.";
          $subHeading4 = "Once it’s approved your requirement will be live on our platform for our daily visitors to see and you will start getting applications from the candidates";

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
                  <input type="text" class="form-control" name="author-name" placeholder="Author Name">
              </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="author-email" placeholder="Author Email">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="author-phone" placeholder="Author Phone No.">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="job-title" placeholder="Job Title">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="company-name" placeholder="Company Name">
                </div>
                <div class="col-md-6">
                  <select class="form-select form-select" name="internship-type" aria-label="Default select example">
                    <option selected="">Choose Internship Type</option>
                    <option value="1">Virtual</option>
                    <option value="2">Law Firm</option>
                    <option value="3">Corporate</option>
                    <option value="4">Advocate</option>
                    <option value="5">NGO</option>
                    <option value="6">Government</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="duration" placeholder="Duration">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="location" placeholder="Location">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="stipend" placeholder="Stipend">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="opening-number" placeholder="No. of openeing">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="about-internship" rows="3" placeholder="About Internship"></textarea>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="about-organisation" rows="3" placeholder="About Organization"></textarea>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="other-details" rows="3" placeholder="Other Details"></textarea>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="apply-now-link" placeholder="Apply Now Link">
                </div>
                <div class="col-md-6">
                  <input type="email" autocomplete="off" class="form-control" name="apply-now-email" placeholder="Apply Now Email">
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
          $addHeading = "Promote Legal Internship on Law Community";
          $addSubHeading = "We provide an amazing platform for you to advertise Legal Internship requirements without any charges";

          $title1 = "Our Reach";
          $text1 = "With more than 
          hundred thousand visits every month we provide you better reach and possibility of getting good candidates is higher ";
          
          $title2 = "Brand Awareness";
          $text2 = "Publishing on 
          our website creates 
          brand awareness about 
          your organization and 
          also helps with brand credibility";

          include('../components/advertisement.php');
      ?>


 <?php
    include('../includes/footer-inner-pages.php');
?>