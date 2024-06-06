<?php include("includes/head.php"); ?>

<?php include("includes/top-nav.php"); ?>

<div id="wrapper">

    <!-- Sidebar -->
    <?php include("includes/sidebar.php"); ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>
            <?php

            $fetch_countries = mysqli_query($connection, "SELECT * FROM countries");
            $count_countires = mysqli_num_rows($fetch_countries);

            $fetch_cities = mysqli_query($connection, "SELECT * FROM cities");
            $count_cities = mysqli_num_rows($fetch_cities);

            $fetch_districts = mysqli_query($connection, "SELECT * FROM districts");
            $count_districts = mysqli_num_rows($fetch_districts);

            $fetch_companies = mysqli_query($connection, "SELECT * FROM charactercertificate");
            $count_certificates = mysqli_num_rows($fetch_companies);

            $fetch_jobseekers = mysqli_query($connection, "SELECT * FROM contact_messages");
            $count_contact_messages = mysqli_num_rows($fetch_jobseekers);

            $fetch_educations = mysqli_query($connection, "SELECT * FROM fir");
            $count_fir = mysqli_num_rows($fetch_educations);

            $fetch_skills = mysqli_query($connection, "SELECT * FROM police_station");
            $count_police_station = mysqli_num_rows($fetch_skills);

            $fetch_jobs = mysqli_query($connection, "SELECT * FROM users");
            $count_users = mysqli_num_rows($fetch_jobs);


          ?>

            <div class="row">

                <div class="col-md-3 mb-4">

                    <div class="card">

                        <div class="card-body">

                            <h5>Countries</h5>
                            <p><?php echo $count_countires; ?></p>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card">

                        <div class="card-body">

                            <h5>Cities</h5>
                            <p><?php echo $count_cities; ?></p>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card">

                        <div class="card-body">

                            <h5>Districts</h5>
                            <p><?php echo $count_districts; ?> </p>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card">

                        <div class="card-body">

                            <h5>Certificates</h5>
                            <p><?php echo $count_certificates; ?></p>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card">

                        <div class="card-body">

                            <h5>Contact messages</h5>
                            <p><?php echo $count_contact_messages; ?></p>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card">

                        <div class="card-body">

                            <h5>FIR'S</h5>
                            <p><?php echo $count_fir; ?></p>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card">

                        <div class="card-body">

                            <h5>Police Stations</h5>
                            <p><?php echo $count_police_station; ?></p>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card">

                        <div class="card-body">

                            <h5>Users</h5>
                            <p><?php echo $count_users; ?></p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<?php include("includes/footer.php"); ?>