<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="stylesheet" type="text/css" href="CSS/register.css">
        <title>School Idol</title>
    </head>
    <body>
    <?php
    include "menu.php";
?>


<?php
    menu()
?>


        <h1>Inscription</h1>
<form action="" method="post">

    <p>
        <label for="name">Nom d'utilisateur</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="password">Mot de passe</label>
        <input type="password" name="password">
    </p>
    <p>
        <label for="confirmpassword">Confirmer le mot de passe</label>
        <input type="password" name="confirmpassword">
    </p>
    <p>
        <input type="submit" value="Envoyer" name="register">
    </p>


</form>
<?php
    include "functions.php";

    if (isset($_POST["register"])) {

        if ($_POST['password'] == $_POST['confirmpassword']) {

            $stmt = $DB->prepare("INSERT INTO users(nom, MDP) VALUE( ? , ? )");
            $stmt->execute(array(
                $_POST['name'],
                password_hash($_POST['password'], PASSWORD_DEFAULT)
            ));
            echo "OK";


        } else echo "The two passwords do not match";
    }

    ?>

</body>
</html>