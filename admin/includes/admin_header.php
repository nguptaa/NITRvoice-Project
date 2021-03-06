<?php include "../includes/db.php" ?>
<?php include "functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php
if(!isset($_SESSION['user_role'])){

  header("Location: ../index.php ");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php
  if($_SESSION['user_role']=="admin"){
    ?>
  <title>NITRvoice-ADMIN Panel</title>
<?php }else{
  ?>
  <title>NITRvoice-SUBS Panel</title>

<?php } ?>

  <!-- favicon -->
  <link rel="icon" type="image/gif" href="../Images/nitrlogo.png" />

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/4422dfec7e.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="css/loader.css" type="text/css">

  <!-- google charts -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>
