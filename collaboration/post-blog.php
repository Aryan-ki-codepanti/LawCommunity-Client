<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>
<!-- hero -->
      <?php
          $heading = "Post a Blog";
          $subTitle = "An oppportunity for you to post blog and share your captivating thoughts about law";
          $btnTxt = "Read a Blog";
          $btnTextColor = "text-red";

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

          $subHeading1 = "If you are an individual who is interested in writing legal blog now you can start with sharing necessary details in the form given below.";
          $subHeading2 = "Your submission will go into our review process and get checked for plagiarism, content quality, proper formatting and other information ";
          $subHeading3 = "After the review it will go for the approval and within 24 hours you will get the response, incase of rejection you can restart the process again.";
          $subHeading4 = "Once it’s approved your blog will be live on platform for our daily visitors to see and you will get the certificate within 7 days on your mail id.";
          $subHeading5 = "Every Month we will select one content from our portal and give the writer an award and renumeration as an appreciation by our organization";

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
                  <input type="text" class="form-control" name="blog-title" placeholder="Blog Title">
                </div>
                <div class="col-md-12">
                  <label for="blog-image" class="text-white">Blog Image</label>
                  <input type="file" class="form-control" name="blog-image" placeholder="Blog Image" accept="image/*">
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
          $addHeading = "Post your Blog on Law Community";
          $addSubHeading = "We provide an amazing platform for you to post your blog without any charges ";

          $title1 = "Skill Development";
          $text1 = "Posting on our platform will help you in developing research, writing and reading skills and and boost your confidence";
          
          $title2 = "Get Recognized";
          $text2 = "Posting on our platform will help you in developing research, writing and reading skills and and boost your confidence";

          include('../components/advertisement.php');
      ?>

 <?php
    include('../includes/footer-inner-pages.php');
?>