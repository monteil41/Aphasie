<?php 
class Categorie
{
	private $_idCategorie;
	private $_nomCategorie;

	public function __construct($idCategorie, $nomCategorie) {
		$this->_idCategorie = $idCategorie;
		$this->_nomCategorie = $nomCategorie;
	}

	public function get_idCategorie() {
		return $this->_idCategorie;
	}
	public function get_nomCategorie() {
		return $this->_nomCategorie;
	}

	
	public function set_idCategorie($idCategorie) {
		$this->_idCategorie = $idCategorie;
		return $this;
	}
	public function set_nomCategorie($nomCategorie) {
		$this->_nomCategorie = $nomCategorie;
		return $this;
	}


	public function affiche() {
    	echo "idCategorie = " , $this->_idCategorie , " , nomCategorie = " , $this->_nomCategorie , " .<br/>";
    }
}