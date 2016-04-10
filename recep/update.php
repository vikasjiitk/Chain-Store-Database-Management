<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
?>>
<title>Receptionst</title>
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
   <p>
   <h1>Chain Store Management System</h1>
   <h3></h3>
   </p>
    <ul>
      <li><a href="index.php">Receptionst</a></li>
      <li><a class="active" href="update.php">Update Stock</a></li>
      <li><a href="selling.php">Selling Details</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
    </ul>
     <form action = "" method = "post">
     <input type = "text" name = "itemId" placeholder="Item ID">
     <input type = "text" name = "model" placeholder="Model">
     <button type="submit">Update</button>
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
