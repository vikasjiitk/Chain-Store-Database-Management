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
  <li class = "vertical"><a class="active" href="index.php">By Model Id</a></li>
  <li class = "vertical"><a href="itemsearch.php">By Item Id</a></li>
  <li class = "vertical"><a href="fullstock.php"> See full stock </a></li>
</ul>
<p><br/><br/><br/><br/>Enter Model ID:</p>
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
