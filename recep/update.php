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
   $link = mysqli_connect('localhost','pma','','chainStores');
   $user = $_SESSION['loggedin'];
   $item = $_POST['itemId']
   $model = $_POST['model']
   $query = "SELECT * from `Rcpts` where `recUser` = '$user'";
   $query_run = mysqli_query($link, $query);
   $data = mysqli_fetch_assoc($query_run);
   echo '<p><hr> Receptionist Name - '.$data['recName'].'<br/> <hr> Work Store Id - '.$data['storeId'].'</p>'
    ?>
</body>
