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
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Job Seekers</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="dataTable" class="table v-middle">
                        <thead>
                            <tr class="bg-dark text-light">
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Seeker Name</th>
                                <th class="border-top-0">Username</th>
                                <th class="border-top-0">Password</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Contact</th>
                                <th class="border-top-0">Picture</th>
                                <th class="border-top-0">Address</th>
                                <th class="border-top-0">Current Status</th>
                                <th class="border-top-0">Change Status</th>
                                <th class="border-top-0">Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $k = 1;
                            $fetch_data = mysqli_query($connection, "SELECT * FROM users");
                            $count = mysqli_num_rows($fetch_data);

                            while ($row = mysqli_fetch_array($fetch_data)) {
                                
                                ?>
                                <tr>
                                    <td><?php echo $k; ?></td>
                                    <td><strong><?php echo $row['first_name'] . $row['last_name']; ?></strong>
                                    </td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['contact']; ?></td>
                                    <td><img src="../img/jobseeker/<?php echo $row['picture']; ?>" style="width: 100px;height: 100px;"></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td>
                                        <?php

                                        if($row['status'] == "active") {
                                            ?>
                                            <a href='users.php?draft=<?php echo $row['js_id']; ?>'>Draft</a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href='users.php?active=<?php echo $row['js_id']; ?>'>Active</a>
                                            <?php
                                        }
                                        ?>
                                        
                                    </td>
                                    <td><?php echo $row['created']; ?></td>
                                </tr>
                                <?php
                                $k++;
                            }
                                ?>
                        </tbody>
                    </table>
                        <?php

                            if (isset($_GET['active'])) {
                                
                                $js_id = $_GET['active'];

                                $active = mysqli_query($connection, "UPDATE users SET status = 'active' WHERE js_id = '$js_id'");

                                header("Location: users.php");

                            }

                            if (isset($_GET['draft'])) {
                                
                                $js_id = $_GET['draft'];

                                $draft = mysqli_query($connection, "UPDATE users SET status = 'draft' WHERE js_id = '$js_id'");

                                header("Location: users.php");

                            }

                            if (isset($_GET['delete'])) {
                                
                                $js_id = $_GET['delete'];

                                $delete = mysqli_query($connection, "DELETE FROM users WHERE js_id = '$js_id'");

                                header("Location: users.php");

                            }


                        ?>
                </div>
            </div>
          </div>
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
