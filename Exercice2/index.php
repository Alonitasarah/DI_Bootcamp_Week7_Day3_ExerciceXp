<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
  <?php
    // mes données d'utilisateur
    $data = [
        "username" => "ZOZO",
        "cookiesTime" => time() + (86400 * 30),
    ];

    // encoder les données en json et base64
    $dataEncoding = base64_encode(json_encode($data));

    // Détail de la connexion au magasin
    setcookie("userInfos", $dataEncoding, time() + (86400 * 30), "/"); // 86400 = 1 day

    $submit = false;
    // état de connexion
    $logIn = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submit = true;

        // décoder les données base64 et json
        $dataDecrypt = json_decode(base64_decode($_COOKIE["userInfos"]), true);

        if (($dataDecrypt["username"] == $_POST["username"])) {
            $logIn = true;
        }
    }
  ?>

    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Nom Utilisateur</label>
        <input type="text" name="username" id="username">
        <input type="submit" value="Valider">
    </form>

    <!-- message de connection -->
    <?php if($submit): ?>
        <h3>Login <?= $logIn ? "succès" : "erreur" ?> </h3>
    <?php endif; ?>

</body>
</html>