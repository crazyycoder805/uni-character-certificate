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
                    <h1>Login</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Login</li>
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
                                            <label>Username</label>
                                            <input type="text" id="username" name="username" required="">
                                        </div>

                                    </div>
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" id="password" name="password" required="">
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit"
                                            name="submit-form">Login</button>
                                    </div>
                                </div>
                                <br />
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <a href="signup.php">Doesn't have a account? Signup.</a>
                                        </div>

                                    </div>
                                    
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