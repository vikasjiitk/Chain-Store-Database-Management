<!DOCTYPE html>
<title>Chain Store Management System</title>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
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
?>
<body>
  <p> Hello <?php echo $_SESSION['loggedin']; ?>!</p>
  <ul>
    <li><a class="active" href="index.php">Store Stock</a></li>
    <li><a href="profit.php">Profit</a></li>
    <li><a href="recp.php">Receptionists</a></li>
    <li style="float:right"><a class="active" href="../logout.php">Logout</a></li>
  </ul>
  <p>Search your store stock:</p>
  <ul class = "vertical">
  <li class = "vertical"><a href="index.php">By Model Id</a></li>
  <li class = "vertical"><a class="active" href="itemsearch.php">By Item Id</a></li>
  <li class = "vertical"><a href="fullstock.php"> See full stock </a></li>
</ul>
<p><br/><br/><br/><br/>Enter Item ID:</p>
<form action="" method="post">
  <input type="number" name="itemid" placeholder="Item Id">
  <button type="submit">Submit</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $link = mysqli_connect('localhost','root','cs315','chainStores');
  $user = $_SESSION['loggedin'];
  $query1 = "SELECT `storeId` from `Owners` where `ownerUsername` = '$user'";
  $query_run1 = mysqli_query($link, $query1);
  $store = mysqli_fetch_assoc($query_run1);
  // echo $store['storeId'];
  $Store = $store['storeId'];
  $item = $_POST['itemid'];
  $query2 = "SELECT * from `Item` where `itemId` = '$item' and `storeId` = '$Store'";
  $query_run2 = mysqli_query($link, $query2);
  $items = mysqli_num_rows($query_run2);
  if($items != 0){
    $data = mysqli_fetch_assoc($query_run2);
  $model = $data['modelId'];
  $query3 = "SELECT * FROM `Model` where `modelId` = '$model'";
  $query_run3 = mysqli_query($link, $query3);
  $mrp = mysqli_fetch_assoc($query_run3);
  echo 'Item found with model no.: '.$model;
  echo "\r\n\r\n";
  echo 'MRP of item: '.$mrp['mrp'];
  }
  else{echo 'no item found';}

}
 ?>
</body>
