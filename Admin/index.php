<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
?>
<title>Admin</title>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
</style>
</head>
<body>
   <p>
   <h1>Chain Store Management System</h1>
   <h3></h3>
   </p>
    <ul>
      <li><a class="active" href="index.php">Admin</a></li>
      <li><a href="store.php">Store Details</a></li>
      <li><a href="profit.php">Total Profit</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
    </ul>
    <?php
    $link = mysqli_connect('localhost','pma','','chainStores');
    $user = $_SESSION['loggedin'];
    $query = "SELECT * from `Admin` where `adminUser` = '$user'";
    $query_run = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($query_run);
    echo '<h1> Admin - '.$data['adminName'].'</h1>'
     ?>
</body>
