<!DOCTYPE html>

<html lang="zxx">
<?php require_once 'assets/includes/head.php'; ?>
<?php

$success = "";
$error = "";
$id = "";

if (isset($_POST['fname'])) { 
    if (!empty($_POST['address']) && !empty($_POST['fname']) 
    && !empty($_POST['lname']) && !empty($_POST['dob']) && !empty($_POST['phone'])) {
        if ($pdo->validateInput($_POST["fname"], "firstname")) {
            if ($pdo->validateInput($_POST["lname"], "lastname")) {
                if ($pdo->validateInput($_POST["phone"], "phone")) {
                    if (!$pdo->isDataInsertedUpdate("users", ['contact' => $_POST['phone']])) {
                        if ($pdo->update("users", ['id' => $_SESSION['git_uni_police_user_id']], ['first_name' => $_POST['fname'], 
                        'dob' => $_POST['dob'],
                        'last_name' => $_POST['lname'], 'address' => $_POST['address'], 
                        'contact' => $_POST['phone']])) {
                            $success = "Profile updated";
                            session_unset();
                            session_destroy();
                            header("location:../index.php");
                            
                        } else {
                            $error = "Something went wrong.";
                            
                        }
                    } else {
                        $error = "Phone number is already registerd.";
                        
                    }
                            
                    
                    
                } else {
                    $error = "Phone number is invalid.";
                    
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

<body>
    <?php 
    
    require_once 'assets/includes/preloader.php'; 
    
    ?>

    <!-- Main Body -->
    <div class="page-wrapper">

        <!-- Header Start -->
        <?php require_once 'assets/includes/navbar.php'; ?>
        <!-- Sidebar Start -->
        <?php require_once 'assets/includes/sidebar.php'; ?>
        <!-- Container Start -->
        <div class="page-wrapper">
            <div class="main-content">
                <!-- Page Title Start -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

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
                            <?php echo $error; ?>
                        </div>

                        <?php } ?>
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h4 class="page-title">Edit Profile Form</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Edit Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- From Start -->
                <div class="from-wrapper">
                    <div class="row">

                        <div class="col-xl col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">

                                <div class="card-body">

                                    <form class="separate-form" method="post" enctype="multipart/form-data">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="row">

                                                <div class="col-md">

                                                    <div class="form-group">
                                                        <label for="fname" class="col-form-label">First name</label>
                                                        <input value="<?php echo $_SESSION['git_uni_police_fname']; ?>"
                                                            class="form-control" name="fname" type="text"
                                                            placeholder="Enter First name" id="fname">
                                                    </div>
                                                </div>

                                                <div class="col-md">

                                                    <div class="form-group">
                                                        <label for="lname" class="col-form-label">Last name</label>
                                                        <input value="<?php echo $_SESSION['git_uni_police_lname']; ?>"
                                                            class="form-control" name="lname" type="text"
                                                            placeholder="Enter Last name" id="lname">
                                                    </div>
                                                </div>

                                                <div class="col-md">

                                                    <div class="form-group">
                                                        <label for="phone" class="col-form-label">Phone</label>
                                                        <input value="<?php echo $_SESSION['git_uni_police_phone']; ?>"
                                                            class="form-control" name="phone" type="text"
                                                            placeholder="Enter Phone" id="phone">
                                                    </div>
                                                </div>




                                            </div>

                                            <div class="row">
                                                <div class="col-md">

                                                    <div class="form-group">
                                                        <label for="dob" class="col-form-label">Date of birth</label>
                                                        <input value="<?php echo $_SESSION['git_uni_police_dob']; ?>"
                                                            class="form-control" name="dob" type="date"
                                                            placeholder="Enter Date Of Birth" id="dob">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md">

                                                    <div class="form-group">
                                                        <label for="address" class="col-form-label">Date of
                                                            birth</label>
                                                        <textarea class="form-control" name="address" rows="10" col="1"
                                                            placeholder="Enter Address"
                                                            id="address"><?php echo $_SESSION['git_uni_police_address']; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    <div class="form-group mb-3">
                                                        <button class="btn btn-primary" type="reset">reset</button>
                                                        <input name="submit" class="btn btn-danger" type="submit">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <?php require_once 'assets/includes/footer.php'; ?>

            </div>
        </div>
    </div>


    <!-- Preview Setting Box -->
    <?php require_once 'assets/includes/settings-sidebar.php'; ?>
    <!-- Preview Setting -->
    <?php require_once 'assets/includes/javascript.php'; ?>
    <script>
    $(document).ready(function() {
        $('#example1').DataTable();
    });
    </script>

</body>

</html>