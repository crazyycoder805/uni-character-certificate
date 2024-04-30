<!DOCTYPE html>
<html lang="en">
<?php 
require_once 'assets/includes/head.php';
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

        <!-- page-title -->
        <section class="page-title p_relative centred">
            <div class="bg-layer" style="background-image: url(assets/images/police/5.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Character Certificate</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Character Certificate</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad-2">
            <div class="bg-layer" style="background-image: url(assets/images/background/contact-bg.jpg);"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-md form-column">
                        <div class="form-inner">
                            <form method="post" action="http://azim.hostlin.com/Insighteye/sendemail.php"
                                id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input type="text" id="firstname" name="firstname" required="">
                                        </div>

                                    </div>
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input type="text" id="lastname" name="lastname" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Date Of Birth</label>
                                            <input type="date" id="dob" name="dob" required="">
                                        </div>

                                    </div>
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Place Of Birth</label>
                                            <input type="text" id="pob" name="pob" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Current Addrres</label>
                                            <input type="text" id="ca" name="ca" required="">
                                        </div>

                                    </div>
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Previous Address</label>
                                            <input type="text" id="pa" name="pa" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">Generate Certificate</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->




        <?php 
        require_once 'assets/includes/footer.php';
        ?>
    </div>


    <?php 
    require_once 'assets/includes/javascript.php';
    ?>


</body><!-- End of .page_wrapper -->


</html>