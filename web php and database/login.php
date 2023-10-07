<?php
include("auth.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-color: antiquewhite;
            background-size: cover;


        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: brown;
        }

        li {
            float: right;
            margin-top: 20px;
            margin-right: 20px;
        }

        li a {
            text-decoration: none;
            margin-left: 12px;
            font-size: large;
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-top: 12px;
        }

        .logo {
            width: 120px;
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 10px;
        }

        .main {
            border: 1px solid transparent;
            padding: -24px;
            background-color: black;
            color: white;
        }

        .hover:hover {
            background-color: lightblue;
        }

        form {
            margin-left: 500px;
            border: 1px solid black;
            display: inline-block;
            border-radius: 5px;
            padding: 50px;
            /* background-color: grey; */
            margin-top: 50px;
            background-image: url("register.jpg");

            color: white;
        }

        button:hover {
            background-color: lightblue;
        }

        button {
            margin-left: 45px;
        }
    </style>
</head>

<body>

    <div class="main">

        <ul>
            <img class="logo" src="logo2.png" alt="logo">
            <li><a href="Aboutus.php" class="hover">About</a></li>
            <li><a href="registration.php" class="hover">Registration</a></li>
            <li><a href="index.php" class="hover">Home</a></li>
        </ul>
    </div>



    <form action="login.php" method= "post">
        <p><strong> Login Here!!</strong></p><br>

        <label for="username">Username</label> <br>
        <input type="text" name="username" id="username" required><br> <br>

        <label for="Password">Password</label> <br>
        <input type="Password" name="password" id="password" required><br><br>
<?php
        if(isset($msg)){
            echo $msg;
unset ($msg);
        }
        ?>
        <button type="submit" name="login">Login</button>
        <p>Don't have an account? <a href="registration.php">Click here</a>to register</p>


    </form>
    </div>

</body>
<script>

    function myfunction() {
        var username = document.getElementById("username");
        var password = document.getElementById("password");


        var preUname = localStorage.getItem("username_reg");
        var prePass = localStorage.getItem("password_reg");

        if (username == preUname && password == prePass) {
            location.href = "Sellerpage.html";

        } else {
            alert("Invalid Details");

        }
    }

</script>

</html>