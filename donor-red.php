<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Added Donnor</title>
    <link rel="stylesheet" href="css/s1.css">
  </head>
  <body>
    <div id="full">
      <div id="inner_full">
          <div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Blood Bank Management System</a></h2></div>
            <div id="body">
            <br>
            <?php
            $un = $_SESSION['un'];
            if(!$un)
            {
                header("Location:index.php");
            }
            ?>
     <h1>Add Doner information</h1>
     <center>
     <div id="form">
         <form action="" method="post">
         <table>
          <tr>
              <td width="200px" height:"40px">Enter Name</td>
              <td width="200px"height:"40px"><input type="text" name="name" placeholder="Enter Name">
              <td width="200px" height:"40px">Blood group</td>
              <td width="200px"height:"40px">
                  <select name="bgroup">
                      <option >o+</option>
                      <option>o-</option>
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <option>AB+</option>
                      <option>AB-</option>
                  </select>
            </td>
          </tr>
          <tr>
              <td width="200px" height:"40px">Enter Address</td>
              <td width="200px"height:"40px"><textarea name="address" id="" cols="30" rows="10"></textarea></td>
              <td width="200px" height:"40px">Enter E-mail</td>
              <td width="200px"height:"40px"><input type="text" name="email" placeholder="Enter Email address..">
            </td>
          </tr>
          <tr>
              <td width="200px" height:"40px">Phone Number</td>
              <td width="200px"height:"40px"><input type="text" name="mno" placeholder="Enter Phone Number"></td>
              <td width= "200px" height = "50px">Total donated time</td>
              <td width="200px" height:"40px"><input type="number" name="count" placeholder="number.."></td>
        </tr>
        <tr>
            <td><input type="submit"name="sub"value="Save"></td>
        </tr>
      </table>
        </form>

<?php
     if(isset($_POST['sub']))
     {
         $name=$_POST['name'];
         $bgroup=$_POST['bgroup'];
         $address=$_POST['address'];
         $email=$_POST['email'];
         $mno=$_POST['mno'];
         $count=$_POST['count'];
        $q=$db->prepare("INSERT INTO donor_registration(name,bgroup,address,email,mno,count,isDelete)VALUES(:name,:bgroup,:address,:email,:mno,:count,FALSE)");
         $q->bindValue('name',$name);
         $q->bindValue('bgroup',$bgroup); 
         $q->bindValue('address',$address);
         $q->bindValue('email',$email);
         $q->bindValue('mno',$mno);
         $q->bindValue('count',$count);
         if($q->execute())
         {
             echo "<script>alert('Donor Added Successfully')</script>";
         }
         else
         {
            echo "<script>alert('Donor Added Failed')</script>";
         }

     }
?>
     </div>
        </center>
            </div>
              <div id="footer">
              <h4 align="center">
                <br>
                Copyright@Soumik Datta CSE'17
              </h4>
              <p><a href="logout.php" id="footer1"type="button">Log-out</a></p>
              </div>


      </div>
    </div>
  </body>
</html>
