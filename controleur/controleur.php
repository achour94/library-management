<?php
include("model/model.php");

class controleur {
    public $model;

    public function __construct()
    {
        $this->model = new model();
    }
    public function invoke()
    {
         //montrer toutes les pertsonne qui est dans la table
            $livres = $this->model->getLivreListe();
            include 'vue/liste.php';


    }
}
?>
