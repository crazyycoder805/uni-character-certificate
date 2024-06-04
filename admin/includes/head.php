<?php include("config.php"); ?>
<?php

if (isset($_SESSION['admin_logged_in'])) {

  $fetch_admin_credentials = mysqli_query($connection, "SELECT * FROM admin");
  $admin = mysqli_fetch_array($fetch_admin_credentials);
} else {
  header("Location: login.php");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style>
    body {
      background-image: url(../images/gallery/pic7.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body id="page-top">