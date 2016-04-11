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
?>
<body>
   <p>
   <h1>Chain Store Management System</h1>
   <h3></h3>
  <ul>
    <li><a class="active" href="index.php">Store Stock</a></li>
    <li><a href="profit.php">Profit</a></li>
    <li><a href="recp.php">Receptionists</a></li>
    <li style="float:right"><a class="active" href="../logout.php">Logout</a></li>
  </ul>
  <ul class = "vertical">
  <li class = "vertical"><a href="index.php">By Model Id</a></li>
  <li class = "vertical"><a  href="itemsearch.php">By Item Id</a></li>
  <li class = "vertical"><a class="active3" href="fullstock.php"> See full stock </a></li>
</ul>
<form action="" method="post">
  <button type="submit">See full stock</button>
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
  // $item = $_POST['itemid'];
  $query2 = "SELECT `modelId`, count(*) from `Item` where `storeId` = '$Store' group by `modelId`";
  $query_run2 = mysqli_query($link, $query2);
  $items = mysqli_num_rows($query_run2);
  if($items != 0){
    $i = 1;
  while($data = mysqli_fetch_assoc($query_run2)){
    $model = $data['modelId'];
    $count = $data['count(*)'];
    $query3 = "SELECT * FROM `Model` where `modelId` = '$model'";
    $query_run3 = mysqli_query($link, $query3);
    $mrp = mysqli_fetch_assoc($query_run3);
    echo '('.$i.') Model Id: '.$model.' ---- no. of items: '.$count;
    $i = $i+1;
  }
  }
  else{echo 'nothing found';}

}
 ?>
</body>
