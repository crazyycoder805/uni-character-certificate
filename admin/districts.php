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
            <li class="breadcrumb-item active">Districts</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                if (isset($_GET['edit'])) {

                                    $edit_id = $_GET['edit'];

                                    $fetch = mysqli_query($connection, "SELECT * FROM districts WHERE district_id = '$edit_id'");
                                    $record = mysqli_fetch_array($fetch);

                                    $district = $record['district_name'];

                                    ?>
                                    <form action="" method="post">
                                        <?php

                                            if (isset($_POST['update'])) {
                                                
                                                $district_name = $_POST['district_name'];

                                                $errors = [];

                                                if (preg_match('~[0-9]~', $district_name)) {
                                                    
                                                    $errors[] = " District Name Should Not Contain Numbers.";

                                                }

                                                if (!empty($errors)) {
                                                    
                                                    foreach ($errors as $error) {
                                                        ?>
                                                        
                                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            <strong>Alert!</strong> <?php echo $error; ?>
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <?php
                                                    }

                                                } else {

                                                    $update_query = mysqli_query($connection, "UPDATE districts SET district_name = '$district_name' WHERE district_id = '$edit_id'");
                                                    ?>
                                                    
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            <strong>Alert!</strong> District Updated Successfully!!!
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    <?php
                                                }

                                            }

                                        ?>
                                        <div class="form-group">
                                            <label>District</label>
                                            <input type="text" name="district_name" value="<?php echo $district; ?>" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="update" value="Update" class="btn btn-primary">
                                            <a href="districts.php" class="btn btn-warning">Cancel</a>
                                        </div>
                                    </form>
                                    <?php
                                } else {
                                ?>
                                <form action="" method="POST">
                                    <?php

                                        if (isset($_POST['add'])) {
                                            
                                            $country_id = $_POST['country_id'];
                                            $district_name = $_POST['district_name'];

                                            $errors = [];

                                            if (preg_match('~[0-9]~', $district_name)) {
                                                
                                                $errors[] = " District Name Should Not Contain Numbers.";

                                            }

                                            $check = mysqli_query($connection, "SELECT * FROM districts WHERE district_name = '$district_name'");
                                            $count = mysqli_num_rows($check);

                                            if ($count > 0) {
                                                
                                                $errors[] = " District Name Already Exists.";

                                            }

                                            if (!empty($errors)) {
                                                
                                                foreach ($errors as $error) {
                                                    ?>
                                                    
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <strong>Alert!</strong> <?php echo $error; ?>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <?php
                                                }

                                            } else {

                                                $insert_query = mysqli_query($connection, "INSERT INTO districts(country_id, district_name) VALUES('$country_id', '$district_name')");
                                                ?>
                                               
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <strong>Alert!</strong> District Added Successfully!!!
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <?php
                                            }

                                        }

                                    ?>
                                    <div class="form-group">

                                        <label>Country</label>
                                        <select name="country_id" class="form-control" required="">
                                            <option value="">Select Country</option>
                                            <?php
                                                $fetch_countries = mysqli_query($connection, "SELECT * FROM countries");
                                                while ($row = mysqli_fetch_array($fetch_countries)) {
                                                    ?>
                                                    <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>
                                                    <?php
                                                }

                                            ?>
                                            
                                        </select>

                                    </div>
                                    <div class="form-group">

                                        <label>District Name</label>
                                        <input type="text" name="district_name" placeholder="Enter district" class="form-control" required="">

                                    </div>

                                    <div class="form-group text-center">

                                        <input type="submit" name="add" class="btn btn-primary">

                                    </div>

                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title mb-4">All Districts</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="dataTable" class="table v-middle">
                                        <thead>
                                            <tr class="bg-dark text-light">
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">District Name</th>
                                                <th class="border-top-0">Edit</th>
                                                <th class="border-top-0">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $k = 1;
                                            $fetch_data = mysqli_query($connection, "SELECT * FROM districts");
                                            $count = mysqli_num_rows($fetch_data);

                                            while ($row = mysqli_fetch_array($fetch_data)) {
                                                
                                                ?>
                                                <tr>
                                                    <td><?php echo $k; ?></td>
                                                    <td><?php echo $row['district_name']; ?></td>
                                                    <td>
                                                        <a href="districts.php?edit=<?php echo $row['district_id']; ?>">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="districts.php?delete=<?php echo $row['district_id']; ?>">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $k++;
                                            }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                if (isset($_GET['delete'])) {
                    
                    $delete_id = $_GET['delete'];

                    mysqli_query($connection, "DELETE FROM districts WHERE district_id = '$delete_id'");

                    header("Location: districts.php");

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
