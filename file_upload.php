<html>
<head>
<?php
if(issset($_POST["submit"]))
{
    print("file name:".$FILES["upload"]["name"]."<br>");
    print("file name:".$FILES["upload"]["temp_name"]."<br>");
    print("file name:".$FILES["upload"]["size"]."<br>");
    print("file name:".$FILES["upload"]["type"]."<br>");
    print("file name:".$FILES["upload"]["error"]."<br>");
}

if(move_uploaded_file($FILES["name"][]))
?>
</head>
<body>
<?php

?>


</body>

<form method="post"  enctype="multipart/form-data" action="#">
<h3> Plese upload your file</h3>
<input type="file" name="upload">
<input type="submit" name="submit" value="submit">
</form>
</html>