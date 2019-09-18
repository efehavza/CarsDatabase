<?php
// include check_session.php to check if the session exists
require_once 'check_session.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cars Database</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>

        table
        {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }

        th, td
        {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th
        {
            background-color: black;
            color: white;
        }

        h2, h3
        {
            text-align: center;
        }

    </style>
</head>
<body>
<div id="wrapper">

    <?php
    require_once 'header.php';
    ?>
    <br><br><br>
    <fieldset>

        <legend>View Products</legend>
        <form method="post">
            <input type="text" name="search-field">
            <input type="submit" value="Search" name="search"><br><br>
        </form>

    </fieldset>


    <?php

    require_once "config.php";


    $name = $_POST['search-field'];
    $search = $_POST['search'];

    if ($search) {

        if (isset($name)) {

            $query = "select * from tblCars where Brand like '%$name%';";


            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0)
            {

                echo "<table id='products'>";
                echo "<tr><th>Product ID</th>";
                echo "<th>Brand</th>";
                echo "<th>Year</th>";
                echo "<th>Price</th></tr>";

                $i = 1;


                while ($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr><td>$i</td>";
                    echo "<td>" . $row['Brand'] . "</td>";
                    echo "<td>" . $row['Year'] . "</td>";
                    echo "<td>" . $row['Price'] . "</td></tr>";

                    $i++;
                }

                echo "</table>";
            }

            else {
                echo 'This item does not exist';
            }


        } else if($name == "") {

            echo 'You did not enter a name. Please enter a name into this form field.';
        }
    }

    ?>
</div>


</body>
</html>
