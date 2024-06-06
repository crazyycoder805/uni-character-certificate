<?php include("includes/head.php");

date_default_timezone_set('Asia/Karachi');
?>

<?php include("includes/top-nav.php"); ?>

<div id="wrapper">

    <!-- Sidebar -->
    <?php include("includes/sidebar.php"); ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Gigs</li>
            </ol>

            <!-- Icon Cards-->
            <div class="row">

                <div class="col-md">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title mb-4">All Orders</h4>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTable" class="table v-middle">
                                    <thead>
                                        <tr class="bg-dark text-light">
                                            <th class="border-top-0">Username</th>

                                            <th class="border-top-0">Full name</th>
                                            <th class="border-top-0">Date of birth</th>
                                            <th class="border-top-0">Address</th>
                                            <th class="border-top-0">Phone</th>

                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">RFC</th>
                                            <th class="border-top-0">Application date</th>
                                            <th class="border-top-0">Issued date</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Actions</th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                            $k = 1;
                                            $fetch_data = mysqli_query($connection, "SELECT * FROM charactercertificate");
                                            $count = mysqli_num_rows($fetch_data);

                                            while ($row = mysqli_fetch_array($fetch_data)) {
                                                $query = mysqli_query($connection, "SELECT * FROM users WHERE id = {$row['user_id']}");
                                                $user = mysqli_fetch_array($query);
                                                ?>
                                        <tr>
                                            <td><?php echo $user['username']; ?>
                                            </td>
                                            <td><?php echo $row['full_name']; ?>
                                            </td>
                                            <td><?php echo $row['date_of_birth']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['contact_number']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td>
                                                <?php echo $row['reason_for_certificate']; ?>
                                            </td>
                                            <td><?php echo $row['application_date']; ?></td>
                                            <td> <?php echo $row['certificate_issued_date']; ?>
                                            </td>
                                            <td> <?php echo $row['status']; ?>
                                            </td>
                                            <td> <?php if ($row['status'] == "Pending") { ?>
                                                <a href="certificates.php?ap=<?php echo $row['user_id']; ?>">Approve</a>
                                                ||

                                                <a href="certificates.php?cn=<?php echo $row['user_id']; ?>">Cancel</a>
                                                ||

                                                <a href="certificates.php?de=<?php echo $row['user_id']; ?>">Delete</a>
                                                <?php } else { ?>
                                                <a href="certificates.php?de=<?php echo $row['user_id']; ?>">Delete</a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php
                                                $k++;
                                            }
                                                ?>
                                    </tbody>
                                </table>
                                <?php

if (isset($_GET['ap'])) {
    
    $js_id = $_GET['ap'];

    $ap = mysqli_query($connection, "UPDATE charactercertificate SET status = 'Approved' , certificate_issued_date = '". date('Y-m-d H:i:s')."' WHERE user_id = '$js_id'");

    header("Location: certificates.php");

}

if (isset($_GET['cn'])) {
    
    $js_id = $_GET['cn'];

    $cn = mysqli_query($connection, "UPDATE charactercertificate SET status = 'Rejected' WHERE user_id = '$js_id'");

    header("Location: certificates.php");

}

if (isset($_GET['de'])) {
    
    $js_id = $_GET['de'];

    $de = mysqli_query($connection, "DELETE FROM charactercertificate WHERE user_id = '$js_id'");

    header("Location: certificates.php");

}


?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if (isset($_GET['delete'])) {
                    
                    $delete_id = $_GET['delete'];

                    mysqli_query($connection, "DELETE FROM gigs WHERE id = '$delete_id'");

                    header("Location: gigs.php");

                }
            ?>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<?php include("includes/footer.php"); ?>