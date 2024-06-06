<!DOCTYPE html>
<html lang="en">
<?php 
require_once 'assets/includes/head.php';
?>

<?php 
$success = "";
$error = "";
if (!empty($_POST['name']) && !empty($_POST['email'])
&& !empty($_POST['phone']) && !empty($_POST['mesage'])) {
    if ($pdo->validateInput($_POST['email'], 'email')) {
        if ($pdo->validateInput($_POST['phone'], 'phone')) {
            if ($pdo->create("contact_messages", ['name' => $_POST['name']
            , 'email' => $_POST['email'], 
            'phone' => $_POST['phone'], 
            'message' => $_POST['message_contact']])) {
                $success = 'Message has been sent, we will soon contact you.';
                $pdo->headTo("index.php", 3000);
            } else {
                $error = "Something went wrong.";
            }
        } else {
            $error = 'Invalid phone number format.';
        }
    } else {
        $error = 'Invalid email format.';
    }
} else {
    $error = "All fields are required.";
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

        <!-- page-title -->
        <section class="page-title p_relative centred">
            <div class="bg-layer" style="background-image: url(assets/images/police/4.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad-2">
            <div class="bg-layer" style="background-image: url(assets/images/background/contact-bg.jpg);"></div>
            <div class="auto-container">
                <div class="row">
                    <div class="col-md">
                        <?php
                        if (!empty($success)) {
                        ?>
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                            <?php echo $success; ?>
                        </div>
                        <?php } else if (!empty($error)) { ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                            <?php if(is_string($error)){ echo $error;} else { foreach($error as $err){ echo $err . "<br />";}} ?>
                        </div>

                        <?php } ?>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content_block_seven">
                            <div class="content-box">
                                <div class="sec-title mb_60">
                                    <span class="sub-title">Contact Us</span>
                                    <h2>Contact Info</h2>
                                </div>
                                <div class="inner-box pb_20">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="assets/images/icons/icon-14.svg" alt="">
                                                </div>
                                                <h5>Head Office:</h5>
                                                <p>Mirpur, AJK</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="assets/images/icons/icon-15.svg" alt="">
                                                </div>
                                                <h5>Opening Hours:</h5>
                                                <p>Mon - Fri 8:00AM - 6:00PM</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="assets/images/icons/icon-16.svg" alt="">
                                                </div>
                                                <h5>Phone No:</h5>
                                                <p><a href="tel:+12345678910">+12345678910</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="assets/images/icons/icon-17.svg" alt="">
                                                </div>
                                                <h5>Email:</h5>
                                                <p><a
                                                        href="mailto:info@policeverification.com">info@policeverification.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" action="http://azim.hostlin.com/Insighteye/sendemail.php"
                                id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 left-column">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" name="name" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Phone</label>
                                            <input type="text" name="phone" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 right-column">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Contact With
                                            Us</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
                <div class="google-map" id="contact-google-map" data-map-lat="40.712776" data-map-lng="-74.005974"
                    data-icon-path="assets/images/icons/map-marker.png"
                    data-map-title="Brooklyn, New York, United Kingdom" data-map-zoom="12" data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </section>
        <!-- google-map-section -->


        <?php 
        require_once 'assets/includes/footer.php';
        ?>
    </div>


    <?php 
    require_once 'assets/includes/javascript.php';
    ?>


</body><!-- End of .page_wrapper -->


</html>