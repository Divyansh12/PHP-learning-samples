<?php

session_start();
if(isset($_SESSION['S']))
{
	$username=$_SESSION['S'];
	echo "welcome $username @gmail.com";
    $t=time();

	if ($t>$_SESSION['a']) {
		session_destroy();
		header('location:login.html');
	}
}

else{
	header('location:login.html');
}
}
if(isset($_GET['btnlogout']))
{
	session_destroy();
	header('location:login.html');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <form>
  	<input type="submit" name="btnlogout" value="log out" />
  </form>
</body>
</html>