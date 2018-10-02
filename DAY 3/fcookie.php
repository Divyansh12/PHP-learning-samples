<?php
if(isset($_COOKIE['pid']) && isset($_COOKIE['pname']))
{
	 $productid = $_COOKIE['pid'];
	 $productname = $_COOKIE['pname'];
	 echo "product id =".$productid;
	 echo "product name =".$productname;
}
else
 header('location:cookie.php');

?>