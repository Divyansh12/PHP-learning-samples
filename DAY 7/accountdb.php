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

$query="select * from Registration
          where Username ='$r'";

$res = mysqli_query($conn,$query);
$row = mysqli_fetch_row($res);

if(isset($_REQUEST['btnsubmit1']))
{
  session_destroy();
  header('location:logindb.php');
}

if(isset($_REQUEST['btnsubmit']))
{
  header('location:inboxdb.php');
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <title>FIRST PAGE</title>
   </head>
   <body>
     <div>
     <h2 style="text-align:center;color:lime">ACCOUNT DETAILS</h2>
     </div>
     <div style="float:left">
     <a href ="localhost/Class6/AboutUs.html">ABOUT US</a>
     </div>

     <div style="float:center">


     <form name="f" action="" method="post">
     <table border="1" align="center">
       <tr>
         <td>Username</td>
         <td><?php echo $row[0]; ?></td>
       </tr>
       <tr>
         <td>Password</td>
         <td><?php echo $row[1]; ?></td>
       </tr>

       <tr>
         <td>Security Question</td>
       <td>
         <!--<select name="sec_question">-->
         <option><?php echo $row[2]; ?></option>

         <!--</select>-->
       </td>
     </tr>
     <tr>
       <td>
         Enter Answer</td>
       <td>
         <?php echo $row[3]; ?></td>
     </tr>
     <tr>
       <td>
         Gender</td>
       <td><?php echo $row[4]; ?></td>
     </tr>
     <tr>
       <td>Date of Birth</td>
       <td><?php echo $row[5]; ?></td>
     </tr>
     <tr>
       <td>Email Id</td>
       <td><?php echo $row[6]; ?></td>
     </tr>
     <tr>
       <tr>
         <td>Mobile Number</td>
         <td><?php echo $row[7]; ?></td>
       </tr>
       <td>Hobby</td>
       <td><?php echo $row[8]; ?></td>
     </tr>


     </table>

     <div style="text-align:center">
     <input type="submit" name="btnsubmit" value="Inbox"/>
     <br><br>
     <input type="submit" name="btnsubmit1" value="Logout"/>
     </div>

     </form>
     </div>
   </body>
 </html>
