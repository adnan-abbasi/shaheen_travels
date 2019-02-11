<html>
<head>
<?php


?>
</head>
<body>
<?php
$oolink= new mysqli("localhost","admin","P@ssw0rd","travelexperts");

if ($oolink->connect_errno) 
{
echo "Error number".$oolink->connect_error.PHP_EOL;

}
else {
echo"<br> good";
}

?>


</body>
</html>