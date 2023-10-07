
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-image: url("Home.jpg");
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
            color: blueviolet;
            border-radius: 5px;
            padding: 5px;
            transition: 0.5s;
        }

        h1 {

            text-align: left;

            margin-top: 285px;
            margin-left: 250px;

            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: rgb(229, 229, 229);
        }

        a {
            text-decoration: none;
        }

        .home-btn {
            margin-left: 400px;
        }

        .home-btn a {
            text-decoration: none;
            color: white;
            border: 2px solid black;
            padding: 10px;
            background-color: blue;
            border-radius: 9px;
        }

        .home-btn a:hover {
            background-color: lightblue;
            color: blueviolet;
            transition: 0.5;

        }
    </style>
</head>

<body>
    <div class="main">


        <ul>
            <img class="logo" src="logo2.png" alt="logo">
            <li><a href="Aboutus.php" class="hover">About</a></li>
            <li><a href="login.php" class="hover">Login</a></li>
            <li><a href="registration.php" class="hover">Registration</a></li>
            <li><a href="index.php" class="hover">Home</a></li>
        </ul>
    </div>
    <div class="info">

        <h1>Life is too short to drive any random supercar. <br>Better equip yourself with an ultimate Audi.</h1>
        <div class="home-btn">
            <a href="login.php">LOGIN</a>
            <a href="registration.php">SIGN UP</a>
        </div>
    </div>
</body>

</html>