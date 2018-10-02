<!DOCTYPE html>
<html>
  <head>
    <title>FIRST PAGE</title>
  </head>
  <body>
    <div>
    <h2 style="text-align:center;color:lime">REGISTRATION</h2>
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

      <tr>
        <td>Confirm Password</td>
        <td><input type="password" name="repassword" required/></td>
      </tr>
      <tr>
        <td>Security Question</td>
      <td>
        <select name="sec_question">
        <option>Please select any one questions</option>
        <option>First name</option>
        <option>Second names</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>
        Enter Answer</td>
      <td>
        <input type="password" name="sec_answer" required/></td>
    </tr>
    <tr>
      <td>
        Gender</td>
      <td>
        <input type="radio" name="gender"  value="male"required/>Male
        <input type="radio" name="gender" value="female"required/>Female</td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td>
        <input type="date" name="dob" required/></td>
    </tr>
    <tr>
      <td>Email Id</td>
      <td><input type="email" name="emailid" required/></td>
    </tr>
    <tr>
      <tr>
        <td>Mobile Number</td>
        <td><input type="number" name="number" required/></td>
      </tr>
      <td>Hobby</td>
      <td><input type="checkbox" value="Music"name="chk[]"/> Music
         <input type="checkbox" value="Cricket" name="chk[]"/> Cricket
         <input type="checkbox" value="Badminton" name="chk[]"/> Badminton
      </td>
    </tr>


    </table>

    <div style="text-align:center">
    <input type="submit" name="btnsubmit" value="Insert"/>
    </div>

    </form>
    </div>
  </body>
</html>
<?php
$conn=mysqli_connect('localhost','root'
                     ,'','onlineproject');
  if(isset($_REQUEST['btnsubmit']))
  {
    $user = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $repass = $_REQUEST['repassword'];
    if($pass != $repass)
    { echo "The password doesn't match";
      break;
    }
    $sec_ques = $_REQUEST['sec_question'];
    $sec_answer = $_REQUEST['sec_answer'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $email = $_REQUEST['emailid'];
    $number = $_REQUEST['number'];
    $hobby = implode(",",$_REQUEST['chk']);

    //$query = "insert into regdb
    //         values($user,$pass,$sec_ques,'$sec_answer',
    //         $gender,$dob,'$email',$hobby)";
    $query= "insert into Registration
             values('$user','$pass','$sec_ques','$sec_answer',
             '$gender','$dob','$email','$number','$hobby')";

    $res=mysqli_query($conn,$query);
         	if($res>0)
         		echo "Registration successfull";
  }
//}
//else
//  echo "The password does not match";
 ?>
