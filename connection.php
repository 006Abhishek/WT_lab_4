<?php
 $username = "root";
 $password = "";
 $server = 'localhost';
 $db = "mobileshope";
 $con = mysqli_connect( $server,$username,$password,$db );

 if($con){

    echo "Connection Successful";
 }
 else{
    die("No connection".mysqli_connect_error());
 }
?>