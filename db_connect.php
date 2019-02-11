<html>
<head>
<?php

?>
</head>
<body>
<?php
$dbh= mysqli_connect("localhost","admin","P@ssw0rd","travelexperts");

if(!$dbh)
{
echo "Error number".mysqli_connect_errno().PHP_EOL;
echo "Error message".mysqli_connect_error().PHP_EOL;
exit;
}
// // else {
// // echo"<br> DB connection good";
// }


?>


</body>
</html>