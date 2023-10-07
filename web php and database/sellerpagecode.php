<?php
include ("conn.php");


if(isset($_POST['carDetails'])){

$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$mileage = $_POST['mileage'];
$location = $_POST['location'];
$price = $_POST['price'];
if(empty($make) || empty($model) || empty($year) || empty($mileage) || empty($location) || empty($price)){
    $msg = "All field are required";
}else 
{  
    $user_id= $_SESSION['sno'];
    $sql = "INSERT INTO `cardetails` (`make` , `model` , `year` , `mileage` , `location` , `price`,`user_id`) values ( '$make ', '$model ', '$year ', '$mileage ', '$location ', '$price ','$user_id')";

    $sql_query = mysqli_query($conn,$sql);
    if($sql_query)
        {
            $msg = "Inserted Sucessfully ";
   header("location: sellerpage.php");
            
        }
}
}
?>