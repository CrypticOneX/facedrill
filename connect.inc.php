<?php
    error_reporting(0);
    $conn=mysqli_connect('localhost','username','password');
    $note=mysqli_select_db($conn,'db_name');
    if(!$note) {
    	 die("Error in Establishing Database Connection!");
    }

?>
