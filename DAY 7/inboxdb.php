<?php
session_start();
$r = NULL;
if(isset($_SESSION['R']))
  $r= $_SESSION['R'];
else {
  header('location:logindb.php');
}
if(isset($_REQUEST['btnsubmit']))
{
  session_destroy();
  header('location:logindb.php');
}
if(isset($_REQUEST['btnsubmit1']))
{
  header('location:editdb.php');
}
if(isset($_REQUEST['btnsubmit2']))
{
  header('location:accountdb.php');
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <title>FIRST PAGE</title>
   </head>
   <body>
     <div>
     <h2 style="text-align:center;color:lime">WELCOME <?php echo $r; ?></h2>
     </div>
     <div style="float:left">
     <a href ="localhost/Class6/AboutUs.html">ABOUT US</a>
     <a href ="editpassdb.php">CHANGE PASSWORD</a>
     </div>
     <form name="f" action="" method="post">
       <div style="text-align:center">
       <input type="submit" name="btnsubmit1" value="Edit Profile"/>
       <input type="submit" name="btnsubmit2" value="Account Details"/>
       <input type="submit" name="btnsubmit" value="Logout"/>
       </div>
<!--
     <div style="float:center">


     <form name="f" action="" method="post">
     <table border="1" align="center">
       <tr>
         <td>Username</td>
         <td><input type="text" name="username" required/></td>
       </tr>
       <tr>
         <td>Password</td>
         <td><input type="password" name="password" required/></td>
       </tr>
     </table>

     <div style="text-align:center">
     <input type="submit" name="btnsubmit" value="Login"/>
     </div>

     </form>
     </div>
   -->
   </body>
 </html>
