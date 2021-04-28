<?php
$toaddress = "brboyd@mail.lipscomb.edu";
$fromaddress = $_POST["email"];
$name = $_POST["name"];
$comments = $name + " sent you a message:\n\n" +  $_POST["comments"];
$subject = $name + " wants to get in touch.";

mail($toaddress, $subject, $comments, $fromaddress);
?>


<html lang="en">
<head>
    <title>Message Sent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script src="https://kit.fontawesome.com/d687bf9a07.js" crossorigin="anonymous"></script>
    
    <!-- animate on scroll effect -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- parallax effect -->
    <link rel="stylesheet" href="jarallax.css">
    <script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>
    
    <script src="scripts.js"></script>

    <link rel="icon" href="favicon.ico" type="image/ico" sizes="16x16">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-black text-white">
    <header id="top" name="top">
        <div class="container">
            <img width="35%" src="logo-transparent.png" class=" imd-fluid mx-auto d-block" style="max-width: 100%"
                alt="brett boyd logo">
        </div>
    </header>

<div id="wrapper" class="_hidden">

<!-- collapsible navbar -->
<nav class="navbar navbar-expand-md sticky-top bg-black navbar-dark" style="text-align: center">
    <div class="container">
        <!-- Brand (mobile/small screen only) -->
        <a class="navbar-brand d-sm-block d-md-none d-lg-none d-xl-none" href="#top">About Me</a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler ml-auto my-1" type="button" data-toggle="collapse"
            data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse w-100" id="collapsibleNavbar">
            <ul class="navbar-nav nav-pills justify-content-center w-100">
                <li class="nav-item mx-2 my-1 shadow zoom">
                    <a class="nav-link bg-2 text-dark link-anim" href="index.html">Home</a>
                </li>
                <li class="nav-item mx-2 my-1 shadow zoom">
                    <a class="nav-link bg-2 text-dark link-anim" href="projects.html">Projects</a>
                </li>
                <li class="nav-item mx-2 my-1 shadow zoom">
                    <a class="nav-link bg-2 text-dark link-anim" href="resume.html">My Resume</a>
                </li>
                <li class="nav-item mx-2 my-1 shadow zoom">
                    <a class="nav-link bg-2 text-dark link-anim" href="about-me.html">About me</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-- short bio with side img-->
<div class="container-fluid my-5 bg-1 p-4 shadow" data-aos="fade-up">
<div class="container">
    <div class="mb-3">
        <h3 class="text-center">Message sent!</h3>
    </div>
    <p>
        Thanks for getting in touch! I'll get back to you soon.
    </p>
    
</div>
</div>


<!-- copyright section -->
<footer>
    <div class="d-flex pt-5 m-5 justify-content-center">
        &copy; Copyright 2021 - Brett Boyd
    </div>
    <br><br>
</footer>

</div>

<!-- animate on scroll script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({once: true});
</script>
</body>
</html>
