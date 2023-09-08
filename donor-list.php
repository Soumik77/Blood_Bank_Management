<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>  Donor List</title>
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
     <h1>Donor list</h1>
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
       $q = $db->query("SELECT * FROM donor_registration WHERE isDelete =FALSE");
     while($r1=$q->fetch(PDO::FETCH_OBJ))
     {
         ?>
        <tr>
        <td><center><?= $r1->name; ?></center></td>
        <td><center><?= $r1->bgroup; ?></center></td>
        <td><center><?= $r1->address; ?></center></td>
        <td><center><?= $r1->email; ?></center></td>
        <td><center><?= $r1->mno; ?></center></td>
        <td><center><?= $r1->count; ?></center></td>
        <td><center><a href="view.php?id=<?= $r1->id; ?>"></center>View Details</a></td>
  </tr>
  <?php
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
