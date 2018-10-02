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
  </body>
</html>

<?php
session_start();
$conn = mysqli_connect('localhost','root'
                     ,'','onlineproject');
     if(isset($_REQUEST['username']))
     {
       $user = $_REQUEST['username'];
       $pass = $_REQUEST['password'];

       //$query = "insert into regdb
       //         values($user,$pass,$sec_ques,'$sec_answer',
       //         $gender,$dob,'$email',$hobby)";
       $query= "select username,password from Registration
                where username='$user' and password='$pass'";
       $res=mysqli_query($conn,$query);

       $r = mysqli_fetch_row($res);
       if($r[0]!=null)
      {
        $_SESSION['R']=$r[0];
        header('location:inboxdb.php');
      }
      else
        echo "Incorrect username or password";

    }
    //if(isset($_REQUEST['btnsubmit']))
    // header('location:forgetpassdb.php');

 ?>
