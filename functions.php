<?php

    try {

        $DB = new PDO("mysql:host=localhost;dbname=rabaste_projet", "root", "");
        $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Error ! — " . $e->getMessage());
    }
   function HomeMessage(){
       echo "You are logged in !";
   }
?>