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
  $q = "SELECT * from `Admins` where `adminUser` = '$user' and `adminPass` = '$pass'";
  $link = mysqli_connect('localhost','pma','','chainStores');
  $run = mysqli_query($link, $q);
  $n = mysqli_num_rows($run);
  if($n == 0){
    header("Location:../login.php");
    exit;
  }
}
?>
<title>Delete Model</title>
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
      <li><a href="store.php">Store</a></li>
      <li><a href="owner.php">Owner</a></li>
      <li><a href="profit.php">Profit</a></li>
      <li><a class="active" href="model.php">Model</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
    </ul>
  <ul class = "vertical">
    <li class = "vertical"><a href="addmodel.php">Add Model</a></li>
    <li class = "vertical"><a class="active3" href="deletemodel.php">Delete Model</a></li>
    <li class = "vertical"><a href="updatemodel.php">Update Model</a></li>
    <li class = "vertical"><a href="displaymodel.php">Display Models</a></li>
  </ul>
  <h3>Delete a Model</h3>
     <form action = "" method = "post">
     <input type = "text" name = "modelId" placeholder="Model ID">
     <button type="submit">DELETE</button>
     </form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $link = mysqli_connect('localhost','pma','','chainStores');
  $user = $_SESSION['loggedin'];
  $modelId = $_POST["modelId"];
  $query1 = "SELECT * from `Model` where `modelId` = '$modelId'";
  $query_run1 = mysqli_query($link, $query1);
  $num = mysqli_num_rows($query_run1);
  if($num != 0){
    $query2 = "DELETE from `Model` where `modelId` = '$modelId'";
    if($query_run2 = mysqli_query($link, $query2)){
      echo '<p>Model Deleted Succesfully</p>';
    }
    else{
      echo '<p class="warning"> Failure</p>';
    }
  }
  else{ echo '<p class="warning">Model '.$modelId.' does not exists</p>';}
}
?>
