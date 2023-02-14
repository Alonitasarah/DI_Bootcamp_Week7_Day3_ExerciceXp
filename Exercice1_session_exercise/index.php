<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Valider">
    </form>

    <a href="<?php htmlspecialchars($_SERVER["PHP_SELF"]."?logout=true"); ?>">Deconnecter</a>

    <h3>Welcome <?php $name ?> </h3>

    <?php
      
      session_start();
      $_SESSION["username"] = "ZOZO";
  
      $name =  !empty($_POST["name"]) ? $_POST["name"] : $_SESSION["username"];
  
      // If logout = Si déconnexion
      if (isset($_GET["logout"])) {
          unset($_SESSION['username']);
          session_destroy();
      }
  ?>
</body>
</html>