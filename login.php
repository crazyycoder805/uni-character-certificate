<!DOCTYPE html>
<html lang="en">
<?php 
require_once 'assets/includes/head.php';
?>
<!-- page wrapper -->
<?php 
if (isset($_SESSION['git_uni_police_username'])) {
    header("location:index.php");
} 
if (isset($_POST['username'])) { 
    if (!empty($_POST['password']) && !empty($_POST['username'])) {
        $user = $pdo->read('users', ['username'=>$_POST['username'], 'password'=>$_POST['password']]);
    
        
        if (!empty($user)) {
            $_SESSION['git_uni_police_user_id'] = $user[0]['id'];

            $_SESSION['git_uni_police_username'] = $user[0]['username'];

            $_SESSION['git_uni_police_email'] = $user[0]['email'];

            $_SESSION['git_uni_police_fname'] = $user[0]['first_name'];
            $_SESSION['git_uni_police_lname'] = $user[0]['last_name'];
            $_SESSION['git_uni_police_phone'] = $user[0]['contact'];
            $_SESSION['git_uni_police_address'] = $user[0]['address'];
           header("location:index.php");
        } else {
            $error = "User doesn't exsit";
        }
        
    } else {
        $error = "(Username Or Email) & Password must be filled correctly.";
    }
    
}
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