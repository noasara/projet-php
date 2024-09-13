<?php

class User{
    private $id;
    private $email;
    private $pseudo;
    private $niveau;
    private $listUser;

    public function __construct($id, $email, $pseudo, $niveau)
    {
        $this->id = $id;
        $this->email = $email;
        $this->pseudo = $pseudo;
        $this->niveau = $niveau;
    }

    public function getID(){
        return $this->id;
    }

    public function setID($id){
        $this->id = $id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }

    public function getNiveau(){
        return $this->niveau;
    }

    public function setNiveau($niveau){
        $this->niveau = $niveau;
    }

    public function listUser(){
        return $this->listUser;
    }

}


class LesUsers{
    private $listUsers = [];

    public function returnListUsers(){
        return $this->listUsers;
    }

}

?>