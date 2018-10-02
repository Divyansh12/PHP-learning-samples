<?php

if(isset($_GET['username']))
{
	 $user=$_GET['username'];
	 $pass=$_GET['password'];
	 if($user=="raj" && $pass=="aaaa" )
	   echo "valid";
	 else
	   echo "invalid";
}
 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE PHP</title>
</head>
<body>

</body>
</html>