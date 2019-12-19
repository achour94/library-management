<?php

// toute les interaction se font a travers l'index et qui rederige
// directement au controleur

 include_once("controleur/controleur.php");

$controller = new controleur();

$controller->invoke();

?>