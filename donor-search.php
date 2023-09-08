<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Donor List</title>
    <link rel="stylesheet" href="css/s1.css">
    <style type="text/css">
      td{
          width:200px;
          height:50px;
      }
    </style>
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
     <h1>Search Doner information</h1>
     <center>
    
     <div id="form"style="height:300px;">
         <table>
        <form action="" method="POST">
         <tr>
     <td width="200px" height:"50px">Blood group</td>
              <td width="200px"height:"50px">
                  <select name="bgroup1">
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
            <td><input type="submit"name="submit"value="Check"></td>
          </tr>
        </form>
          <tr>
              <td><center><b><font color="blue">Name</font></b></center></td>
              <td><center><b><font color="blue">Blood Group</font></b></center></td>
              <td><center><b><font color="blue">Address</font></b></center></td>
              <td><center><b><font color="blue">Email</font></b></center></td>
              <td><center><b><font color="blue">Phone Number</font></b></center></td>
              <td><center><b><font color="blue">Donated Times</font></b></center></td>
              <td><center><b><font color="blue">Action</font></b></center></td>
          </tr>
        </table>
      <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname="mypro_bbms";
        $connection = mysqli_connect($hostname,$username,$password,$dbname);
        if(isset($_POST['submit']))
        {
         $bgroup1 = $_POST['bgroup1'];
         $query = "SELECT * FROM donor_registration WHERE bgroup= '$bgroup1'";
         $query_run = mysqli_query($connection, $query);
        }
     ?>
    
    
    <?php
if(mysqli_num_rows($query_run)>0)
{
   while($row = mysqli_fetch_array($query_run))
   {
    ?>
    <table>
     <tr>
         <td><center><?php echo $row['name']; ?></center></td>
        <td><center><?php echo $row['bgroup']; ?></center></td>
        <td><center><?php echo $row['address']; ?></center></td>
        <td><center><?php echo $row['email']; ?></center></td>
        <td><center><?php echo $row['mno']; ?></td>
        <td><center><?php echo $row['count'];?></center></td>
        <td><center><a href="view.php?id=<?= $r1->id; ?>"></center>View Details</a></td>
    </tr>
    <?php

    }
    }
    else
    {
        ?>
         <tr>
            <td colspan="6" > No Record found </td> 
    </tr> 
    <?php
    }
       ?>    
   </table>  
     </div>
     <?php
     
     ?>
     
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
