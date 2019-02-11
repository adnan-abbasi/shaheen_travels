

<?php
/*********************************************************
 * Aouther : Adnan Abbasi
 * Date: Feb 10 ,2019
 * Purpose: This is Login  page. Agetn can acess registration page if log in credentials are ok.
 * Requrire: function.php 
 **************************************************************/

include_once("functions.php");
session_start();

if (isset($_POST["Login"])) {
    $user_list = GetUsers();
    if (isset($user_list[$_POST["username"]])) {
        if ($user_list[$_POST["username"]] === $_POST["password"]){
            print("You are logged in!");
            $_SESSION["logged_in"] = true;
            header("Location: http://localhost/shaheen_travels/AgentRegistraton.php");
        } else 
        {
            print("That was not a correct user name or password, please try again.");
        }
    } else 
    {
        print("That was not a correct user name or password, please try again.");
    }
}

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
<header>
<?php
include_once("header.php");
include("menu.php");
?>
</header>
		<br>	<br><br><br>
            <form method="post" action="">
                   UserID  &nbsp;  :<input type="text" name="username"><br />
			   <br> Password:<input type="password" name="password"><br />
               <input type="submit" name="Login" value="Log In">
            </form>
			
   

                         
        
<footer> 
                <P>
                 Copy Right &copy 2019 
             </P>
         </footer>
<script  src="jscript.js">
</script>

</body>
</html>