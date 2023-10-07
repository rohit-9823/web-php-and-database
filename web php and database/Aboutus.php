

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        .main {
            border: 1px solid transparent;
            padding: -35px;
            background-color: rgb(173, 90, 90);
            color: white;
        }

        .about {
            padding: 4px;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;

        }


        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
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

        li a:hover {
            background-color: lightblue;
            padding: 9px;
            border-radius: 7px;
            transition: 0.5s;
        }

        .logo {
            width: 120px;
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 10px;
        }

        body {
            margin: 0px;
            padding: 0px;
            background-color: antiquewhite;
        }

        #about img {
            align-items: center;
            height: 200px;
            width: 300px;
            padding-left: 380px;

        }

        #about p {

            margin-left: 680px;
        }

        h5 {
            padding: 10px;
            border: 5px solid rgb(79, 73, 73);
            display: block;
        }

        h1 {
            float: left;
            margin-left: 50px;
            color: blue;
        }
    </style>
</head>

<body>
    <div class="main">

    <ul>

<img class="logo" src="logo2.png" alt="">
<li><a href="logout.php" class="hover">Log out</a></li>
<li><a href="Searchcar.php" class="hover">Search</a></li>
<li><a href="SellerPage.php" class="hover">Add car</a></li>
<li><a href="index.php" class="hover">Home</a></li>
</ul>

        <!-- <ul>
            <img class="logo" src="logo2.png" alt="">
            <li><a href="login.php">Login</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="index.php">Home</a></li>
        </ul> -->
    </div>

    <div class="about">

        <h1>ABOUT US</h1>

        <h4 id="about">
            <img src="oldman.jpg" alt=""><br><br>
            <p>Tom Murray<br>Manager</p>

            <h5>Welcome to our premier Audi showroom in Canberra, where luxury automotive excellence takes center stage.
                As you step into our meticulously designed space, you'll find a captivating ambiance that embodies the
                essence of the Audi brand.<br>
                Explore an impressive range of Audi vehicles, each a masterpiece of cutting-edge technology,
                expert craftsmanship, and exceptional performance.<br><br>

                Our showroom experience is more than a display of cars; it's an immersion into the world of Audi.
                Knowledgeable Audi experts are on hand to guide you through the selection process,
                offering insights tailored to your preferences. You're invited to get behind the wheel for a
                personalized test drive,
                experiencing the power and precision that define Audi vehicles.<br>
                But it doesn't end there. Our showroom also offers a collection of genuine Audi accessories and
                merchandise,
                allowing you to infuse your personal style into your driving experience. And when it comes to service,
                our commitment continues, with financing options and a state-of-the-art service center to ensure your
                Audi remains in optimal condition.


                will cherish and value for years to come.<br><br>
                Email: audishowroom@gmail.com<br>
                Location: Canberra, Australia<br>
                Phone Number: 6874591281
            </h5>





    </div>
</body>

</html>