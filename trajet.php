<<?php 

classe trajet{

	private $id;
	private $depart;
	private $arrivee;
	private $date;
	private $nbplaces;
	private $prix;
	private $conducteurLogin;

	public function get($nom_attribut){

		if (property_exists($this, $nom_attribut)){
			return $this -> $nom_attribut;
		}
		return false;
		
	}

	public function set ($nom_attribut, $valeur){
		if (property_exists($this, $nom_attribut)){
			return $this -> $nom_attribut = $valeur;
		}
		return false;
		
	}

	public function_construct ($data = array()){

		if (! empty($data)){

			
			foreach ($data as $key => $value) {
				$this -> set ($key, $value) // on peut rajouter une condition sur la key (s'il elle existe)
			}

			// equivalent 
			//$this -> id = $data ["id"];
		}

			
	}

}


 ?>