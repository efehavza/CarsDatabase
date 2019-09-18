<?php

ob_start();

require_once 'config.php';

$username = $_REQUEST['username'];

$hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);


$query = "Select username from table tblUsers where username = '$username';";
$result = mysqli_connect($conn, $query);

if(mysqli_num_rows($result)>1) {
    header("location:register.php?result=userexists");
}

else {
    $query = "insert into tblUsers(username, password)values('$username', '$hashed_password');";
    $result = mysqli_query($conn, $query);

    if($result == 1) {
        header("location:register.php?result=success");
    }
    else {
        header("location:register.php?result=fail");
    }
}


?>
