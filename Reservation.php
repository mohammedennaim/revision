<?php 

Class Reservation{
    private Vehicule $vehicule; 
    private Client $client;
    private $dateDebut;
    private $nbJours;
    private $statut;
    
    public function __construct(Vehicule $vehicule, Client $client, $dateDebut, $nbJours, $statut = "NonConfirmer") {
    
        $this->vehicule = $vehicule;
        $this->client = $client;
        $this->dateDebut = $dateDebut;
        $this->nbJours = $nbJours;
        $this->statut = $statut;
    }
    
    public function calculerMontant(){
        return $this->vehicule->calculerPrix($this->nbJours);
    }
	public function confirmer(){
        $this->statut = "confirmer";
    } 
	public function annuler(){
        $this->statut = "annuler";
    }
    public function getStatut(){
        return $this->statut;
    }
    public function getVehicule(){
        return $this->vehicule;
    }
}
