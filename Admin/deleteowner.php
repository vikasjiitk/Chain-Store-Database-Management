<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
?>
<title>Delete Owner</title>
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
      <li><a class="active" href="owner.php">Owner</a></li>
      <li><a href="profit.php">Profit</a></li>
      <li><a href="model.php">Model</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
    </ul>
<ul class = "vertical">
    <li class = "vertical"><a href="addowner.php">Add Owner</a></li>
    <li class = "vertical"><a class = "active3" href="deleteowner.php">Delete Owner</a></li>
    <li class = "vertical"><a href="ownerdetails.php">Owner Details</a></li>
    <li class = "vertical"><a href="displayowners.php">Display Owners</a></li>
  </ul>
  <h3>Delete a Owner</h3>
     <form action = "" method = "post">
     <input type = "number" name = "ownerId" placeholder="Owner ID">
     <button type="submit">DELETE</button>
     </form>

</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $link = mysqli_connect('localhost','pma','','chainStores');
  $user = $_SESSION['loggedin'];
  $owner = $_POST["ownerId"];
  $query1 = "SELECT * from `Owners` where `ownerId` = '$owner'";
  $query_run1 = mysqli_query($link, $query1);
  $num = mysqli_num_rows($query_run1);
  if($num != 0){
    $query2 = "DELETE from `Owners` where `ownerId` = '$owner'";
    if($query_run2 = mysqli_query($link, $query2)){
      echo '<p>Owner Deleted Succesfully</p>';
    }
    else{
      echo '<p class="warning"> Failure</p>';
    }
  }
  else{ echo '<p class="warning">Owner '.$owner.' does not exists</p>';}
}
?>
