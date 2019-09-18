<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Cars Database</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>

        <div id="wrapper">

            <div class="front-page">

                <?php
                require_once 'header.php';

                ?>
                <div class="image-container">

                    <img src="images/porche.jpg" class="front-car-image" alt="car-image">

                    <div class="text-block">
                        <h1>Welcome to Car Sales Database</h1>
                        <p>This is the Database management system for car models. User can add new car models as well as view the
                            entire database.</p>
                    </div>

                </div>

            </div>

        </div>

    </body>

</html>
