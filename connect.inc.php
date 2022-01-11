<?php
    error_reporting(0);
    $conn=mysqli_connect('localhost','id2553909_ashutosh','Ffrcut%64gjrRmca%ffbqzx');
    $note=mysqli_select_db($conn,'id2553909_darknight');
    if(!$note) {
    	 die("Error in Establishing Database Connection!");
    }
?>