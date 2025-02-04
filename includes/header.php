<?php
//Seesion file contains code that starts/resumes a session
//Placing it in the header file will include it on every page allowing session capabilities to be used accross the website.

require_once 'includes/session.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/site.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <title>International Men's Retreat - <?php echo $title ?> </title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">
        <a class="navbar-brand " href="index.php">
            <img src="uploads/men.jpg" width="60" height="60"
                class="d-inline-block align-top rounded-circle border border-success" alt="" loading="lazy">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
                <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="regform1.php">Register Now</a>
                <!-- change back to loginreservation.php -->
                <a class="nav-link" href="viewreservation.php">Reservations</a>
                <a class="nav-link" href="viewrecords.php">Records</a>
                

                <!-- Google search   -->
                <form class="form-inline" action="https://www.google.com/search" method="GET">
                    <input class="form-control mr-sm-2" type="text" name="q" placeholder="Google Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                        value="Google Search">Search</button>
                </form>

                
                <!--
                <a class="nav-link" href="view.php">View Attendee</a>           
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                -->
            </div>
            <div class="navbar-nav ml-auto">

                <?php 
                  if(!isset($_SESSION['userid'])) {
                ?>
               
                <p class="text-info fs-2"><?php echo date("Y-m-d h:i:sa") ?></p>
            
                <a class="nav-link active" href="login.php">Login <span class="sr-only">(current)</span></a>
                <!--<a class="nav-link" href="viewrecords.php">View Attendees</a>-->

                <?php } else { ?>
                <a class="nav-item nav-link active" href="a"><span> Hello <?php echo $_SESSION['username']  ?> !
                    </span><span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="logout.php">Logout <span class="sr-only">(current)</span></a>

                <?php  }?>

            </div>
        </div>
    </nav>
    <div class="container">

    