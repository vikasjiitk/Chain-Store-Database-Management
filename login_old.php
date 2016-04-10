<!DOCTYPE html>
<?php session_start();?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    <?php
      $userid = $password = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (!empty($_POST["username"]))
           {$userid = test_input($_POST["username"]);
         $_SESSION['userlogin']=$userid;}

         if (!empty($_POST["password"]))
           $password = test_input($_POST["password"]);
         }
         function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    ?>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>ChainStore</strong> Login </h1>
                            </div>
                    </div>

                    <div class="row">
                        <div>

                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $user = $_POST['username'];
          $pass = $_POST['password'];
          echo $user;
          echo $pass;
          s$_SESSION['username']=$user;
          $_SESSION['password']=$pass;
          // set up a connection or die
        //  $conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server");
          // try to login


                  $link = mysqli_connect($host,$user,$pass,$db)
                  //require 'connect.inc.php';
                  $query = "SELECT `ownerUsername` from `Owners` WHERE `ownerUsername`='$user'";
                  if($query_run=mysqli_query($link, $query))
                  {
                    $_SESSION['loggedin']=$user;
                    if(mysqli_fetch_assoc($link, $query_run))
                    header('Location: welcome.php');
                  }
                else {
                     echo "<div class='container'>"."<form class='form-signin' role='form'>"."<center>".
              "<button class='btn btn-lg btn-warning' disabled>Incorrect Username/Password
              </button>"."</center>"."</form>".
              "</div>";
                }
          }

        ?>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
