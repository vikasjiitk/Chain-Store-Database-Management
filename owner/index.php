<!DOCTYPE html>
<title>Chain Store Management System</title>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
</style>
</head>
<?php
session_start();
// echo $_SESSION['loggedin'];
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
else{
  $user = $_SESSION['loggedin'];
  $pass = $_SESSION['pass'];
  $q = "SELECT * from `Owners` where `ownerUsername` = '$user' and `OwnerPass` = '$pass'";
  $link = mysqli_connect('localhost','pma','','chainStores');
  $run = mysqli_query($link, $q);
  $n = mysqli_num_rows($run);
  if($n == 0){
    header("Location:../login.php");
    exit;
  }
}
?>
<body>
   <p>
   <h1>Chain Store Management System</h1>
   <h3></h3>
  <ul>
    <li><a class="active" href="index.php">Owner</a></li>
    <li><a href="modelsearch.php">Store Stock</a></li>
    <li><a href="profit.php">Profit</a></li>
    <li><a href="recep.php">Receptionists</a></li>
    <li style="float:right"><a class="active" href="../logout.php">Logout</a></li>
  </ul>
<?php
    $link = mysqli_connect('localhost','pma','','chainStores');
    $user = $_SESSION['loggedin'];
    $query = "SELECT * from `Owners` where `ownerUsername` = '$user'";
    $query_run = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($query_run);
    echo '<p><hr> Owner Name - '.$data['ownerName'].'<br/> <hr> Owner Username - '.$data['ownerUsername'].'<br/> <hr> Owner Id - '.$data['ownerId'].'<br/> <hr> Work Store Id - '.$data['storeId'].'</p>'
     ?>
</body>