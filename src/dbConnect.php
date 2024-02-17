<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "coders_den";

    //Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if($conn){
        echo"Success";
    }
    else{
        die("Error".mysqli_connect_errno());
    }

?>