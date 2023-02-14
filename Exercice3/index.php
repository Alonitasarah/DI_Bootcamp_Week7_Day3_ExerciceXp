<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <h3> Hello </h3>

    <?php
       // Démarrer une session PHP
       session_start();
       $_SESSION["firstName"] = "ZOZO";
       $_SESSION["lastName"] = "SARAH";

       $_SESSION["firstName"] ." ". $_SESSION["lastName"]
    ?>
</body>
</html>
