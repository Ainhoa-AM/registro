<?php

require_once "config.php";

session_start();

if (isset($_SESSION["username"])) {
    header("location:home.php");
}

if (isset($_POST["login"])) {
  
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION["username"] = $username;
        header("location:home.php");
    } else {
        echo '<script> alert("Error en el login") </script>';
    }
}
?>

<!DOCTYPE html>  
<html>  
      <head>  
           <title>Introduction to PHP</title>  
           <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css?v=<?php echo time(); ?>" 
           rel="stylesheet" id="bootstrap-php" />
           <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
      </head>  
      <body>
        <div class= "container align-middle">
            <form method="post">
                <h3 class="text-center">Login</h3>

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" id="username" name="username" class="form-control" />
                    <label class="form-label" for="username">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="rememberme" id="rememberme" />
                        <label class="form-check-label" for="rememberme"> Remember me </label>
                    </div>
                </div>

                <!-- Submit button -->
                <input  type="submit" class="btn btn-primary btn-block mb-4" value="login" name="login"/>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="#!">Register</a></p>
                </div>
            </form>
        </div>
    </body>  
</html>