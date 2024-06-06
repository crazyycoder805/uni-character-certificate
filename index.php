<!DOCTYPE html>
<html lang="en">

<?php 
require_once 'assets/includes/head.php';
?>

<?php 
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("location:index.php");
}
?>


<!-- page wrapper -->

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


        <!-- banner-section -->
        <section class="banner-section p_relative">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item p_relative">
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url(assets/images/police/shape-2.png);"></div>
                        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                    </div>
                    <div class="bg-layer" style="background-image: url(assets/images/police/1.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h3>Discover The Truth</h3>
                            <h2>About character certificate</h2>
                            <p>Character certificates are official documents issued by institutions or authorities to
                                affirm an individual's moral and ethical standing. These certificates play a crucial
                                role in various aspects of life, including employment, education, immigration, and
                                community involvement. </p>
                            <div class="btn-box">
                                <a href="about.php" class="theme-btn btn-one"><span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                    </div>
                    <div class="bg-layer" style="background-image: url(assets/images/police/2.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h3>Discover The Truth</h3>
                            <h2>About character certificate</h2>
                            <p>Character certificates are official documents issued by institutions or authorities to
                                affirm an individual's moral and ethical standing. These certificates play a crucial
                                role in various aspects of life, including employment, education, immigration, and
                                community involvement. </p>
                            <div class="btn-box">
                                <a href="about.php" class="theme-btn btn-one"><span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                    </div>
                    <div class="bg-layer" style="background-image: url(assets/images/police/3.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h3>Discover The Truth</h3>
                            <h2>About character certificate</h2>
                            <p>Character certificates are official documents issued by institutions or authorities to
                                affirm an individual's moral and ethical standing. These certificates play a crucial
                                role in various aspects of life, including employment, education, immigration, and
                                community involvement. </p>
                            <div class="btn-box">
                                <a href="about.php" class="theme-btn btn-one"><span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- about-style-three -->
        <section class="about-style-three pt_150 pb_150">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-box pr_80 mr_40">
                                <figure class="image image-1"><img src="assets/images/police/4.jpg" alt="">
                                </figure>
                                <figure class="image image-2"><img src="assets/images/police/5.jpg" alt="">
                                </figure>
                                <div class="experience-box">
                                    <h2>25+<span>Years</span></h2>
                                    <p>Of experience in the Mirpur AJk, Police Department</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_six">
                            <div class="content-box ml_40">
                                <div class="sec-title mb_50">
                                    <span class="sub-title">About Us</span>
                                    <h2>Experienced Character Certificate Generators</h2>
                                </div>
                                <div class="inner-box mb_50">
                                    <div class="single-item">
                                        <div class="icon-box">
                                            <div class="icon gradient-color"><i class="icon-9"></i></div>
                                        </div>
                                        <h3>Collect all evidence</h3>
                                        <p>The Mirpur AJK Police Force is equipped with an array of modern machines and
                                            technological innovations, empowering officers to effectively combat crime,
                                            ensure
                                            public safety, and maintain law and order in the region.</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box">
                                            <div class="icon gradient-color"><i class="icon-12"></i></div>
                                        </div>
                                        <h3>Strong investigation team</h3>
                                        <p>The Expert Team of Police in Mirpur, AJK (Azad Jammu and Kashmir), embodies a
                                            dedicated force committed to ensuring the safety and security of the
                                            region's residents.</p>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="contact.php" class="theme-btn btn-one">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end -->


        <!-- feature-style-two -->
        <section class="feature-style-two pt_50 pb_50">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-12"></i></div>
                                <h3>Expert Team</h3>
                                <p>The Expert Team of Police in Mirpur, AJK (Azad Jammu and Kashmir), embodies a
                                    dedicated force committed to ensuring the safety and security of the region's
                                    residents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-11"></i></div>
                                <h3>Modern Machines</h3>
                                <p>The Mirpur AJK Police Force is equipped with an array of modern machines and
                                    technological innovations, empowering officers to effectively combat crime, ensure
                                    public safety, and maintain law and order in the region. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- feature-style-two end -->











        <!-- clients-section -->
        <section class="clients-section alternat-2">
            <div class="auto-container">
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-6.png"
                                alt=""></a></div>
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-7.png"
                                alt=""></a></div>
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-8.png"
                                alt=""></a></div>
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-9.png"
                                alt=""></a></div>
                    <div class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-10.png"
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