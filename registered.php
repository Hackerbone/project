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

#subscribed{
  display: flex;
justify-content: center;
align-items: center;
padding-top: 200px;
}
   button{
       background: white;
       color:#f03849;
       border-radius: 39px;

       border: solid white 1px;
       font-size: 15px;
       height: 45px;
       width: 110px;
       animation-name: bounce;
       animation-duration: 0.8s;
       animation-timing-function: ease-in-out;
       animation-iteration-count: infinite;
   }
   button:hover{
       background: #f03849;
       color:white;

   }
   @keyframes bounce {

       0%   {padding-top:  25px;}
       25%  {padding-top:  15px;}
       50%  {padding-top:  10px;}
       100% {padding-top:  25px;}
   }

   footer{
     position: absolute;
     bottom: 0;
   display: flex;
   justify-content: center;
   align-items: center;
     width: 100%;
     height: 100px;
   }

   </style>
<div class="navbar">
   <ul>
     <li><a href="index.html">Home</a></li>
     <li><a href="gallery.html">Gallery</a></li>

     <li><a href="about.html">About</a></li>
          <li><a href="contact.php">Contact</a></li>
   </ul>
</div>
<div id="subscribed">

<div class="center">
<center>

<h1 class= "heading">Dear <?php echo $_SESSION["name"];?>You Have Successfully been registered for our subscription.</h1><br><br>
<br>  <a href="index.html"> <button type="button" name="button">Back to Home</button></a>

</center>
</div>
</div>
<footer>
      <address>San Fransisco<br><br>100 Broadway #202 San Francisco, CA 94111</address><!--Change this-->

</footer>
 </body>
</html>
