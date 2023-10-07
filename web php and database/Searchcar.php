<?php
include("conn.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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
            margin-right: 50px;
            float: right;
            border: 1px solid black;
            display: inline-block;
            border-radius: 5px;
            padding: 50px;
            background-color: grey;
            margin-top: 50px;


            color: white;
        }

        button:hover {
            background-color: lightblue;
        }

        button {
            margin-left: 45px;

        }

        .search:hover {
            background-color: lightblue;
        }

        table {
            margin-top: 100px;
            margin-left: 30px;
            padding: 5px;
        }

        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }
    </style>

</head>

<body>

    <div class="main">


        <ul>
            <img class="logo" src="logo2.png" alt="logo">
            <li><a href="Aboutus.php" class="hover">About</a></li>
            <li><a href="logout.php" class="hover">Logout </a></li>
            <li><a href="SellerPage.php" class="hover">Add car</a></li>
            <li><a href="index.php" class="hover">Home</a></li>

        </ul>
    </div>


    <div class="search-container">
        <form action="Searchcar.php" method="post">
            <h1 class="des">Search car based on model and location</h1>
            <input type="text" name="search" id="search-location">
            <input type="submit" id="search-btne" name="searchbtn" class="search" value="Search">
        </form>
    </div>

    <table>
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
            <th>Mileage</th>
            <th>Location</th>
            <th>price</th>

        </tr>
<?php

if(isset($_POST['searchbtn'])){
    $search = $_POST['search'];
session_start();
    $user_id= $_SESSION['sno'];
    $sql= "select *from cardetails  WHERE (user_id = '$user_id') 
    AND (location = '$search' OR model = '$search')";
    $sql_run= mysqli_query($conn,$sql);
    $count = mysqli_num_rows($sql_run);
    if($count>0){
        while ($result = mysqli_fetch_assoc($sql_run)){
            ?>
  <tr>
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
    else{
        ?>
        <tr>
        <td colspan="6" class="py-3"> No data Founds</td>
        </tr>
        <?php
    }
}

    ?>
        <tr>

        </tr>

    </table>
</body>


</html>