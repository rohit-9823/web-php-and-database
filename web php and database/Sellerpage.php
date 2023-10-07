

<?php
include("sellerpagecode.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SellerPage</title>
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

        .addCar {
            margin-left: 600px;
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

        p {
            text-align: center;
            padding-bottom: 20px;
        }

        button:hover {
            background-color: lightblue;
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

        table,
        th,
        td {
            border: 1px solid;
        }

        table {
            margin-left: 20px;
            margin-top: -450px;

        }

        .hover:hover {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <div class="main">
        <ul>
            <img class="logo" src="logo2.png" alt="">
            <li><a href="Aboutus.php" class="hover">About</a></li>
            <li><a href="logout.php" class="hover">Logout</a></li>
            <li><a href="Searchcar.php" class="hover">Search</a></li>
            <li><a href="index.php" class="hover">Home</a></li>
        </ul>
    </div>

    <div class="details">
        <table>
            <tr>
                <th>Name</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Mileage</th>
                <th>Location</th>
                <th>price</th>

            </tr>
            <?php

      $user_id=$_SESSION['sno'];
    //   $sql= "select *from cardetails where user_id='$user_id'";
      $sql = "SELECT cardetails.*, information.name 
        FROM cardetails 
        INNER JOIN information ON cardetails.user_id = information.sno 
        WHERE cardetails.user_id = '$user_id'";

      $sql_run= mysqli_query($conn,$sql);
      $count = mysqli_num_rows($sql_run);
      if($count>0){
          while ($result = mysqli_fetch_assoc($sql_run)){
              ?>
    <tr>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['make']; ?></td>
      <td><?php echo $result['model']; ?></td>
      <td><?php echo $result['year']; ?></td>
      <td><?php echo $result['mileage']; ?></td>
      <td><?php echo $result['location']; ?></td>
      <td><?php echo $result['price']; ?></td>

      
    </tr>
    
              <?php
          }
      }
      ?>
            <tr>


    </div>
    <div class="addCar">

        <form action ="Sellerpage.php" method="post">
            <p><strong> Add Car Details</strong> </p>

            <!-- Name .. Address  ,, phone number ,, email address,, username.. password -->
            <label for="Make">Make</label> <br>
            <input type="text" name="make" id="make"><br> <br>

            <label for="Model">Model</label> <br>
            <input type="text" name="model" id="model"><br> <br>

            <label for="year">Year</label> <br>
            <input type="date" name="year" id="year"><br> <br>

            <label for="mileage">Mileage</label> <br>
            <input type="number" name="mileage" id="mileage"><br> <br>

            <label for="Location">Location</label> <br>
            <input type="text" name="location" id="location"><br> <br>

            <label for="price">Price</label> <br>
            <input type="number" name="price" id="price"><br><br>

            <?php

            if(isset($msg)){
                echo $msg;
                unset($msg);
            }
            ?>
            <input id="add-btn" type="submit" name="carDetails"><br><br>




        </form>


    </div>


</body>

</html>





</tbody>
</table>