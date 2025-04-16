<?php 

class Camion extends Vehicule {
	private $capaciteTonnage;
	public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible, $capaciteTonnage) {
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible);
        $this->capaciteTonnage = $capaciteTonnage ;
    }
	public function afficherDetails(){
		return $this->immatriculation .''. $this->marque.''. $this->modele.''. $this->prixJour.''. $this->disponible .''.$this->cylindree;
	}
	
	public function getType(): string{
        return 'Camion';
	}
    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
        $voiture = new Camion($this->id,$this->marque, $this->modele, $this->immatriculation, $this->prixJour, $this->disponible, $this->capaciteTonnage);
    	$resrvation = new Reservation($voiture, $client ,$dateDebut, $nbJours, 'confirmer');
    	if($resrvation->getStatut() == 'confirmer'){
            return $resrvation;
        }
        return null;
    }
}
