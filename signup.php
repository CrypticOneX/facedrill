<?php
    error_reporting(0);
    require 'connect.inc.php';
    if(isset($_POST['name']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeat']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['country']) && isset($_POST['sex'])) {
    	$name=$_POST['name'];
        $last_name=$_POST['lname'];
    	$username=$_POST['username'];
    	$password=$_POST['password'];
    	$re_check=$_POST['repeat'];
    	$hash=md5($password);
    	$email=$_POST['email'];
        $contact=$_POST['phone'];
        $country=$_POST['country'];
        $sex=$_POST['sex'];
        $ip=$_SERVER['REMOTE_ADDR'];
        $date=date('D,d M,Y',time());
    	if($password!=$re_check) {
    		$error="Password Not Matches";
    	}else{
	    	$check="SELECT * FROM users WHERE username='$username'";
	    	$check2=mysqli_query($conn,$check);
	    	$row=mysqli_fetch_array($check2);
	    	if($row>1) {
	    		$string="$username already exist please try another";
	        }else{
	    	     $q="INSERT INTO users (name,last_name,username,password,email,phone,country,sex,ip,date) values ('$name','last_name','$username','$hash','$email','$contact','$country','$sex','$ip','$date')";
	    	     $exe=mysqli_query($conn,$q);
	    	     if($exe)
	    		     header('location: http://facedrill.ml/welcome.php');
	    	     else
	    		     echo 'An error occured Please try later';
	    	}
    	}
    }
?>
<!DOCTYPE HTML>
<html lang='en'>
     <head>
         <meta charset='UTF-8'/>
         <meta name='viewport' content='width=device-width'/>
         <meta name='description' content='Face Drill Signup'/>
         <title>Face Drill -Signup</title>
         <link rel='stylesheet' href='http://facedrill.ml/cloth.css'/>
     </head>
     <body>
        <div class='custom'>
            <h1><img src='facedrill.png' align='center' alt='facedrill'/></h1>
            <hr>
            <div>
                 <form action='signup.php' method='POST'>
                     <input type='text' name='name' class='text-field' placeholder='First Name' required/></br></br>
                     <input type='text' name='lname' class='text-field' placeholder='Last Name' required/></br></br>
                     <input type='username' name='username' class='text-field' placeholder='Username' reqiured/></br>
                     <font color='red'><?php echo @$string; ?></font></br>
                     <input type='password' name='password' class='text-field' placeholder='Password' required/></br></br>
                     <input type='password' name='repeat' class='text-field' placeholder='Re-Enter Password' required/></br>
                     <font color='red'><?php echo @$error; ?></font></br>
                     <input type='text' name='email' class='text-field' placeholder='Email' required/></br></br>
                     <input type='text' name='phone' placeholder='Contact Number' class='text-field'/></br></br>
                     <select name='country' class='list'>
                          <option>India</option>
                          <option>Nepal</option>
                          <option>Pakistan</option>
                     </select></br></br>
                     Sex: <input type='radio' name='sex' value='Male'/>Male
                     <input type='radio' name='sex' value='Female'/>Female
                     <input type='radio' name='sex' value='Others'/>Other</br></br>
                     <input type='submit' name='registered' class='button' value='Signup'/>
                     <input type='reset' value='Clear' class='button'/>
                     </br></br>
                     <a href='http://facedrill.ml/index.php'>Login</a>
                 </form>
            </div>
            <hr>
            <p>Copyright 2017 | FaceDrill</p>
            <p>Developed by <a href='http://facebook.com/ashut0shsingh'>Ashutosh Singh</a></p>
            <p><a href='http://facedrill.ml/about.php'>About</a></p>
        </div>
    </body>
</html>