<!DOCTYPE html>
<html lang="en">
<?php 
require_once 'assets/includes/head.php';
?>
<?php 
if (isset($_SESSION['git_uni_police_username'])) {
    header("location:index.php");
}
$success = "";
$error = "";

if (isset($_POST['username'])) { 
    if (!empty($_POST['address']) && !empty($_POST['username']) && !empty($_POST['firstname']) 
    && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['contact_number']) && !empty($_POST['password'])) {
        if ($pdo->validateInput($_POST["username"], "username")) {
            if ($pdo->validateInput($_POST["firstname"], "firstname")) {
                if ($pdo->validateInput($_POST["lastname"], "lastname")) {
                    if ($pdo->validateInput($_POST["email"], "email")) {
                        if ($pdo->validateInput($_POST["contact_number"], "phone")) {
                            if ($pdo->validateInput($_POST["password"], "password")) {
                                if (!$pdo->isDataInserted("users", ['email' => $_POST['email']])) {
                                    if (!$pdo->isDataInserted("users", ['username' => $_POST['username']])) {
                                        if (!$pdo->isDataInserted("users", ['contact' => $_POST['contact_number']])) {
                                            if ($pdo->create("users", ['username' => $_POST['username'], 
                                            'password' => $_POST['password'], 'first_name' => $_POST['firstname'], 
                                            'dob' => $_POST['dob'],
                                            'email' => $_POST['email'], 'last_name' => $_POST['lastname'], 'address' => $_POST['address'], 
                                            'contact' => $_POST['contact_number']])) {
                                                $success = "Account created please sign in to proccess further. <a href='login.php'>Sign in</a>";
                                            }
                                        } else {
                                            $error = "Phone number is already registerd.";
                                        }
                                    } else {
                                        $error = "Username is already registerd.";
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
                $error = $pdo->validationErr;
            }
        }else {
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
        <section class="page-title p_relative centred">
            <div class="bg-layer" style="background-image: url(assets/images/police/5.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Signup</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Signup</li>
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

                    <div class="col-md form-column">
                        <div class="form-inner">
                            <form method="post"
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
                                            <label>Date of birth</label>
                                            <input type="date" id="dob" name="dob" required="">
                                        </div>

                                    </div>
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Contact number</label>
                                            <input type="text" id="contact_number" name="contact_number" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" id="email" name="email" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea rows="10" cols="1" id="address" name="address"
                                                required=""></textarea>
                                        </div>

                                    </div>

                                </div>
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
                                            name="submit-form">Signup</button>
                                    </div>
                                </div>
                                <br />
                                <div class="row clearfix">
                                    <div class="col-md left-column">
                                        <div class="form-group">
                                            <a href="login.php">Already have a account? Login.</a>
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