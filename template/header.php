<?php
include('./database/ss.php');
$name = $_SESSION['login_user'] ?? "Login";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Start your development with FoodHut landing page."
    />
    <meta name="author" content="Devcrud" />
    <title>Food Hub</title>

    <!-- font icons -->
    <link
      rel="stylesheet"
      href="assets/vendors/themify-icons/css/themify-icons.css"
    />
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="assets/vendors/animate/animate.css" />

    <!-- Bootstrap + FoodHut main styles -->
    <link rel="stylesheet" href="assets/css/foodhut.css" />
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Navbar -->
    <nav
      class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top"
      data-spy="affix"
      data-offset-top="10"
    >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="./#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./#testmonial">Review</a>
          </li>
          
        </ul>
        <a class="navbar-brand m-auto" href="#">
          <img src="assets/imgs/logo.svg" class="brand-img" alt="" />
          <span class="brand-txt">Food Hub</span>
        </a>
        <ul class="navbar-nav">
          <!-- <li class="nav-item">
            <a class="nav-link" href="#blog"
              >Blog<span class="sr-only">(current)</span></a
            >
          </li> -->
          
          <li class="nav-item">
          <?php 
             if($name == 'Login'){
                echo "<a href='./user.php' class='nav-link'> $name </a>";
               } 
            else{
                 echo "<a href='./user.php' class='nav-link'> $name </a>";
               }
            ?>
          </li>
          <li class="nav-item">
             <a href="./admin.php" class="nav-link">
              Admin
             </a>
          </li>

          <!-- <li class="nav-item">
                    <a href="components.html" class="btn btn-primary ml-xl-4">Components</a>
                </li> -->
        </ul>
      </div>
    </nav>
