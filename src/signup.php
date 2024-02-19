<?php

    print_r($_POST);
    $name = $_POST["signupName"];
    $usermail = $_POST["signupEmail"];
    $password = $_POST["signupPassword"];
    $repassword = $_POST["signupRePassword"];

    if ( ! preg_match("/[0-9]/", $password)){
        die("Passwords must contain at least one number");
    }

    if( $password !== $repassword){
        die("Passwords do not match!");
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $mysqli = require __DIR__. "/dbConfig.php";

    $sql = "INSERT INTO users (user_name, password, user_mail) VALUES('$name', '$password_hash' , '$usermail')";

    if ($conn->query($sql) == TRUE) {
        // echo "Successfully created the record!";
        header("Location: signup_success.html");
        exit;
    }
    else {
        echo "Error".$sql."<br>".$conn->error;
        
    }

    

    var_dump($password_hash);

?>