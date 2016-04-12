<!DOCTYPE html>
<?php session_start();
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
<title>Store Profit</title>
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
    <li><a href="index.php">Owner</a></li>
    <li><a href="modelsearch.php">Store Stock</a></li>
    <li><a class="active" href="profit.php">Profit</a></li>
    <li><a href="recep.php">Receptionists</a></li>
    <li style="float:right"><a class="active" href="../logout.php">Logout</a></li>
  </ul>
    <ul class = "vertical">
    <li class = "vertical"><a class = "active3" href="storeprofit.php">Store Profit</a></li>
    <li class = "vertical"><a href="dayprofit.php">Day Profit</a></li>
  </ul>
   <h3>Total Store Profit</h3>
</body>
<?php
if(1){
  $link = mysqli_connect('localhost','pma','','chainStores');
  $user = $_SESSION['loggedin'];
  $query1 = "SELECT `storeId` from `Owners` where `ownerUsername` = '$user'";
  $query_run1 = mysqli_query($link, $query1);
  $store = mysqli_fetch_assoc($query_run1);
  $storeId = $store['storeId'];
  $query2 = "SELECT sum(`cp`),sum(`sp`) from `Sales` where `storeId` = '$storeId'";
  $query_run2 = mysqli_query($link, $query2);
  while($data = mysqli_fetch_assoc($query_run2)){
    // echo '<p><hr><hr> Receptionist Details - '.$data['recId'].', '.$data['storeId'].', '.$data['recUser'].', '.$data['recName'].'</p>';
    echo '<p><hr><hr> Total Cost Price : '.$data['sum(`cp`)'].'</p>';
    echo '<p><hr><hr> Total Selling Price : '.$data['sum(`sp`)'].'</p>';
    $profit = $data['sum(`sp`)'] - $data['sum(`cp`)'];
    echo '<p><hr><hr> Total Profit of the Store : '.$profit.'</p>';
  }
}
