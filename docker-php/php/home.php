<?php

session_start();

if (!isset($_SESSION["username"])) {
    // nombre del user que ha hecho login
    header("location:index.php");
}

?>

<!DOCTYPE html>  
<html>  
  <head>  
    <title>Introduction to PHP</title>  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" id="bootstrap-php" />
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  </head>  
  <body>
    <div class= "container align-middle">
      <span>WELCOME to my APP</span>
      <a href="logout.php">Logout</a>
    </div>
  </body>  
</html>