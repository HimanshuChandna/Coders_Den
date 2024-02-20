<?php

  session_start();
  include "dbConfig.php";

  if ( isset($_SESSION["user_id"]) ) {

    $mysqli = require __DIR__ . "/dbConfig.php";

    $sql = "SELECT * FROM users WHERE user_id = {$_SESSION['user_id']}";

    $result = $conn->query($sql);

    $user = $result->fetch_assoc();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="./js/validation.js" defer></script>
    <script src="./firebase/authentication/auth.js" defer type="module"></script>
    <link rel="stylesheet" href="./stylesheets/navbar.css">
    <title>Coder's Den</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Coder's Den</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex" role="search" id="searchbarControl">
    <div class="searchbar">    
      <input class="form-control" type="search" id="searchbar" name="searchbar" placeholder="Want to learn?" aria-label="Search">
      <button class="btn btn-outline-success" id="searchbtn" type="submit">Search</button>
    </div>
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu_bar">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contribute Notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav me-5" id="navbarSupportedContent">
        <li class="nav-item">
         <?php if( isset($user) ): ?>
            <!-- <button>User Profile</button> -->
             <!-- Sign-in Modal -->
             <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">
            Welcome, <?= htmlspecialchars($user["user_name"])?>
            </button>

            <!-- Modal Window-->
            <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Coder's Den - (<?= htmlspecialchars($user["user_name"]) ?>)</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- Modal Body -> (Singup Form) -->
                     <div class="modal-body">
                          <p id="signup_title">Sign up</p>
                          <form action="signup.php" method="post" id="signup_form">
                            <div>
                              <input type="text" id="signupName" name="signupName" placeholder="Fullname" required autocomplete="name">
                            </div>
                            <div>

                              <input type="email" id="signupEmail" name="signupEmail" placeholder="Email" required autocomplete="email">
                            </div>
                            <div>
                              <input type="password" id="signupPassword" name="signupPassword" placeholder="Password" required autocomplete="new-password">
                            </div>
                            <div>
                              <input type="password" id="signupRePassword" name="signupRePassword" placeholder="Re-enter Password" required autocomplete="new-password">
                            </div>
                            <div>
                              <input type="submit" class="btn btn-outline-secondary" id="signupSubmitBtn" name="submit" value="Signup with Email">
                              <input type="reset" class="btn btn-outline-secondary" id="signupResetBtn" value="Clear">
                            </div>
                          </form>
                     </div>
                </div>
              </div>
          </div>

          <?php else: ?>
            <!-- Sign-in Modal -->
            <button type="button" id="signup_btn" class="btn" data-bs-toggle="modal" data-bs-target="#signupModal">
            Sign up
            </button>

            <!-- Modal Window-->
            <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Coder's Den - (Sign up)</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- Modal Body -> (Singup Form) -->
                     <div class="modal-body">
                          <p id="signup_title">Sign up</p>
                          <form action="signup.php" method="post" id="signup_form">
                            <div>
                              <input type="text" id="signupName" name="signupName" placeholder="Fullname" required autocomplete="name">
                            </div>
                            <div>

                              <input type="email" id="signupEmail" name="signupEmail" placeholder="Email" required autocomplete="email">
                            </div>
                            <div>
                              <input type="password" id="signupPassword" name="signupPassword" placeholder="Password" required autocomplete="new-password">
                            </div>
                            <div>
                              <input type="password" id="signupRePassword" name="signupRePassword" placeholder="Re-enter Password" required autocomplete="new-password">
                            </div>
                            <div>
                              <input type="submit" class="btn btn-outline-secondary" id="signupSubmitBtn" name="submit" value="Signup with Email">
                              <input type="reset" class="btn btn-outline-secondary" id="signupResetBtn" value="Clear">
                            </div>
                          </form>
                     </div>
                </div>
              </div>
          </div>
        </li>

          <li class="nav-item">
        <button type="button" id="login_btn" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Coder's Den - (Login)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="login_title">Login</p>
          <form action="login.php" method="post" id="login_form">
            <div>
                <input type="email" id="loginEmail" name="loginEmail" placeholder="Email" required autocomplete="email">
            </div>
            <div>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Password" required autocomplete="new-password">
            </div>
            <div>
            <input type="submit" class="btn btn-outline-secondary" id="loginSubmitBtn" name="submit" value="Login with Email">
                <input type="reset" class="btn btn-outline-secondary" id="loginResetBtn" value="Clear">
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
      </li>
      </ul>
      
    </div>
  </div>

  <?php endif; ?>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>