<?php
class Voiture extends Vehicule {
    private $nbPortes;
    private $transmission;

    public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible, $nbPortes, $transmission) {
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible);
        $this->nbPortes = $nbPortes ;
        $this->transmission = $transmission;
    }

	public function afficherDetails(){
		return $this->immatriculation .''. $this->marque.''. $this->modele.''. $this->prixJour.''. $this->disponible .''.$this->cylindree;
    }
	
	public function getType(): string{
	return 'Voiture';
    }
    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
        $voiture = new Voiture($this->id,$this->marque, $this->modele, $this->immatriculation, $this->prixJour, $this->disponible, $this->nbPortes, $this->transmission);
    	$resrvation = new Reservation($voiture, $client ,$dateDebut, $nbJours, $this->statut);
        if($resrvation->getStatut() == 'confirmer'){
            return $resrvation;
        }
        return null;
    }
}