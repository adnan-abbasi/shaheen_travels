
<html>
<head></head>
<body>
<?php
// include_once("db_connect.php");

// $firstName="prepared";
// $lastName="query";
// //$age=10;
// $sql= "INSERT INTO agents(AgtFirstName,AgtLastname) VALUES(?,?)";
// $stmt=mysqli_prepare($dbh,$sql);
// mysqli_stmt_bind_param($stmt,'ss',$firstName,$lastName);


// $result=mysqli_stmt_execute($stmt);

// if($result)
// {
//     print("<h1> insert good</h1>");
// }
// else
// print("<h1> insert bad</h1>");
// //mysqli_free_result($result);

// print("This is the time=".time());

// setcookie("start_time", time(),time()+60*60*5);
//print("The seesion start time is ".time().$_SESSION);
$_SESSION["session_start_time"]=time();
print("The seesion start time is ".$_SESSION);
?>



</body>
</html>