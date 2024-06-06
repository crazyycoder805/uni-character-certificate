<!DOCTYPE html>

<html lang="zxx">

<?php require_once 'assets/includes/head.php'; 





// $total_certificate = $pdo->read("charactercertificate");
// $total_cities = $pdo->read("cities");
// $total_contact_messages = $pdo->read("contact_messages");

// $total_countries = $pdo->read("countries");
// $total_disctricts = $pdo->read("food_disctricts");



// $total_fir = $pdo->read("fir", ['']);
// $total_police_station = $pdo->read("stripe_police_station");

?>

<body>
    <?php 
    require_once 'assets/includes/preloader.php'; ?>
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
                    <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h4 class="page-title bold">Dashboard</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index-2.html"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Panel</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Start -->
                <div class="row">
                    <div class="col-md">
                        <h1>Welcome</h1>
                    </div>
                </div>
                <!-- Revanue Status Start -->
                <!-- <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4 class="has-btn">Total Revanue <span></span></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 d-flex flex-row justify-content-center">
                                        <div class="chart-holder">
                                            <div id="chartL"></div>
                                        </div>
                                    </div>

                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Products Orders Start -->

                <?php require_once 'assets/includes/footer.php'; ?>
            </div>
        </div>
    </div>


    <!-- Preview Setting Box -->
    <?php require_once 'assets/includes/settings-sidebar.php'; ?>
    <!-- Preview Setting -->
    <?php require_once 'assets/includes/javascript.php'; ?>
</body>


</html>c