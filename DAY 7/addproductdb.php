<?php
require_once 'connect.php';
if(isset($_REQUEST['btnsubmit']))
{
    $pid = $_REQUEST['pid'];
    $pname = $_REQUEST['pname'];
    $pcost = $_REQUEST['pcost'];
    $pdesc = $_REQUEST['pdesc'];
    $name = $_FILES['f']['name'];
    $path ="Images/".$name;


    $query = "insert into Products
    values($pid,'$pname',$pcost,'$pdesc','$path')";

    $res = mysqli_query($conn,$query );
    if($res>0)
    { move_uploaded_file($_FILES['f']['tmp_name'],$path);
      echo "Data Entered";
    }
    else
      echo "Data cannot be entered";

}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>FIRST PAGE</title>
  </head>
  <body>
    <div>
    <h2 style="text-align:center;color:lime">LOGIN</h2>
    </div>
    <div style="float:left">
    <a href ="localhost/Class6/AboutUs.html">ABOUT US</a>
    </div>

    <div style="float:center">


    <form action="" method="post"
            enctype="multipart/form-data">
    <table border="1" align="center">
      <tr>
        <td>Product Id</td>
        <td><input type="text" name="pid" required/></td>
      </tr>
      <tr>
        <td>Product Name</td>
        <td><input type="text" name="pname" required/></td>
      </tr>
    <tr>
      <td>Product Cost</td>
      <td><input type="text" name="pcost" required/></td>
    </tr>
    <tr>
      <td>Product Description</td>
      <td><input type="text" name="pdesc" required/></td>
    </tr>
    <tr>
      <td>Product Image</td>
      <td><input type="file" name="f" required/></td>
    </tr>
    </table>

    <div style="text-align:center">
    <input type="submit" name="btnsubmit" value="Enter"/>
    </div>

    </form>
    </div>
  </body>
</html>
