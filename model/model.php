<?php
include_once("model/livre.php");


class Model{

       public function getLivreListe()

    {
        include("model/connexion.php");
       $reponse= $bdd->query('select * from livre');
        $liste=array();
        while( $donnees= $reponse->fetch())
        {
            $livre=new livres($donnees[0],$donnees[1],$donnees[2],$donnees[3], $donnees[4], $donnees[5]);
            $liste[]=$livre;
        }
        return($liste);
    }
    public function getLivre($id)
    {
        $allLivres=$this->getLivreListe();
        return $allLivres[$id];
    }
    public function AjoutLivre( $titre, $auteur, $editeur)
    {
        $livre=new livres( $titre, $auteur, $editeur);
        include("model/connexion.php");
        $req="insert into livre values(".$titre.",".$auteur.",".$editeur.")";
        $dbb->exec($req);
}






}



?>
