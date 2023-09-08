<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blood Bank Management</title>
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
     <h1>Welcome Dear Admin</h1>
     <br><br>
     
  <ul>
    <li><a href ="donor-red.php">Add donor</a></li>
    <li><a href ="donor-list.php">View all donor</a></li>
    <li><a href ="donor-search.php">Search donor by blood group</a></li>
  </ul>
<br><br>
  <ul>
    <li><a href ="donor-delete.php">Deleted donors</a></li>
    <li><a href ="admin-password.php">Admin Password change</a></li>
  </ul>
        
  <br><br>
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
