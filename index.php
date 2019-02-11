
<?php
/*********************************************************
 * Aouther : Adnan Abbasi
 * Date: Feb 10 ,2019
 * Purpose: This is the Home page.
 * Requrire: function.php and AgetClass.php
 **************************************************************/
//make a zip folder and name is CPRG210_ADNAN_ABBASI 
include_once("functions.php");

?>
<!doctype html>

<html>
<head>
                <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
                <link rel="stylesheet" href="style.css">
<meta   charset="utf-8">  <!-- used to handle differnt characters traslation for browser.--> 

<title> Shaheen Travel</title>
</head>

<body>
<?php
include_once("header.php");
print("Date and Time=  ".CurrentTimeAndDate());
include("menu.php");
?>
<header>

</header>

   
<main>
    <p> We offer very resonabel fares and we try to make a convinent rout for you throug out the globe . <BR> 
        We have connections with most of the major air lines.Call us today to book your trip.</p>
        </main>
<div id="JsTableArea"  class="JsTableAreaClass">
         <h3> OUR PARTNERS </h3>
<!--Java Script Table here-->

        </div>
                         
        
<footer> 
<?php
include_once("footer.php");
?>
         </footer>
<script  src="jscript.js">
</script>

</body>
</html>