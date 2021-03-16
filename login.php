<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="icon" type="image/png" href="images/Icon.png">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <title>School Idol</title>
</head>

<body>
    <?php
    include "menu.php";
?>
    <?php
    menu()
?>
    <h1>Co</h1>
<form action="" method="post">

    <p>
        <label for="name">Nom d'utilisateur</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </p>
    <button class="unmask" type="button" id="eye">Unmask</button>
            

            <script language="Javascript">
                //utilisation de javascript afin de rendre le bouton interactif
                    document.getElementById("eye").addEventListener("click", function (e) {
                    var pwd = document.getElementById("password");
                    if (pwd.getAttribute("type") == "password") {
                        pwd.setAttribute("type", "text");
                    } else {
                        pwd.setAttribute("type", "password");
                    }
                });
                </script>
    <p>
        <input type="submit" value="Envoyer" name="login">
    </p>
   
                

</form>
<?php

include "functions.php";


if (isset($_POST["login"])) {

$stmt = $DB->prepare('SELECT * FROM users WHERE nom = ?');
$stmt->execute(array($_POST['name']));
$stmt = $stmt->fetch();

if (!$stmt)
    echo "Wrong username or password";
else {

    if (password_verify($_POST['password'], $stmt['MDP'])) {

        $_SESSION['userID'] = $stmt['id'];
        $_SESSION['id'    ] = $_POST['name'];

        echo "TU ES COOOOOOOO";

        header('Location: index.php');
    } else echo "Wrong username or password";
}
}

?>
</body>

</html>


