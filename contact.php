<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   <!-- <link rel="stylesheet" href="style.css"> -->
   <meta charset="utf-8">
   <title>Laptops</title>
 </head>
 <body>
   <style>
   *{
     padding: 0;
     margin: 0;
     font-family: 'Roboto', sans-serif;
   }
   body,html{
     width: 100%;
     height: 100%;

   }

   .navbar{
     position: fixed;
     width: 100%;
     z-index: 1;
   }
   ul {
       list-style-type: none;
       margin: 0;
       padding: 0;
       overflow: hidden;
       background-color: #333;
   }

   li {
       float: left;
   }

   li a {
       display: block;
       color: white;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
   }

   li a:hover {
       background-color: grey;
   }

 #contact{
   background: url("contact.jpg");
   opacity: 0.6;
   width: 100%;
   height: 100%;
   background-size: cover;
   background-repeat: no-repeat;
   overflow: hidden;
   display: flex;
   justify-content: center;
   align-items: center;
 }
 .center{
 background-color: white;
 padding: 100px;
 top:40%;
 }

 input{
   width: 200px;
   height: 20px;
   padding: 5px;

   border: solid white 1px;

 }
 .input{
   border-bottom: solid black 4px;
 }
   </style>
<div class="navbar">
   <ul>
     <li><a href="index.html">Home</a></li>
     <li><a href="gallery.html">Gallery</a></li>
     <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
   </ul>
</div>
<div id="contact">

<div class="center">
<center>

<h1 class= "heading">Contact Us</h1><br><br>


<form action="contact.php" method="post">
<input class="input" type="text" name="name" placeholder="Name"><br><br>


<input class="input"type="email" name="email" placeholder="Email"><br><br>
<input type="submit" name="submit" placeholder="Submit"><br><br>

</form>
<?php

if (isset($_POST['submit'])) {
 $username =  $_POST['name'];
 $email = $_POST['email'];

 $_SESSION["name"]= $username;
 $_SESSION["email"]= $email;

 if (empty($username) ||empty($email) ) {
   echo "Username and Email are required";
 }

else{
 header("Location: registered.php");
}
}
?>
</center>
</div>
</div>

<footer>
      <address>San Fransisco<br><br>100 Broadway #202 San Francisco, CA 94111</address><!--Change this-->

</footer>
 </body>
</html>
