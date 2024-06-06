<!DOCTYPE html>
<html lang="en">
<?php 
require_once 'assets/includes/head.php';
?>
<?php 
if (!isset($_SESSION['git_uni_police_username'])) {
    header("location:index.php");
}
$success = "";
$error = "";

if (isset($_POST['firstname'])) { 
    if (!empty($_POST['address']) && !empty($_POST['firstname']) && !empty($_POST['rs']) 
    && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['contact_number'])) {
            if ($pdo->validateInput($_POST["firstname"], "firstname")) {
                if ($pdo->validateInput($_POST["lastname"], "lastname")) {
                    if ($pdo->validateInput($_POST["email"], "email")) {
                        if ($pdo->validateInput($_POST["contact_number"], "phone")) {
                                if (!$pdo->isDataInserted("charactercertificate", ['email' => $_POST['email']])) {
                                    if (!$pdo->isDataInserted("charactercertificate", ['contact_number' => $_POST['contact_number']])) {
                                        if ($pdo->create("charactercertificate", ['user_id' => $_SESSION['git_uni_police_user_id'], 
                                        'full_name' => $_POST['firstname'] . " " . $_POST['lastname'], 
                                        'date_of_birth' => $_POST['dob'],
                                        'reason_for_certificate' => $_POST['rs'],
                                        'status' => "Pending",
                                        'email' => $_POST['email'], 
                                        'address' => $_POST['address'], 
                                        'contact_number' => $_POST['contact_number']])) {
                                            $success = "Certificate has been generated, Please wait until the status get approves, View status <a href='userpanel/'>Status</a>";
                                        }
                                    } else {
                                        $error = "Phone number is already registerd.";
                                    }
                                   
                                } else {
                                    $error = "Email is already registerd.";
                                }
                            
                        } else {
                            $error = $pdo->validationErr;
                        }
                    } else {
                        $error = $pdo->validationErr;
                    }
                } else {
                    $error = $pdo->validationErr;
                }
            } else {
                $error = $pdo->validationErr;
            }
    
    } else {
        $error = "All fields are required.";
    }
    
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

                    <div class="col-md form-column">
                        <div class="form-inner">
                            <form method="post" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input type="text" id="firstname"
                                                value="<?php echo isset($_SESSION['git_uni_police_fname']) ? $_SESSION['git_uni_police_fname'] : '' ?>"
                                                name="firstname" required="">
                                        </div>

                                    </div>
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input type="text" id="lastname"
                                                value="<?php echo isset($_SESSION['git_uni_police_lname']) ? $_SESSION['git_uni_police_lname'] : '' ?>"
                                                name="lastname" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Date of birth</label>
                                            <input type="date" id="dob"
                                                value="<?php echo isset($_SESSION['git_uni_police_dob']) ? $_SESSION['git_uni_police_dob'] : '' ?>"
                                                name="dob" required="">
                                        </div>

                                    </div>
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Contact number</label>
                                            <input type="text" id="contact_number"
                                                value="<?php echo isset($_SESSION['git_uni_police_phone']) ? $_SESSION['git_uni_police_phone'] : '' ?>"
                                                name="contact_number" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" id="email"
                                                value="<?php echo isset($_SESSION['git_uni_police_email']) ? $_SESSION['git_uni_police_email'] : '' ?>"
                                                name="email" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea rows="10" cols="1" id="address" name="address"
                                                required=""><?php echo isset($_SESSION['git_uni_police_address']) ? $_SESSION['git_uni_police_address'] : '' ?></textarea>
                                        </div>

                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Reason for certificate</label>
                                            <textarea rows="10" cols="1" id="rs" name="rs"
                                                required=""></textarea>
                                        </div>

                                    </div>

                                </div>
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit"
                                            name="submit-form">Generate</button>
                                    </div>
                                </div>
                                <br />

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