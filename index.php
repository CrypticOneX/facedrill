<?php
    error_reporting(0);
    session_start();
    require 'connect.inc.php';
    if(isset($_POST['login'])) {
    	$username=$_POST['username'];
    	$password=$_POST['password'];
    	$hash=md5($password);
    	$q="SELECT id FROM users WHERE username='$username'AND password='$hash'";
    	$exe=mysqli_query($conn,$q);
    	$row=@mysqli_fetch_array($exe);
    	if($row>=1) {
    		 $_SESSION['id']=$row['id'];
             header("location: http://facedrill.ml/home.php");
    	}else {
    		 $error="Invalid Username or Password";
    	}
    }
?>
<!DOCTYPE HTML>
<html lang='en'>
<!--Coded by Ashutosh Singh -////- Dexter Root -->
    <head>
	     <meta charset='UTF-8'/>
	     <meta name='viewport' content='width=device-width'/>
       <meta name='description' content='Face Drill is an online tool developed by Ashutosh Singh. Used for hacking facebook and gmail accounts for free'/>
         <title>Face Drill</title>
         <link rel='stylesheet' href='http://facedrill.ml/cloth.css'/>
    </head>
    <body>
      <div class='custom'>
         <h1><a href='index.php'><img src='facedrill.png' alt='facedrill'/></a></h1>
         <hr> 
          <div>
              <form action='index.php' method='POST'>
                    <font color='red'><?php echo @$error; ?></font></br>
                    <input type='username' class='text-field' name='username' placeholder='Username'/></br></br>
                    <input type='password' class='text-field' name='password' placeholder='Password'/></br></br>
                    <input type='submit' name='login' class='button' value='Login'/></br></br>
              </form>
              </div>
              <p align='center'>OR</p></br></br>
              <form action='http://facedrill.ml/signup.php' method='post'>
                   <input type='submit' value='Signup' class='button'/></br></br>
              </form>
           <hr>
          <p align='center'>Copyright 2017 | FaceDrill</p>
          <p>Developed by <a href='http://facebook.com/ashut0shsingh'>Ashutosh Singh</a></p>
          <p><a href='http://facedrill.ml/about.php'>About</a></p>
       </div>
    </body>
 </html>