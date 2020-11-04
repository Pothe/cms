<?php ob_start(); ?>
<?php include('../includes/db.php'); ?>
<?php include("functions.php"); ?>
<?php session_start() ; ?>
<?php
 if (!isset($_SESSION['user_role'])) {
    header("Location: ../index.php");
  }else{
   if ($_SESSION['user_role'] =='student' ) {
    header("Location: ../student_site");
    }elseif($_SESSION['user_role'] == 'subscribe') {
    header("Location: ../index.php");
   }
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

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/0e967f6282.js" crossorigin="anonymous"></script>
    <!-- Custom Fonts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
    <script src="js/scripts.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>