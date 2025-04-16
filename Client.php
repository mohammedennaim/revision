<?php 

Class Client extends Personne{
    private $numeroClient;
    private $reservations;
    
    public function __construct($id, $prenom, $email, $nbClient, $reservations){
        parent::__construct($id, $prenom, $email);
        $this->numeroClient = $nbClient;
        $this->reservations = $reservations;
    }
    
    public function afficherProfil() : Personne{
        return 'prenom'. $this->prenom .'email'. $this->email .'numeroClient'. $this->numeroClient .'reservations'.$this->reservations;
    }
    public function ajouterReservation(Reservation $r){
    	$this->reservations[] = $r;
        return true;
    }
    
    
    public function getHistorique(){
        return $this->reservations;
    }

}