<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>
<!-- hero -->
      <?php
          $heading = "Post in Knowledge Bank";
          $subTitle = "Now post about intersting things such as Maxims,Facts,Articles and share it with our audience.";
          $btnTxt = "Read Legal Content";
          $btnTextColor = "text-red";

          $feaureTitle1 = "10,000+";
          $feaureTitle2 = "Legal";
          $feaureTitle3 = "Personal ";
          $feaureTitle4 = "Various";

          $featureSubtitle1 = "Daily Visits";
          $featureSubtitle2 = "Knowledge";
          $featureSubtitle3 = "Growth";
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
          $heading4 = "Recognition";
          $heading5 = "Award";

          $subHeading1 = "Every Month we will select one content from our portal and give the writer an award and renumeration as an appreciation by our organization";
          $subHeading2 = "Once it’s approved your content will be live on platform for our daily visitors to see and you will get the certificate within 7 days on your mail id.";
          $subHeading3 = "After the review it will go for the approval and within 24 hours you will get the response, incase of rejection you can restart the process again.";
          $subHeading4 = "Your submission will go into our review process and get checked for plagiarism, content quality, proper formatting and other information ";
          $subHeading5 = "If you are an individual who is interested in writing legal content now you can start with sharing necessary details in the form given below.";

          include('../components/steps-5.php');
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
                  <label for="author-image" class="text-white">Author Image</label>
                  <input type="file" class="form-control" name="author-image" placeholder="Author Image" accept="image/*">
                </div>
                <div class="col-md-12">
                  <select class="form-select form-select" name="type" aria-label="Default select example">
                    <option selected="">Choose Content Type</option>
                    <option value="1">Articles</option>
                    <option value="2">Facts</option>
                    <option value="3">Maxims</option>
                    <option value="4">Judgements</option>
                    <option value="5">Policies & Ammendments</option>
                    <option value="6">Legal Documents</option>
                    <option value="7">Different Judges</option>
                    <option value="8">Legal Terms</option>
                    <option value="9">Others</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="col-md-12">
                  <label for="blog-image" class="text-white">Image</label>
                  <input type="file" class="form-control" name="image" placeholder="Image" accept="image/*">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="content" rows="3" placeholder="Content"></textarea>
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
          $addHeading = "Post Legal content on Law Community";
          $addSubHeading = "We provide an amazing platform for you to post Legal Content on different topics without any charges ";

          $title1 = "Skill Development";
          $text1 = "Posting on our platform will help you in developing research, writing and reading skills and and boost your confidence";
          
          $title2 = "Get Recognized";
          $text2 = "With more than hundred thousand visits every month we provide you better recognition so that you can showcase your talent to the world";

          include('../components/advertisement.php');
      ?>

 <?php
    include('../includes/footer-inner-pages.php');
?>