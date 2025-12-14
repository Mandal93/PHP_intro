<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?? "Home" ?> | Intro Project</title>
    <link rel="stylesheet" href="static/css/main.css">
</head>
<body>
    <!-- <h1>Intro Project</h1> -->
     <!-- Menu  -->
    <div class="menu">
      <a href="/BCA_Intro/">Home</a> |
      <a href="/BCA_Intro/about.php">About Us</a> |
      <a href="/BCA_Intro/contact.php">Contact Us</a> |
      <?php
      if(isset($_SESSION['role'])&& $_SESSION['role'] == 2){
          echo '<a href="/BCA_Intro/Dashboard">Dashboard</a> |';
          echo '<a href="/BCA_Intro/logout.php">Logout</a> |';
      }else{
         ?>
      <a href="/BCA_Intro/regiter.php">Register</a> |
      <a href="/BCA_Intro/login.php">Log Out</a> |
      
      <?php

      }
      ?>
     
    </div>

    <div>