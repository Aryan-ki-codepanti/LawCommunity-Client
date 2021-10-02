<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>
<!-- hero -->
      <?php
          $heading = "Post an Event";
          $subTitle = "Any upcoming event of your organization, now share it on our platform and get the audience it deserves";
          $btnTxt = "Find a Legal Event";
          $btnTextColor = "text-red";

          $feaureTitle1 = "10,000+";
          $feaureTitle2 = "Various";
          $feaureTitle3 = "Brand ";
          $feaureTitle4 = "Easy";

          $featureSubtitle1 = "Daily Visits";
          $featureSubtitle2 = "Categories";
          $featureSubtitle3 = "Visibility";
          $featureSubtitle4 = "Process";

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

          $subHeading1 = "If you are an established organization hosting an event now you can start with sharing necessary details in the form given below.";
          $subHeading2 = "Your application now go into our review process in which we will check for event particulars, details of organization and other information ";
          $subHeading3 = "After the review it will go for the approval and within 24 hours you will get the response, incase of rejection you can restart the process again.";
          $subHeading4 = "Once it’s approved your event will be live on platform for our daily visitors to see and you will start getting registrations through Law Community’s Portal";

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
                  <input type="text" class="form-control" name="name" placeholder="Concerned Person's Name">
              </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="email" placeholder="Concerned Person Email id">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="phone" placeholder="Concerned Person Mobile No.">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="job-title" placeholder="Event Name">
                </div>
                <div class="col-md-12">
                  <label for="image" class="text-white">Event Image</label>
                  <input type="file" class="form-control" name="image" placeholder="Event Image" accept="image/*">
                </div>
                <div class="col-md-12">
                  <select class="form-select form-select" name="event-type" aria-label="Default select example">
                    <option selected="">Choose Event Type</option>
                    <option value="1">Virtual</option>
                    <option value="2">Law Firm</option>
                    <option value="3">Corporate</option>
                    <option value="4">Advocate</option>
                    <option value="5">NGO</option>
                    <option value="6">Government</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <input type="date" class="form-control" name="date" placeholder="Date">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="time" placeholder="Time">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="venue" placeholder="Venue">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="organization-name" placeholder="Organization Name">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="about-organiser" rows="3" placeholder="About Organiser"></textarea>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="about-event" rows="3" placeholder="About Event"></textarea>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="speaker" placeholder="Speaker">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="fees" placeholder="Registration Fees">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="link" placeholder="Payment Link">
                </div>
                <div class="col-md-12 col-lg-12 mt-4">
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
          $addHeading = "Promote your event on Law Community";
          $addSubHeading = "We provide an amazing platform for you to promote your event without any charges ";

          $title1 = "Our Reach";
          $text1 = "With more than 
          hundred thousand visits every month we provide you better reach and possibility of converting registrations is much higher";
          
          $title2 = "Brand Growth";
          $text2 = "Publishing on our website creates brand awareness about your organization and also helps in growth of the brand";

          include('../components/advertisement.php');
      ?>


 <?php
    include('../includes/footer-inner-pages.php');
?>