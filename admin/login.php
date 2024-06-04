<?php ob_start(); ?>
<?php session_start(); ?>
<?php $connection = mysqli_connect("localhost", "root", "", "jp"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Login</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="login.php" method="POST">
          <?php

          if (isset($_POST['login'])) {

            $form_username = mysqli_real_escape_string($connection, $_POST['username']);

            $form_password = mysqli_real_escape_string($connection, $_POST['password']);

            $check_username = mysqli_query($connection, "SELECT * FROM admin WHERE username = '$form_username'");
            $count = mysqli_num_rows($check_username);

            if ($count > 0) {

              $row = mysqli_fetch_array($check_username);

              if ($row['password'] == $form_password) {

                $_SESSION['admin_logged_in'] = "true";

                header("Location: index.php");
              } else {
          ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Alert!</strong> Password is Invalid.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              <?php
              }
            } else {
              ?>

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Alert!</strong> Username is Invalid.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

          <?php
            }
          }

          ?>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required="">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
          </div>
          <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>