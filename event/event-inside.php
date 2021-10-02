<?php
    $title = "Law Community";
    include('../includes/navbar-inner-pages.php');
?>

<!-- hero -->
<section class="py-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 text-white">
                <p class="fs-md text-orange fw-bolder">Cateogary</p>
                <h3 class="fw-600">Lorem ipsum dolor sit amet.</3>
                    <br><br>
                    <p class="fs-5 fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor </p>
                    <div class="row mt-5">
                        <div class="col-lg-6 col-sm-12 d-flex align-items-center">
                            <img src="../assets/images/icons/calender.svg" alt="" style="margin-right: 20px;">
                            <p class="fs-5 fw-normal">5th August</p>
                        </div>
                        <div class="col-lg-6 col-sm-12 d-flex align-items-center mt-lg-0 mt-2">
                            <img src="../assets/images/icons/clock-white.svg" alt="" style="margin-right: 20px;">
                            <p class="fs-5 fw-normal">02:00 PM</p>
                        </div>
                        <div class="col-lg-6 col-sm-12 d-flex align-items-center mt-lg-5 mt-2">
                            <img src="../assets/images/icons/live.svg" alt="" style="margin-right: 20px;">
                            <p class="fs-5 fw-normal">Live</p>
                        </div>
                        <div class="col-lg-6 col-sm-12 d-flex align-items-center mt-lg-5 mt-2">
                            <img src="../assets/images/icons/platform.svg" alt="" style="margin-right: 20px;">
                            <p class="fs-5 fw-normal">Google Meet</p>
                        </div>
                    </div>
                    <div class="mt-5 d-flex align-items-center">
                        <div
                            style="background-image: url('../assets/images/profile-picture.jpg'); background-position: center; background-size: cover; width: 50px; height: 50px; border-radius: 50px; margin-right: 10px;">
                        </div>
                        <!-- <img src="../assets/images/profile-picture.jpg" alt="" width="50px" height="50px" style="border-radius: 50px; margin-right: 10px;"> -->
                        <div class="text-white fs-sm">
                            <p class="mb-1">Chris Evans</p>
                            <p class="text-gray">Product Designer</p>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6 col-sm-12 position-relative d-flex justify-content-center align-items-center mt-5 mt-lg-0">
                <img src="../assets/images/declorations/dotted-circle.svg" alt=""
                    style="position: absolute; top: 0; right: 0; width: 50%;">
                <div style="z-index: 2;">
                    <div class="rounded-10 d-none d-lg-block "
                        style="background-image: url('../assets/images/event-inside.png'); background-position: center; background-size: cover; width: 400px; height: 300px;">
                    </div>
                    <div class="rounded-10 d-lg-none d-block"
                    style="background-image: url('../assets/images/event-inside.png'); background-position: center; background-size: cover; width: 300px; height: 200px;">
                    </div>
                    <a href="#" class="btn btn-orange text-white rounded w-100 mt-5">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="overflow-hidden">
    <!-- add left -->
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="d-lg-none d-block" src="../assets/images/horizontal-banner.jpg" alt="" width="90%">
        </div>
        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
            <img class="d-none d-lg-block " src="../assets/images/demo-add.jpg">
        </div>
        <!-- text area -->
        <div class="col-lg-6 col-sm-12 p-5 text-white lead fs-8">
            <h3 class="text-white display-4 fw-600">About the speaker</h3>
            <br>
            <p>Dr.Shlesh Gautam Assistant Professor B.A.LL.B(Hons) Faculty of Law University of Allahabad</p>
            <br><br>
            <h4>Event Details</h4>
            <p><strong>Topic: </strong>Econmic crimes during Covid-19 and beyond</p>
            <p><strong>Date: </strong>Econmic crimes during Covid-19 and beyond</p>
            <p><strong>Time: </strong>Econmic crimes during Covid-19 and beyond</p>
            <p>Live On Google Meet</p>
            <p><strong>Last Date of Registration: </strong>Econmic crimes during Covid-19 and beyond</p>
            <br><br>
            <h4>About the organiser</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
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

    $collaborationImgsrc = "../assets/images/collaboration-1.png";

    include('../components/collaboration.php')
?>

<?php
    include('../includes/footer-inner-pages.php');
?>