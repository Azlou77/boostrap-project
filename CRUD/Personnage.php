<?php
class Personnage{
    private $nom;
    private $type;
    public function __construct($nom, $magie)
    {
        $this->nom= $nom;
        $this->type= $magie;
    }

    public function getNom(){
        return $this->nom;
    } 
    public function getType(){
        return $this->type;
    } 
}
$personnage= new Personnage("Nastu","sorcier-feu");
$personnage= new Personnage("Gray","sorcier-glace");

?>
    