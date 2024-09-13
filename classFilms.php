<?php

class Film
{
    private $id;
    private $titre;
    private $realisateur;
    private $date;
    private $img;
    private $duree;

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    //Setters

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function __construct($id, $titre, $realisateur, $date, $img, $duree)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->date = $date;
        $this->img = $img;
        $this->duree = $duree;
    }

    public function AfficherFilms()
    {
        echo "Titre : $this->titre, Réalisateur : $this->realisateur, Date : $this->date, $this->img, Durée : $this->duree";
    }

 

}

class LesFilms {
    private $listFilms =[];

    public function returnLesFilms() {
        echo $this->listFilms;
    }
}


?>