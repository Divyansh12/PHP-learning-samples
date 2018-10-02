<?php

session_start();

if(isset($_GET['username']))
{
	 $user=$_GET['username'];
	 $pass=$_GET['password'];
	 
	 if($user=="raj" && $pass=="aaaa" )
      {	
        $_SESSION['S']=$user;
        $_SESSION['a']=time()+1*60;
        header('location: inbox.php');
	       
	  }

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