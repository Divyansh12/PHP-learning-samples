<?php
require_once 'connect.php';
session_start();
$r = NULL;
if(isset($_SESSION['R']))
  $r= $_SESSION['R'];
else {
  header('location:logindb.php');
}
//$conn=mysqli_connect('localhost','root'
//                     ,'','onlineproject');
if(isset($_REQUEST['btnsubmit1']))
{
  session_destroy();
  header('location:logindb.php');
}
  if(isset($_REQUEST['btnsubmit']))
  {
    if(isset($_REQUEST['password']))
    {
        if(isset($_REQUEST['repassword']))

       {
          $pass = $_REQUEST['password'];
          $repass = $_REQUEST['repassword'];
            if($pass != $repass)
              { echo "The password doesn't match";
                  header('location:editpassdb.php');
              }
    //$query = "insert into regdb
    //         values($user,$pass,$sec_ques,'$sec_answer',
    //         $gender,$dob,'$email',$hobby)";
    //$query= "insert into Registration
    //         values('$user','$pass','$sec_ques','$sec_answer',
    //         '$gender','$dob','$email','$number','$hobby')";
          $query="Update Registration set Password='$pass'
                        where Username ='$r'";
          $res=mysqli_query($conn,$query);
         	if($res>0)
         		echo "Password Changed";
          else
            echo "Unable to change password";

       }
       else
       echo "Enter the confirm password";
    }
    else
      echo "Enter the new password";
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <title>FIRST PAGE</title>
   </head>
   <body>
     <div>
     <h2 style="text-align:center;color:lime">EDIT DETAILS</h2>
     </div>
     <div style="float:left">
     <a href ="localhost/Class6/AboutUs.html">ABOUT US</a>
     </div>

     <div style="float:center">


     <form name="f" action="" method="post">
     <table border="1" align="center">
       <tr>
         <td>New Password</td>
         <td><input type="password" name="password"/></td>
       </tr>

       <tr>
         <td>Confirm New Password</td>
         <td><input type="password" name="repassword"/></td>
       </tr>

     </table>

     <div style="text-align:center">
     <input type="submit" name="btnsubmit" value="Edit"/><br><br>
     <input type="submit" name="btnsubmit1" value="Logout"/>
     </div>

         </form>
         </div>
       </body>
</html>
