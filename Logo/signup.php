<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIGN UP</title>
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
        <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>


<body>

 <div class="container">
     <h2> SIGN UP</h2>
     <form class="signup-form" action="includes/signup-inc.php" method="POST">
         <input type="text" name="first" placeholder="Firstname">
         <input type="text" name="last" placeholder="Lastname">
         <input type="text" name="email" placeholder="E-mail">
         <input type="text" name="uid" placeholder="Username">
         <input type="password" name="password" placeholder="password">
         <button type="submit" name="submit">Sign Up</button>
        
        </form>   
 </div>