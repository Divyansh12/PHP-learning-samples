<?php

 if(isset($_REQUEST['btn']))
 {
 	 $pid=$_REQUEST['pid'];
 	 $pname=$_REQUEST['pname'];
 	 setcookie('pid',$pid,time()+60);
 	 setcookie('pname',$pname,time()+60);
     echo "cookie created";
}
?>
<!DOCTYPE >
<html>
<head>
	<title>PRODUCT</title>
</head>
<body>
	<form method="post" >
		product id :<input type="text" name="pid" />
        Product name : <input type="text" name="pname" />
        <input type="submit" name="btn" value ="login" />
	</form>

</body>
</html>