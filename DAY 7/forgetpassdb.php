<?php
require_once 'connect.php';
$ab =NULL;
$pass =NULL;
if(isset($_REQUEST['btnsubmit']))
{
  $user = $_REQUEST['username'];
  $query = "select Securityquestion from
          Registration where Username = '$user'";
  $res = mysqli_query($conn,$query);
  $row = mysqli_fetch_row($res);
  if ($row[0]!=null)
     $ab=$row[0];
}

if(isset($_REQUEST['btnsubmit1']))
{
  $ans = $_REQUEST['sec_question'];
  $query = "select Password from
          Registration where Answer = '$ans'";
  $res = mysqli_query($conn,$query);
  $row = mysqli_fetch_row($res);
  if ($row[0]!=null)
     $pass=$row[0];
}
 ?>
<html>
  <head>
    <title>FIRST PAGE</title>
  </head>
  <body>
    <div>
    <h2 style="text-align:center;color:lime">FORGOT PASSWORD</h2>
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
    </table>

    <div style="text-align:center">
    <input type="submit" name="btnsubmit" value="Submit"/>
    </div>

    <table border="1" align="center">
      <tr>
        <td>Security Question</td>
        <td><input type="text" name="sec_question"
          value ="<?php echo $ab ?>"/></td>
      </tr>
    </table>

    <div style="text-align:center">
    <input type="submit" name="btnsubmit1" value="Submit"/>
    </div>

    <table border="1" align="center">
      <tr>
        <td>Password</td>
        <td><input type="text" name="password"
            value ="<?php echo $pass; ?>"></td>
      </tr>

    </table>



    </form>
    </div>
  </body>
</html>
