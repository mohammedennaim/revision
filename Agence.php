<?php 


Class Agence{
    private $nom; 
    private $ville; 
    private $vehicules; 
    private $clients;
    
    public function ajouterVehicule(Vehicule $v){
        $this->vehicules[] = $v;
        return true;
    }
    
    
    public function rechercherVehiculeDisponible(string $type){
        if($this->vehicules->getType() == $type){
            return 'disponible';
        }
        return 'indisponible';
    }
    
    
    public function enregistrerClient(Client $c){
        $this->clients[] = $c;
        return true;
    }
    
    
    public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours): Reservation{
    	$resrvation = new Reservation($v, $client ,$dateDebut, $nbJours);
        if($v)
        $resrvation->confirmer();

        
    }
    
}