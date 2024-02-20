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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./stylesheets/navbar.css">
    <link rel="stylesheet" href="./stylesheets/index.css">
    <title>Coders Den Index</title>
</head>
<body>
    <div class="hero-section">
    <div class="heading">
        <p>Your One-Stop</p>
        <p><span id="highlight_heading">Notes</span> Destination</p>
    </div>
    <p class="sub-heading">Community Driven Notes Aggregation Platform!</p>
    <div class="hero_btns">
        <button class="btn" id="contributeNotesBtn"><a>Contribute Notes</a></button>
        <button class="btn" id="notesBtn"><a>Notes</a></button>
    </div>
    <div class="hero_stickers">
        <div class="sticker">
            <p><span><img src="./media/checklist.png" width="20px" height="20px"></span>Complete Notes</p>
        </div>
        <div class="sticker">
            <p><span><img src="./media/targeted.png" width="20px" height="20px"></span>Carrer-Oriented</p>
        </div>
        <div class="sticker">
            <p><span><img src="./media/creativity.png" width="20px" height="20px"></span>Creative Thinking</p>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>