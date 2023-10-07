<?php
include("conn.php");


if(isset($_POST['register'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $ph = $_POST['ph'];
    $email = $_POST['email'];
    $uname = $_POST['username'];
    $bpass = $_POST['password'];
    $pass = md5($_POST['password']);

    

    if(empty($name) || empty($address) || empty($ph) || empty($email) || empty($uname) || empty($bpass)){
        $msg = "All fields are required";
    }elseif (strlen($bpass)<8) {

        $msg = "Password should be more than 8 characters";
    }else {
        $sql = "INSERT INTO `information` (`name` , `address` , `phonenumber` , `email` , `username` , `password`) values ( '$name ', '$address ', '$ph ', '$email ', '$uname ', '$pass ')";

        $sql_query = mysqli_query($conn,$sql);

        if($sql_query)
        {
            $msgs = "Registered Sucessfully "

            ?>
            <?php
        }
        
    }


}
?>

<?php


if(isset($_POST['login'])){

    $uname = $_POST['username'];
    $pass = md5($_POST['password']);
    $sno=1;

    if(empty($uname) || empty($pass)){

        $msg = "All field are required";

    }

    else{
        $sql = "select *from information where username='$uname' AND password='$pass'";
        $sql_run = mysqli_query($conn,$sql); 

        $count = mysqli_num_rows($sql_run);
        $rows = mysqli_fetch_assoc($sql_run);
        if($count==1){
            $_SESSION['sno'] = $rows['sno'];
            $_SESSION['login'] = true;
            header("location: Sellerpage.php");
}
        else{
            $msg="Invalid details";
        }
    }


}
?>