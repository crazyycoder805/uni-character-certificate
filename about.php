<!DOCTYPE html>
<html lang="en">
<?php 
require_once 'assets/includes/head.php';
?>

<body>

    <div class="boxed_wrapper ltr">

        <!-- preloader -->
        <?php 
        require_once 'assets/includes/preloader.php';
        ?>
        <!-- preloader end -->


        <?php 
       require_once 'assets/includes/navbar.php';
       ?>

        <!-- page-title -->
        <section class="page-title p_relative centred">
            <div class="bg-layer" style="background-image: url(assets/images/police/1.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>About Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- about-section -->
        <section class="about-section pt_150 pb_150">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box mr_40 pl_80 pb_70">
                                <div class="image-shape"
                                    style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                <figure class="image image-1"><img src="assets/images/police/3.jpg" alt="">
                                </figure>
                                <figure class="image image-2"><img src="assets/images/police/5.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box ml_45">
                                <div class="sec-title mb_25">
                                    <span class="sub-title mb_13">About Us</span>
                                    <h2>Experienced Police Officers</h2>
                                </div>
                                <div class="text-box mb_35">
                                    <p>The police force in Mirpur consists of dedicated officers who are sworn to
                                        protect and serve the residents of the region. These officers undergo rigorous
                                        training to equip them with the necessary skills and knowledge to effectively
                                        carry out their duties.</p>
                                </div>
                                <div class="list-inner mb_45">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);">
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 list-column">
                                            <ul class="list-style-one clearfix">
                                                <li>Background Check</li>
                                                <li>Free Consultation</li>
                                                <li>Expert Agents</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 list-column">
                                            <ul class="list-style-one clearfix">
                                                <li>Quick Response</li>
                                                <li>Over 20 Years Experience</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="contact.html" class="theme-btn btn-one">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- clients-section -->
        <section class="clients-section">
            <div class="auto-container">
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-1.png"
                                alt=""></a></div>
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-2.png"
                                alt=""></a></div>
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-3.png"
                                alt=""></a></div>
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-4.png"
                                alt=""></a></div>
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-5.png"
                                alt=""></a></div>
                </div>
            </div>
        </section>
        <!-- clients-section end -->







        <?php 
        require_once 'assets/includes/footer.php';
        ?>

    </div>


    <?php 
    require_once 'assets/includes/javascript.php';
    ?>

</body>

</html>