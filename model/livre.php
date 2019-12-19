<?php
class livres {
    public $id;
    public $titre;
    public $auteur;
    public $editeur;
    public $lien;
    public $annee;



    public function __construct($id, $titre, $auteur, $editeur,$lien, $annee)

    {
        $this->id = $id;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->editeur = $editeur;
        $this->lien = $lien;
        $this->annee = $annee;

    }
}
?>
