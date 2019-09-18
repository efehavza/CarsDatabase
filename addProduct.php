<?php
require_once 'check_session.php';
?>

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

    <?php
    require_once 'header.php';
    ?>

    <h2 class="welcome-heading">Welcome <?php echo $_SESSION['username']; ?></h2>
<br><br><br>
<form action="addProductInsert.php" method="post">

    <fieldset>
        <legend>Add Product</legend>
        <div class="row">

            <label class="labels">Brand:</label>
            <div class="right-tab">
                <input type="text" name="productBrand" autofocus class="input-field">
            </div>
        </div>

        <div class="row">
            <label class="labels">Year:</label>
            <div class="right-tab">
                <input type="text" name="productYear" autofocus class="input-field">
            </div>
        </div>

        <div class="row">
            <label class="labels">Price:</label>
            <div class="right-tab">
                <input type="text" name="productPrice" autofocus class="input-field">
                <br><input type="submit" value="Add" required autofocus class="submit-button">
            </div>
        </div>
    </fieldset>
</form>

    <?php

    if (isset($_REQUEST['result'])) {

        if ($_REQUEST['result'] == "success") {

            echo "<p>Product Added</p>";

        }

        else if($_REQUEST['result'] == "fail") {
            echo "<p>Product Cannot be Added All Fields Must Be Filled In</p>";
        }
    }

    ?>

</div>


</body>
</html>



