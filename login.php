<!DOCTYPE html>
<?php session_start();?>
<title>Chain Store Management System</title>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
</style>
</head>
<body>
   <p>
   <h1> Chain Store Management System</h1>
   <h3>Login</h3>
 </p>
   <form action = "" method = "post">
     <input type="text" name="user" placeholder="Username">
     <input type = "password" name = "pass" placeholder="Password">
     <button type="submit">Login</button>
   </form>
   <?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
     $user = $_POST["user"];
     $pass = $_POST["pass"];
     $link = mysqli_connect('localhost','root','cs315','chainStores');
     $query = "SELECT `ownerUsername` from `Owners` where `ownerUsername` = '$user' and `OwnerPass` = '$pass'";
     if($query_run=mysqli_query($link, $query)){
       $_SESSION['loggedin'] = $user;
       if(mysqli_fetch_assoc($query_run)){
         header('Location: owner/index.php');
       }
       else{
         echo "<p class='warning'>Incorrrect Username Password</p>";
       }
     }
   }
    ?>
