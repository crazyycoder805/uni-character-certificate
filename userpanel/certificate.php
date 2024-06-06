<!DOCTYPE html>

<html lang="zxx">
<?php require_once 'assets/includes/head.php'; ?>
<?php

$success = "";
$error = "";
$id = "";

$certificate = $pdo->read("charactercertificate", ['user_id' => $_SESSION['git_uni_police_user_id']]);




 
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
                                <h4 class="page-title">Certificate</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Certificate</li>
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
                                    <table id="example1" class="table table-striped table-bordered dt-responsive">
                                        <thead>
                                            <tr>
                                                <th>Full name</th>
                                                <th>Date of birth</th>
                                                <th>Address</th>
                                                <th>Phone</th>

                                                <th>Email</th>
                                                <th>RFC</th>
                                                <th>Application date</th>
                                                <th>Issued date</th>
                                                <th>Status</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><?php echo $certificate[0]['full_name']; ?>
                                                </td>
                                                <td><?php echo $certificate[0]['date_of_birth']; ?></td>
                                                <td><?php echo $certificate[0]['address']; ?></td>
                                                <td><?php echo $certificate[0]['contact_number']; ?></td>
                                                <td><?php echo $certificate[0]['email']; ?></td>
                                                <td>
                                                    <?php echo $certificate[0]['reason_for_certificate']; ?>
                                                </td>
                                                <td><?php echo $certificate[0]['application_date']; ?></td>
                                                <td> <?php echo $certificate[0]['certificate_issued_date']; ?>
                                                </td>
                                                <td> <?php echo $certificate[0]['status']; ?>
                                                </td>
                                                <td> <?php if ($certificate[0]['status'] != "Pending") { ?>
                                                    <a target="_blank"
                                                        href="../cc-view.php?i=<?php echo $certificate[0]['user_id']; ?>">Print certficate</a>
                                                    <?php } else { ?>
                                                    NULL
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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