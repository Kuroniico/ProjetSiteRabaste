<?php

    
    require("Functions.php");

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/png" href="images/Icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <title>My Profile</title>
    </head>

    <body>

        <?php
            include "menu.php";
            menu();
        ?>

 
        </div>

    </body>

</html>
<?php

class User 
{
    private $Username;


    // -- Construct de l'objet User
    public function __construct($_Username)
    {
        $this->name = $_Username;
        
            
    }
 

    }
    return $this->$_Username
?>