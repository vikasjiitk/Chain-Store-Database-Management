<!DOCTYPE html>
<title>Receptionst</title>
<head>
  <link rel="stylesheet" type="text/css"1 href="../style.css">
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
      <li><a href="update.php">Update Stock</a></li>
      <li><a class="active"a href="selling.php">Selling Details</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
    </ul>
     <form action = "" method = "post">
     <input type = "text" name = "itemId" placeholder="Item ID">
     <input type = "date" name = "date" placeholder="Date">
     <button type="submit">Submit</button>
     </form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $link = mysqli_connect('localhost','pma','','chainStores');
  $user = $_SESSION['loggedin'];
  $itemId = $_POST['itemId'];
  $date = $_POST['date'];
  $query1 = "SELECT `storeId` from `Rcpts` where `recUser` = '$user'";
  $query_run1 = mysqli_query($link, $query1);
  $store = mysqli_fetch_assoc($query_run1);
  // echo $store['storeId'];
  $Store = $store['storeId'];
  $query2 = "SELECT * from `Item` where `itemId` = '$itemId' and `storeId` = '$Store'";
  if($query_run2 = mysqli_query($link, $query2)){
    $data = mysqli_fetch_assoc($query_run2);
    $model = $data['modelId'];
    $query3 = "SELECT * from `Model` where `modelId` = '$model'";
    $query_run3 = mysqli_query($link, $query3);
    $data2 = mysqli_fetch_assoc($query_run3);
    $cp = $data2['cp'];
    $sp = $data2['mrp'];
    $query4 = "DELETE from `Item` where `itemId` = '$itemId'";
    $query_run4 = mysqli_query($link, $query4);
    $query5 = "INSERT into `Sales` values ('$date',".$itemId.",".$Store.",".$sp.",".$cp.")";
    $query_run5 = mysqli_query($link, $query5);
    if($query_run5 && $query_run4){
      echo '<p>Item sold successfully</p>';
    }
    else echo 'Failure in selling';
  }
  else{
    echo '<p class="warning">Such item '.$itemId.' does not exist in stock.</p>';
  }
}
 ?>
</body>
