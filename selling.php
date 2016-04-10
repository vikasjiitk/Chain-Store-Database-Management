<!DOCTYPE html>
<?php session_start();?>
<title>Receptionst</title>
<head>
  <link rel="stylesheet" type="text/css"1 href="style.css">
<style>
</style>
</head>
<body>
   <p>
   <h1>Chain Store Management System</h1>
   <h3></h3>
   </p>   
    <ul>
      <li><a href="receptionist.php">Receptionst</a></li>
      <li><a href="update.php">Update Stock</a></li>
      <li><a class="active"a href="selling.php">Selling Details</a></li>
      <li style="float:right"><a class="active1" href="logout.php">Logout</a></li>
    </ul>
     <form action = "" method = "post">
     <input type = "text" name = "itemId" placeholder="Item ID">
     <input type = "text" name = "date" placeholder="Date">
     <button type="submit">Submit</button>
     </form>
</body>