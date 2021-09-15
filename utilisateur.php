<<?php 

classe utilisateur{

	private $login;
	private $nom;
	private $prenom;

	public function get($nom_attribut){

		if (property_exists($this, $nom_attribut)){
			return $this -> $nom_attribut;
		}
		else {
			return false;
		}
		
	}

	public function set ($nom_attribut, $valeur){
		if (property_exists($this, $nom_attribut)){
			return $this -> $nom_attribut = $valeur;
		}

		
		
	}

	public function_construct ($data = array()){

		if (! empty($data)){

			
			foreach ($data as $key => $value) {
				// on peut rajouter une condition sur la key (s'il elle existe)
				$this -> set ($key, $value); // $this -> $key = $value;
			}

			// equivalent 
			//$this -> id = $data ["id"];
		}

			
	}

		

 ?>}
