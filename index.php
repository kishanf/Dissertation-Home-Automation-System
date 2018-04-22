<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">

</head>

  
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
      </div>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <!-- <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      </ul>
    </div>
  </nav>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pr-wrap">
                    <div class="pass-reset">
                        <label>
                            Enter the email you signed up with</label>
                        <input type="email" placeholder="Email" />
                        <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                    </div>
                </div>

                <div class="wrap">
                    <p class="form-title">
                        Sign In</p>
                    <form class="login" action="includes/login-inc.php" method ="POST">
                        <input type="text" name="uid" placeholder="Username" />
                        <input type="password" name="password" placeholder="Password" />


                        <input type="submit" name="submit" value="Sign In" class="btn btn-success btn-sm" />
                        <div class="remember-forgot">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" /> Remember Me
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6 forgot-pass-content">
                                    <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!--footer class="container-fluid bg-4 text-center">
        <a href="mailto:ckf11@uni.brighton.ac.uk"> Email: Kishan Fokeer</a>
        <p>&copy; Kishan Fokeer 2018 </p>
    </footer -->



    <script> 
        $(document).ready(function () {
            $('.forgot-pass').click(function (event) {
                $(".pr-wrap").toggleClass("show-pass-reset");
            });

            $('.pass-reset-submit').click(function (event) {
                $(".pr-wrap").removeClass("show-pass-reset");
            });
        });
    </script>

</body>