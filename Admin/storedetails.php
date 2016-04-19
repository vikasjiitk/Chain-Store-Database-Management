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
  $q = "SELECT * from `Admin` where `adminUser` = '$user' and `adminPass` = '$pass'";
  $link = mysqli_connect('localhost','pma','','chainStores');
  $run = mysqli_query($link, $q);
  $n = mysqli_num_rows($run);
  if($n == 0){
    header("Location:../login.php");
    exit;
  }
}
?>
<title>Store Details</title>
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
      <li><a href="index.php">Admin</a></li>
      <li><a class="active" href="store.php">Store</a></li>
      <li><a href="owner.php">Owner</a></li>
      <li><a href="profit.php">Profit</a></li>
      <li><a href="model.php">Model</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
   </ul>
   <ul class = "vertical">
    <li class = "vertical"><a href="addstore.php">Add Store</a></li>
    <li class = "vertical"><a href="deletestore.php">Delete Store</a></li>
    <li class = "vertical"><a class = "active3" href="storedetails.php">Store Details</a></li>
    <li class = "vertical"><a href="displaystores.php">Display Stores</a></li>
  </ul>
  <h3>Store Details</h3>
   <form action = "" method = "post">
     <input type = "text" name = "storeId" placeholder="Store ID">
     <button type="submit">Submit</button>
   </form>
   <?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
     $link = mysqli_connect('localhost','pma','','chainStores');
     $user = $_SESSION['loggedin'];
     $store = $_POST["storeId"];
     $query = "SELECT * from `Stores` where `storeId` = '$store'";
     $query_run = mysqli_query($link, $query);
     $data = mysqli_fetch_assoc($query_run);
     echo '<p><hr> Store Details - '.$data['location'].', '.$data['contactNo'].'</p>';
     $query = "SELECT * from `Owners` where `storeId` = '$store'";
     $query_run = mysqli_query($link, $query);
     echo '<hr>Owners: ';
     $i = 1;
     while($data = mysqli_fetch_assoc($query_run)){
       echo '<p>('.$i.') Owner Id - '.$data['ownerId'].', Owner Name - '.$data['ownerName'].'</p>';
     }
     $query = "SELECT * from `Rcpts` where `storeId` = '$store'";
     $query_run = mysqli_query($link, $query);
     echo '<hr>Receptionists: ';
     $i = 1;
     while($data = mysqli_fetch_assoc($query_run)){
       echo '<p>('.$i.') Receptionist Id - '.$data['recId'].', Receptionist Name - '.$data['recName'].', Work Store Id - '.$data['storeId'].'</p>';
     }
   }
  ?>
</body>
