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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="CSS/index/index.css?v=999999">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="JS/index.js?v=99999"></script>

    <title><?php echo $user_data['name']; ?></title>
</head>

<style>
    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }
</style>

<body>

    <!-- <div class="video_show">
        <div class="header_cont">
            <img class="close_video" src="Image/cancel.png" alt="" width="40px">
        </div>
        <video src="Image/video/sport_online.mp4" width="100%" controls></video>

    </div> -->
    <!-- <div class="wellcome"> -->



    <!-- </div> -->

    <header>
        <div class="header">
            <div class="circle">
                <img src="Image/circle.gif" alt="" width="120%">
                <div class="soucialmedia">
                    <a href="www.twitter.com" target="_blank"><img src="IMAGE/twitter-toppage.png" alt="Twitter" width="10%"></a>
                    <a href="www.facebook.com" target="_blank"><img src="IMAGE/facebook-toppage.png" alt="FaceBook" width="11%"></a>
                    <a href="www.instagram.com" target="_blank"><img src="IMAGE/instagram-toppage.png" alt="Instagram" width="10%"></a>
                </div>
            </div>
            <div class="logo">
                <span class="any">Any</span><span class="gym">GYM</span><img src="IMAGE/dumbbell-logo.png" alt="GYM_Logo" width="40px" height="50px">
            </div>
            <div class="search">
                <input type="search" name="" id="" placeholder="  Search"><img class="img-search" src="IMAGE/search_48.png" alt="search" width="20px" height="20px">
                <a href=""><img class="img-shopping" src="IMAGE/shopping.png" alt="" width="20px" height="20px"></a>
                <a class="login" href="Login.php">
                    <img class="img_login" src="IMAGE/customer.png" alt="" width="30px" height="30px">
                </a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Shop</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="txt">
            <p>
                Work Hard In Silence
                Let Success Be Your
                Noise .
            </p>
            <div class="btn">
                <a href="Login.php" class="sign">Sign In</a>
                <div href="" class="video">
                    <a href=""><i class="fas fa-play"></i></a>
                    <label>WHATCH TUTORIAL</label>
                </div>
            </div>
            <div class="scroll">
                <a href="#scroll"><i class="fas fa-arrow-circle-down"></i><span>Scroll Down</span></a>
            </div>
        </div>
        <div class="pic">
            <img src="Image/fitness.png" alt="Fitness" width="90%">
        </div>
    </main>

    <section class="aboutus" id="scroll">

        <div class="txt">
            <img src="Image/tra.gif" alt="" width="35%">
            <div>
                <span>ABOUT US</span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores debitis amet delectus itaque
                    consequuntur mollitia neque et est quos tenetur quo ad, praesentium illum eveniet hic distinctio
                    impedit atque harum.
                </p>
            </div>
        </div>

        <div class="pic">
            <img src="Image/dribbble.jpg" alt="" width="75%">
        </div>
    </section>

    <section class="oursrvice">
        <span class="title">- Our Service</span>
        <div class="cards slideshow-container">
            <i class="fas fa-chevron-left prev" onclick="plusSlides(-1)"></i>
            <div class="card mySlides fade">
                <img src="Image/triceps.png" alt="">
                <span>The GYM</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus accusamus ab ex omnis tenetur porro sequi quasi labore modi aut.</span>
            </div>
            <div class="card mySlides fade">
                <img src="Image/dumbbell.png" alt="">
                <span>Free weights and
                    machinery</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus accusamus ab ex omnis tenetur porro sequi quasi labore modi aut.</span>
            </div>
            <div class="card mySlides fade">
                <img src="Image/heart_with_pulse.png" alt="">
                <span>Cardiolary Machines</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus accusamus ab ex omnis tenetur porro sequi quasi labore modi aut.</span>
            </div>
            <div class="card mySlides fade">
                <img src="Image/babys_room.ico" alt="">
                <span>Nursery Children</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus accusamus ab ex omnis tenetur porro sequi quasi labore modi aut.</span>
            </div>
            <i class="fas fa-chevron-right next" onclick="plusSlides(1)"></i>

        </div>

    </section>

    <section class="cards">

        <div class="description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, minus, incidunt aspernatur praesentium
                corrupti at modi inventore aperiam optio expedita aut nisi nobis aliquid, laboriosam blanditiis
                voluptatum nam aliquam nesciunt rem ipsa perspiciatis. Necessitatibus rerum et omnis reprehenderit odit
                temporibus corrupti maxime neque dignissimos? Quis voluptatem fuga quae ipsum, dignissimos iusto dolore!
                Maiores expedita culpa eos minima beatae reiciendis, fuga consectetur odio, voluptates ex fugiat
                corporis nisi aperiam? Harum culpa magnam, dolore porro quod nobis alias. Nostrum minima natus illum
                consequuntur placeat omnis ad expedita unde dolorem porro, debitis nesciunt distinctio velit quos
                voluptatem cum quisquam. Perferendis facere dolorum nisi.</p>
        </div>

        <div class="Membership_cards">
            <img src="Image/exercise-weights.jpg" alt="Exercise weights" width="100%" height="750px">
            <div class="black"></div>
            <div class="content_card">
                <div class="card silver">
                    <span class="title">Silver</span>
                    <p>amet consectetur adipisicing elit.</p>
                    <p>dolor sit amet .</p>
                    <p>consectetur adipisicing elit.</p>
                    <p>sit amet adipisicing elit.</p>
                    <a href="#" class="btn_card">Subscribe</a>

                </div>
                <div class="card gold">
                    <span class="title">Gold</span>
                    <p>amet consectetur adipisicing elit.</p>
                    <p>dolor sit amet .</p>
                    <p>consectetur adipisicing elit.</p>
                    <p>sit amet adipisicing elit.</p>
                    <a href="#" class="btn_card"> Subscribe</a>
                </div>
                <div class="card bronze">
                    <span class="title">Bronze</span>
                    <p>amet consectetur adipisicing elit.</p>
                    <p>dolor sit amet .</p>
                    <p>consectetur adipisicing elit.</p>
                    <p>sit amet adipisicing elit.</p>
                    <a href="#" class="btn_card">Subscribe</a>
                </div>
            </div>
        </div>

    </section>

    <section class="download">
        <div class="pic">
            <img src="Image/touchscreen.png" alt="Phone" width="60%">
        </div>
        <div class="discr">
            <div class="title">Download the Application</div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, sapiente.</p>
            <div class="btn_download">
                <a href="www.googleplay.come" target="_blank"><img src="Image/google_play.png" alt="google play" width="25%">Google play</a>
                <a href="www.appstore.come" target="_blank"><img src="Image/app_store.png" alt="App store" width="25%">App store</a>
            </div>
        </div>
    </section>

    <section class="news">
        <img src="Image/barbells.gif" alt="" width="100%" height="100%">
        <span>- News</span>
    </section>

    <footer>
        <div class="about">
            <div class="logo">
                <span class="any">Any</span><span class="gym">GYM</span><img src="IMAGE/dumbbell-logo.png" alt="GYM_Logo" width="50px" height="50px">
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, reprehenderit quibusdam! Odio,
                exercitationem neque. Dolores ut nemo earum nam molestias.</p>
            <div class="soucial-media">
                <a href="www.facebook.com" target="_blank"><img src="Image/facebook.png" alt="facebook" width="3%"></a>
                <a href="www.instagram.com" target="_blank"><img src="Image/instagram.png" alt="instagram" width="3%"></a>
                <a href="www.youtube.com" target="_blank"><img src="Image/play_button.png" alt="you-tube" width="3%"></a>
                <a href="www.snapchat.com" target="_blank"><img src="Image/snapchat.png" alt="snapchat" width="3%"></a>
                <a href="www.twitter.com" target="_blank"><img src="Image/twitter.png" alt="twitter" width="3%"></a>
            </div>
        </div>
        <form method="POST" action="" name="myForm" class="contact" onsubmit="return(validate());">
            <span class="title">Contact us</span>
            <div class="inputs">
                <input type="text" name="name" id="" placeholder="YourName">
                <input type="email" name="email"  placeholder="E-mail">
                <textarea name="message" id="" cols="30" rows="1" placeholder="Message"></textarea>
            </div>
            <button type="submit" name="submit" >Send</button>
            <div class="status">

                <?php
                if (isset($_POST['submit'])) {
                    $user_name = $_POST['name'];
                    $user_email = $_POST['email'];
                    $message = $_POST['message'];

                    $email_form = 'memealtkbali@gmail.com';
                    $email_subject = 'New from submission';
                    $email_body = 'Name: $user_name, \n ' .
                        'Email Id: $email, \n ' .
                        'User Mwssage: $message, \n ';
                    $to_email = 'memealtkbali@gmail.com';
                    $headers = 'From: $email_form \r\n';
                    $headers .= 'Reply-To: $user_email\r\n';

                    // $secretKey ="";
                    // $responseKey =$_POST[''];
                    // $userIP = $_SERVER['']
                    // $url="secret=$secretKey&response=$responseKey&remoteip=$userIP";

                    // $response = file_get_contents($url);
                    // $response = json_decode($response);

                    // if($response->success){
                    //     mail($to_email,$email_subject,$email_body,$headers);
                    //     echo "Message send Successfully";
                    // }
                    // else {
                    //     echo " <span style='color: red;'>Invalid Captcha , Please Try Again</span>"
                    // }

                }
                ?>

            </div>
        </form>


    </footer>


</body>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "flex";
        dots[slideIndex - 1].className += " active";
    }


    //validation

    // Form validation code will come here.
    function validate() {

        if (document.myForm.name.value == "") {
            alert("Please provide your name!");
            document.myForm.name.focus();
            return false;
        }
        if (document.myForm.email.value == "") {
            alert("Please provide your Email!");
            document.myForm.email.focus();
            return false;
        }
        return (true);
    }














//     function validateEmail(email) {
//         const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//         return re.test(email);
//     }

//     function validate() {
//         const $result = $("#result");
//         const email = $("#email").val();
//         $result.text("");

//         if (validateEmail(email)) {
//             $result.text(email + " is valid :)");
//             $result.css("color", "green");
//         } else {
//             $result.text(email + " is not valid :(");
//             $result.css("color", "red");
//         }
//         return false;
//     }

//     $("#validate").on("click", validate);
// </script>

</html>