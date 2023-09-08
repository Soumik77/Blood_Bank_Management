<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Deleted Donor List</title>
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
     <h1>Deleted  Doner information</h1>
     <center>
     <div id="form">

<form action="" method="post">
    
</form>
      <table>
          <tr>
              <td><center><b><font color="blue">Name</font></b></center></td>
              <td><center><b><font color="blue">Blood Group</font></b></center></td>
              <td><center><b><font color="blue">Address</font></b></center></td>
              <td><center><b><font color="blue">Email</font></b></center></td>
              <td><center><b><font color="blue">Phone Number</font></b></center></td>
              <td><center><b><font color="blue">Donated Times</font></b></center></td>
              <td><center><b><font color="blue">Action</font></b></center></td>
          </tr>
      <?php
       $sql = "SELECT * FROM donor_registration WHERE isDelete=TRUE;";
       $hostname = "localhost";
       $username = "root";
       $password = "";
       $dbname="mypro_bbms";
       $connect = mysqli_connect($hostname,$username,$password,$dbname); 
       $result = mysqli_query($connect,$sql);
       $resultCheck = mysqli_num_rows($result);
      if($resultCheck > 0) {
          while($row = mysqli_fetch_assoc($result)) {
         ?>
        <tr>
        <td><center><?php echo $row['name'] ?></center></td>
        <td><center><?php echo $row['bgroup'] ?></center></td>
        <td><center><?php echo $row['address'] ?></center></td>
        <td><center><?php echo $row['email'] ?></center></td>
        <td><center><?php echo $row['mno']?></center></td>
        <td><center><?php echo $row['count'] ?></center></td>
        <td><center><a href="restore.php?id=<?php echo $row['id'] ?>">Restore</a></center></td>
  </tr>
  <?php
     }
    }

?>

          
      </table>
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
