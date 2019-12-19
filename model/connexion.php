<?php
try
{
    $bdd= new PDO('mysql:host=localhost;dbname=tassa','root',"");
}
catch(Exception $e)
{
    die('Erreur:'.$e->getMessage());
}





?>
