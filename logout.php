<?php
/*********************************************************
 * Aouther : Adnan Abbasi
 * Date: Feb 10 ,2019
 * Purpose: This is the Home page.
 * Requrire: function.php and AgetClass.php
 **************************************************************/

session_start();// it conncects the session if exists
unset($_SESSION["logged_in"]);
header("Location:http://localhost/shaheen_travels/index.php");// it will destroy the session variable "logged_in"
//and now you do not have any retriction to navigate the site.
?>