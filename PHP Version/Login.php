<?php
session_start();


include("php/connection.php");
include("php/function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //SOMETHING WAS POSTED
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];

    if (!empty($email) && !empty($pass)) {
        //read from database
        $id = random_num(20);
        $query = "select * from login where email = '$email' limit 1";

        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $pass) {
                    $_SESSION['id'] = $user_data['id'];
                    header("Location:index.php");
                    die;
                }
            }
        }
        echo "please enter wright pass";
    } else {
        echo "please enter some valid information !";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="IMAGE/dumbbell1_icon.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" <!-- style -->
    <link rel="stylesheet" href="CSS/login/login.css">

    <title>Login</title>
</head>

<body>
    <main class="container">
        <section class="login">
            <div class="pic">
                <img src="Image/log.png" alt="GYM" width="100%">
            </div>
            <div class="inputs">
                <h4>Hello ! <p> We are glad to see you :)</p>
                </h4>
                <div class="social">
                    <div><img src="Image/google login.png" alt="" width="15%"> Sign up with Google</div>
                    <img src="Image/facebook login.png" alt="" class="face" width="5%" height="50%">
                    <img src="Image/twitter login.png" alt="" class="twit" width="5%" height="50%">
                </div>
                <span>&nbsp;&nbsp;&nbsp; Or &nbsp;&nbsp;&nbsp;</span>
                <form action="" method="POST">
                    <div>
                        <!-- <div>
                            <label for="">Name</label>
                            <input type="text" value="" name="name">
                        </div> -->
                        <div>
                            <label for="">Email Address</label>
                            <input type="email" value="" name="email">
                        </div>
                        <!-- <div>
                            <label for="">Phone</label>
                            <input type="text" value="" name="phone">
                        </div> -->
                        <div>
                            <label for="">Password</label>
                            <input type="password" value="" name="password">
                        </div>
                    </div>
                    <!-- <div class="con_squared">
                        <div class="squared">
                            <input type="checkbox" value="None" id="squared" name="check" />
                            <label for="squared" class="lblsquared"></label>
                        </div>
                        <label for="squared">I agree Terms of Service and Privacy policy</label>
                    </div> -->
                    <input type="submit" value="Sign Up" name="">
                    <a href="signup.php" style="margin: 2% 0 0 5%; text-decoration: none;color: white;">or Sighn UP </a>
                </form>
            </div>
        </section>
    </main>
</body>

</html>