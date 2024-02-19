<?php 

    // This line includes the navbar 
    // session_start();
    include "./navbar.php";

    // if ( isset($_SESSION["user_id"]) ) {

    //     $mysqli = require __DIR__ . "/dbConfig.php";

    //     $sql = "SELECT * FROM users WHERE user_id = {$_SESSION['user_id']}";

    //     $result = $conn->query($sql);

    //     $user = $result->fetch_assoc();

    // }

    
    // print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coders Den Index</title>
</head>
<body>
    <h1>home</h1>
    <?php if( isset($user) ): ?>
        <p>You are logged in. Hello <?= htmlspecialchars($user["user_name"]) ?></p>
        <p><a href="logout.php">Logout</a></p>

    <?php else: ?>
        <p><a href="login.php">Login</a> or <a href="signup.php">Signup</a></p>
        
    <?php endif;?>

</body>
</html>