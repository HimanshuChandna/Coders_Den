<?php 

    $mysqli = require __DIR__ . "/dbConfig.php";

    $sql = sprintf("SELECT * FROM users WHERE user_mail = '%s'", $conn->real_escape_string($_GET["user_mail"]));

    $result = $conn->query($sql);
    
    $is_available = $result->num_rows === 0;

    header("Content-Type: application/json");

    echo json_encode(["available" => $is_available]);

?>