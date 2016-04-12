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
    <li><a href="index.php">Owner</a></li>
    <li><a class="active" href="modelsearch.php">Store Stock</a></li>
    <li><a href="profit.php">Profit</a></li>
    <li><a href="recep.php">Receptionists</a></li>
    <li style="float:right"><a class="active" href="../logout.php">Logout</a></li>
  </ul>
  <ul class = "vertical">
  <li class = "vertical"><a class="active3" href="modelsearch.php">By Model Id</a></li>
  <li class = "vertical"><a href="itemsearch.php">By Item Id</a></li>
  <li class = "vertical"><a href="fullstock.php"> See full stock </a></li>
</ul>
<p>Enter Model ID:</p>
<form action="" method="post">
  <input type="number" name="modelid" placeholder="Model Id">
  <button type="submit">Submit</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $link = mysqli_connect('localhost','pma','','chainStores');
  $user = $_SESSION['loggedin'];
  $query1 = "SELECT `storeId` from `Owners` where `ownerUsername` = '$user'";
  $query_run1 = mysqli_query($link, $query1);
  $store = mysqli_fetch_assoc($query_run1);
  // echo $store['storeId'];
  $Store = $store['storeId'];
  $model = $_POST['modelid'];
  $query2 = "SELECT * from `Item` where `modelId` = '$model' and `storeId` = '$Store'";
  $query_run2 = mysqli_query($link, $query2);
  $items = mysqli_num_rows($query_run2);
  $no = $items;
  echo '<p>No. of items with model id '.$model.' : '.$no;

}
 ?>
</body>
