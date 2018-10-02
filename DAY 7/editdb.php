<?php
session_start();
$r = NULL;
if(isset($_SESSION['R']))
  $r= $_SESSION['R'];
else {
  header('location:logindb.php');
}
$conn=mysqli_connect('localhost','root'
                     ,'','onlineproject');
$lquery="select Securityquestion,Answer,
          Email,Mobile,Hobby from Registration
          where Username ='$r'";

$res = mysqli_query($conn,$lquery);
$row = mysqli_fetch_row($res);

  if(isset($_REQUEST['btnsubmit']))
  {
    $sec_ques = $_REQUEST['sec_question'];
    $sec_answer = $_REQUEST['sec_answer'];
    $email = $_REQUEST['emailid'];
    $number = $_REQUEST['number'];
    $hobby = implode(",",$_REQUEST['chk']);

    //$query = "insert into regdb
    //         values($user,$pass,$sec_ques,'$sec_answer',
    //         $gender,$dob,'$email',$hobby)";
    //$query= "insert into Registration
    //         values('$user','$pass','$sec_ques','$sec_answer',
    //         '$gender','$dob','$email','$number','$hobby')";
    $query="Update Registration set Securityquestion='$sec_ques',
                                    Answer='$sec_answer',
                                    Email='$email',
                                    Mobile='$number',
                                    Hobby='$hobby'
                       where Username ='$r'";
    $res=mysqli_query($conn,$query);
         	if($res>0)
         		echo "Profile Edited";
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
         <td>Security Question</td>
       <td>
         <select name="sec_question">
         <option><?php echo $row[0]; ?></option>
         <option>First name</option>
         <option>Second names</option>
         </select>
       </td>
     </tr>
     <tr>
       <td>
         Enter Answer</td>
       <td>
         <input type="password" name="sec_answer"
         value="<?php echo $row[1]; ?>" required/></td>
     </tr>
     <tr>
     <tr>
       <td>Email Id</td>
       <td><input type="email" name="emailid"
         value="<?php echo $row[2]; ?>" required/></td>
     </tr>
     <tr>
       <tr>
         <td>Mobile Number</td>
         <td><input type="number" name="number"
           value="<?php echo $row[3]; ?>" required/></td>
       </tr>
       <td>Hobby</td>
       <td><input type="checkbox" value="Music"name="chk[]"/> Music
          <input type="checkbox" value="Cricket" name="chk[]"/> Cricket
          <input type="checkbox" value="Badminton" name="chk[]"/> Badminton
       </td>
     </tr>


     </table>

     <div style="text-align:center">
     <input type="submit" name="btnsubmit" value="Edit"/>
     </div>

         </form>
         </div>
       </body>
</html>
