<?php 

abstract Class Vehicule implements ReservableInterface{
	protected $id;
	protected $immatriculation;
	protected $marque;
	protected $modele;
	protected $prixJour;
	protected $disponible;
	
	public function __constract($id, $immatriculation, $marque, $modele, $prixJour, $disponible){
		$this->id = $id ;
		$this->immatriculation =$immatriculation;
		$this->marque = $marque;
		$this->modele = $modele ;
		$this->prixJour = $prixJour;
		$this->disponible = $disponible;
	}
	
    public function afficherDetails(){
		return 'immatriculation: '.$this->immatriculation .'marque :'.$this->marque .'modele :'.$this->modele .'prixJour :'.$this->prixJour .'disponible :'.	$this->disponible;
	
	}
	public function calculerPrix(int $jours): float{
		return $this->prixJour * $jours;
	}
	
	public function estDisponible(): bool {
		return $this->disponible;
	}
	
	public function getType(): string{
		return 'Vehicule';
	}
}