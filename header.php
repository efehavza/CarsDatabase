<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">

<br><br><br>
<div class="heading">
    <h1>Cars Database</h1>
</div>

<div class="nav-bar">

    <a href="index.php">Home</a>

    <?php
    if (isset($_SESSION['username'])) {
        echo "<a href='logout.php'>Logout</a>";
    } else {
        echo "<a href='login.php'>Login</a>";
    }
    ?>

    <a href="register.php">Register</a>
    <a href="addProduct.php">Add Product</a>
    <a href="viewProducts.php">View Products</a>




</div>

