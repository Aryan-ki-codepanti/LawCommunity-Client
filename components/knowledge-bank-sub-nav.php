<section class="pt-10 pb-5">
    <div class="container">
        <div class="row">
            <div class=" d-flex justify-content-around align-items-center w-100 flex-wrap fs-base px-6">
                <a href="../library/articles.php" class="text-white <?php echo $currentPage == 'article' ? 'library-active' : '' ?> mt-2 px-2">Articles</a>
                <a href="../library/facts.php" class="text-white <?php echo $currentPage == 'facts' ? 'library-active' : '' ?> mt-2 px-2">Facts</a>
                <a href="../library/maxim.php" class="text-white <?php echo $currentPage == 'maxims' ? 'library-active' : '' ?> mt-2 px-2">Maxims</a>
                <a href="../library/legal-terms.php" class="text-white <?php echo $currentPage == 'legal-terms' ? 'library-active' : '' ?> mt-2 px-2">Legal Terms</a>
                <a href="../library/landmark-judgements.php" class="text-white <?php echo $currentPage == 'judgements' ? 'library-active' : '' ?> mt-2 px-2">Judgements</a>
                <a href="" class="text-white  mt-2 px-2" id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-expanded="false">Others</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item <?php echo $currentPage == 'policy' ? 'text-orange' : '' ?>" href="../other-updates/policies-amendments.php">Policy and ammendments</a></li>
                    <li><a class="dropdown-item <?php echo $currentPage == 'organization' ? 'text-orange' : '' ?>" href="../other-updates/different-organisations.php">Satutory organization</a></li>
                    <li><a class="dropdown-item <?php echo $currentPage == 'judges' ? 'text-orange' : '' ?>" href="../other-updates/about-different-judges.php">Diff judges</a></li>
                    <li><a class="dropdown-item <?php echo $currentPage == 'legal-documents' ? 'text-orange' : '' ?>" href="../other-updates/legal-documents.php">Legal documents</a></li>
                    <li><a class="dropdown-item <?php echo $currentPage == 'others' ? 'text-orange' : '' ?>" href="../other-updates/others.php">More</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>