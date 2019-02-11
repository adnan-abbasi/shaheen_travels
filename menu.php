<?php
/*********************************************************
 * Aouther : Adnan Abbasi
 * Date: Feb 10 ,2019
 * Purpose: This page is for Navigation through the website. It adds a logout link if some one is logged in.
 * Requrire:css  
 **************************************************************/
?>
<!doctype html>
<html>
<head>
<meta   charset="utf-8">  <!-- used to handle differnt characters traslation for browser.--> 

<link rel="stylesheet" href="style.css">
</head>
<body>
       
<nav>
              <a href="contact.php">Contact us</a>&nbsp;&nbsp;
              <a  href="AgentRegistraton.php">Agent Registration </a>&nbsp;&nbsp;
              <a   href="index.php">  Home Page </a>&nbsp;&nbsp;
              <a   href="customers.php">  Customers </a>&nbsp;&nbsp;
              
              <?php

if((isset($_SESSION["logged_in"])) && ($_SESSION["logged_in"]===true))
{
    print("<a  href='logout.php'>Log Out</a>&nbsp;&nbsp;");
}
else
              print("<a  href='login.php'>Log in</a>&nbsp;&nbsp;")
              ?>
  </nav>
   
    </body>
    </html>