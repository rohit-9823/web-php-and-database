<?php
include("auth.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

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

        input[type=text]:focus {
            background-color: orange;
        }

        input[type=email]:focus {
            background-color: orange;
        }

        input[type=password]:focus {
            background-color: orange;
        }

        input[type=number]:focus {
            background-color: orange;
        }

        input:focus-within {
            background-color: white;
        }

        input:hover {
            background-color: lightblue;
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
            margin-top: 30px;
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

            <img class="logo" src="logo2.png" alt="">
            <li><a href="login.php" class="hover">Login</a></li>
            <li><a href="Aboutus.php" class="hover">About</a></li>
            <li><a href="index.php" class="hover">Home</a></li>
        </ul>
    </div>
    <form method="post" action="registration.php">
       
        <div class="register-form">


            <h2>Register Here </h2>

            <label for="Name">Name</label> <br>
            <input type="text" name="name"><br> <br>

            <label for="Address">Address</label> <br>
            <input type="text" name="address"><br> <br>

            <label for="phonenumber">Phone Number</label> <br>
            <input type="number" name="ph"><br> <br>

            <label for="email">Email</label> <br>
            <input type="email" name="email"><br> <br>

            <label for="username">Username</label> <br>
            <input type="text" name="username" id="username" required><br> <br>

            <label for="Password">Password</label> <br>
            <input type="Password" name="password" id="password" required><br><br>
            <?php

if(isset($msg)){
  ?>
    <p>
        <?php
        echo $msg
        ?>
    </p>
    <?php
}
?>
            <?php

            if(isset($msgs)){
              ?>
                <p>
                    <?php
                    echo $msgs
                    ?>
   <br> <a href="Login.php"> Click here </a>to login.
                </p>
                <?php
            }
            ?>
            <button type="submit" id="Submit" name="register">Register</button>


    </form>
    </div>




    <script src="./main.js">


    </script>
</body>

</html>