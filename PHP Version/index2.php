<?php

session_start();

include("php/connection.php");
include("php/function.php");

$user_data = check_login($con);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="IMAGE/dumbbell1_icon.ico" />
    <link rel="stylesheet" href="CSS/index/index.css?v=9999">

    <title><?php echo $user_data['name']; ?></title>
</head>

<style>
    .w3-animate-fading {
        animation: fading 10s infinite
    }

    @keyframes fading {
        0% {
            opacity: 0
        }

        50% {
            opacity: 1
        }

        100% {
            opacity: .5
        }
    }
</style>

<body>

    <header>
        <nav>
            <div class="logo">
                <span class="any">Any</span><span class="gym">GYM</span><img src="IMAGE/aboutus/dumbbell_black.png" alt="GYM_Logo" width="40px" height="50px">
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Shop</a></li>
            </ul>
        </nav>

        <div class="slide">

            <div class="-content">
                <img class="mySlides w3-animate-fading" src="Image/1.png" alt="" width="100%" height="800px">
                <img class="mySlides w3-animate-fading" src="Image/2.png" alt="" width="100%" height="800px">
                <img class="mySlides w3-animate-fading" src="Image/3.png" alt="" width="100%" height="800px">
                <img class="mySlides w3-animate-fading" src="Image/4.png" alt="" width="100%" height="800px">
            </div>
        </div>

    </header>

    <section>

    </section>

</body>
<script>
    //header
    window.addEventListener("scroll", function() {
        var header = document.querySelector("nav");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
</script>


<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 5000);
    }
</script>

</html>