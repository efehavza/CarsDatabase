<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cars Database</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="wrapper">
    <?php
    require_once 'header.php';
    ?>
    <br><br><br>
    <form action="registerVerify.php" method="post">
        <fieldset>
            <legend>Register</legend>
            <div class="row">

                <label class="labels">Username:</label>
                <div class="right-tab">
                    <input type="text" name="username" required autofocus class="input-field">
                </div>
            </div>

            <div class="row">
                <label class="labels">Password:</label>
                <div class="right-tab">
                    <input type="password" name="password" required autofocus class="input-field">
                    <br><input type="submit" value="Register" required autofocus class="submit-button">
                </div>
            </div>
        </fieldset>

    </form>

    <?php

    if(isset($_REQUEST['result'])) {

        if($_REQUEST['result'] == "userexists") {

            echo "User already exists";

        }

        elseif($_REQUEST['result'] == "success") {

            echo "User is successfully registered.";

        }

        elseif($_REQUEST['result'] == "fail") {

            echo "Something went wrong. User is not registered.";

        }

    }
    ?>
</div>


</body>
</html>
