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
     <input type="hidden" name="usercat" value="admin">
     <button type="submit">Admin Login</button>
   </form>
   <form action = "" method = "post">
     <input type="text" name="user" placeholder="Username">
     <input type = "password" name = "pass" placeholder="Password">
     <input type="hidden" name="usercat" value="owner">
     <button type="submit">Owner Login</button>
   </form>
   <form action = "" method = "post">
     <input type="text" name="user" placeholder="Username">
     <input type = "password" name = "pass" placeholder="Password">
     <input type="hidden" name="usercat" value="recep">
     <button type="submit">Receptionist Login</button>
   </form>
   <?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
     $user = $_POST["user"];
     $pass = $_POST["pass"];
     $link = mysqli_connect('localhost','pma','','chainStores');
     $usercat = $_POST["usercat"];
     if($usercat == "owner"){
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
   else if($usercat == "admin"){
   $query = "SELECT `adminUser` from `Admin` where `adminUser` = '$user' and `adminPass` = '$pass'";
   if($query_run=mysqli_query($link, $query)){
         $_SESSION['loggedin'] = $user;
         if(mysqli_fetch_assoc($query_run)){
           header('Location: Admin/index.php');
         }
         else{
           echo "<p class='warning'>Incorrrect Username Password</p>";
         }
       }
     }
     else if($usercat == "recep"){
     $query = "SELECT `recUser` from `Rcpts` where `recUser` = '$user' and `recPass` = '$pass'";
     if($query_run=mysqli_query($link, $query)){
           $_SESSION['loggedin'] = $user;
           if(mysqli_fetch_assoc($query_run)){
             header('Location: recep/index.php');
           }
           else{
             echo "<p class='warning'>Incorrrect Username Password</p>";
           }
         }
       }
   }
    ?>
