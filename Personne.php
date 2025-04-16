<?php
abstract class Personne{
    protected $id;
    protected $prenom;
    protected $email;
    
    public function __construct($id, $prenom, $email){
        $this->id = $id ;
        $this->prenom = $prenom;
        $this->email = $email;
    }
    public function afficherProfil() : Personne{
        return 'prenom'. $this->prenom .'email'. $this->email;
    }
 
}