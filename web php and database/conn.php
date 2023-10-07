<?php
$server="127.0.0.1:3307";
$username= "root";
$password = "";
$database = "information";

$conn= mysqli_connect($server, $username, $password, $database);

if($conn){
    echo"";
}
else{
    die("error".mysqli_connect_error());
}

// session_start();
// $conn = mysqli_connect("localhost","root","","milan");
// if($conn){
// 
// }else{
    // echo "Not connected";
// }
?>