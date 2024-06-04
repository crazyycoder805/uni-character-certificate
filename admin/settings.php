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
            <li class="breadcrumb-item active">Profile Settings</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">

            <div class="col-md-6 pl-5 pr-5" style="border: 1px solid silver;">
              <h3 class="pt-5 pb-4">Profile Details</h3>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="pt-4 pb-4"><strong>Username</strong></td>
                      <td class="pt-4 pb-4"><?php echo $admin['username']; ?></td>
                    </tr>
                    <tr>
                      <td class="pt-4 pb-4"><strong>Password</strong></td>
                      <td class="pt-4 pb-4"><?php echo $admin['password']; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pt-5 pl-5 pr-5 pb-5" style="border: 1px solid silver;">
                <form action="" method="POST">
                  <?php
                    if (isset($_POST['update_profile'])) {
                      
                      $form_username = $_POST['username'];
                      $form_password = $_POST['password'];

                      $update = mysqli_query($connection, "UPDATE admin SET username = '$form_username', password = '$form_password'");

                      echo "<div class='alert alert-success'>Profile Updated Successfully!</div>";

                    }
                  ?>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $admin['username']; ?>" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" value="<?php echo $admin['password']; ?>" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="update_profile" class="btn btn-primary btn-block">
                  </div>
                </form>
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
