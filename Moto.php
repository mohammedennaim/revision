<?php 

class Moto extends Vehicule {
	private $cylindree;

    public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible, $cylindree) {
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible);
        $this->cylindree = $cylindree ;
    }
	
	public function afficherDetails(){
		return $this->immatriculation .''. $this->marque.''. $this->modele.''. $this->prixJour.''. $this->disponible .''.$this->cylindree;
	
    }
	
	public function getType(): string{
        return 'Moto';
	}
    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
        $voiture = new Moto($this->id,$this->marque, $this->modele, $this->immatriculation, $this->prixJour, $this->disponible, $this->cylindree);
    	$resrvation = new Reservation($voiture, $client ,$dateDebut, $nbJours, 'confirmer');
    	if($resrvation->getStatut() == 'confirmer'){
            return $resrvation;
        }
    }
}