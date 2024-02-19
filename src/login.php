<?php

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $mysqli = require __DIR__ . "/dbConfig.php";

        $login_email = $_POST["loginEmail"];
        
        $sql = sprintf("SELECT * FROM users WHERE user_mail = '%s'",$conn->real_escape_string($_POST['loginEmail']));

        $result = $conn->query($sql);

        $user = $result->fetch_assoc();

        // var_dump($user);

        if($user) {

           if( password_verify($_POST["loginPassword"], $user["password"])) {
                
                session_start();

                session_regenerate_id();

                $_SESSION["user_id"] = $user["user_id"];
                header("location: index.php");
                // die("Login Successful!");
                // exit;
           }

        }
        exit;

    }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corder's Den Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <div>
            <label for="login_email">Email:</label>
            <input type="email" name="login_email" id="login_email" value="<?= htmlspecialchars($_POST["login_email"] ?? "")?>">
        </div>
        <div>
            <label for="login_password">Password:</label>
            <input type="password" name="login_password" id="login_password">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html> -->