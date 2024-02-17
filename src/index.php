<?php 

  $showAlert = false;
  $showError = false;
  $exists = false;

  if($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'dbConnect.php';

    $username = $_POST["signupEmail"];
    $password = $_POST["signupPassword"];
    $cpassword = $_POST["signupRePassword"];

    $sql = "Select * FROM users WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if($num == 0) { 
      if(($password == $cpassword) && $exists==false) { 
  
          $hash = password_hash($password,  
                              PASSWORD_DEFAULT); 
              
          // Password Hashing is used here.  
          $sql = "INSERT INTO `users` ( `username`,  
              `password`, `date`) VALUES ('$username',  
              '$hash', current_timestamp())"; 
  
          $result = mysqli_query($conn, $sql); 
  
          if ($result) { 
              $showAlert = true;  
          } 
      }  
      else {  
          $showError = "Passwords do not match";  
      }       
  }// end if  
  
 if($num>0)  
 { 
    $exists="Username not available";  
 }  
  
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Coder's Den</title>
</head>
<body>

<?php 
    
    if($showAlert) { 
    
        echo ' <div class="alert alert-success  
            alert-dismissible fade show" role="alert"> 
    
            <strong>Success!</strong> Your account is  
            now created and you can login.  
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close">  
                <span aria-hidden="true">×</span>  
            </button>  
        </div> ';  
    } 
    
    if($showError) { 
    
        echo ' <div class="alert alert-danger  
            alert-dismissible fade show" role="alert">  
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close"> 
            <span aria-hidden="true">×</span>  
       </button>  
     </div> ';  
   } 
        
    if($exists) { 
        echo ' <div class="alert alert-danger  
            alert-dismissible fade show" role="alert"> 
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close">  
            <span aria-hidden="true">×</span>  
        </button> 
       </div> ';  
     } 
   
?> 
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
      <ul class="navbar-nav me-auto" id="navbarSupportedContent">
        <li class="nav-item">
            <!-- Sign-in Modal -->
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">
            Sign up
            </button>

            <!-- Modal -->
            <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Coder's Den</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                     <div class="modal-body">
                          <p>Sign up</p>
                          <form action="./index.php" method="post" id="signup_form">
                            <label for="signupName">Name:</label>
                            <input type="text" id="signupName" name="signupName" required autocomplete="name">
                            <label for="signupEmail">Email:</label>
                            <input type="email" id="signupEmail" name="signupEmail" required autocomplete="email">
                            <label for="signupPassword">Password:</label>
                            <input type="password" id="signupPassword" name="signupPassword" required autocomplete="new-password">
                            <label for="signupRePassword">Re-enter Password:</label>
                            <input type="password" id="signupRePassword" name="signupRePassword" required autocomplete="new-password">
                            <input type="submit" id="signupSubmitBtn" value="Signup with Email">
                            <input type="reset" id="signupResetBtn" value="Clear">
                          </form>
                     </div>
                </div>
              </div>
          </div>
        </li>

        <li class="nav-item">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

      </li>
      </ul>
      
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>