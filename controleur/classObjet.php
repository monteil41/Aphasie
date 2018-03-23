<?php 
class Objet
{
	private $_idObjet;
	private $_nomObjet;
	private $_idCategorie;
	private $_urlImage;

	public function __construct($idObjet, $nomObjet, $idCategorie, $urlImage) {
		$this->_idObjet = $idObjet;
		$this->_nomObjet = $nomObjet;
		$this->_idCategorie = $idCategorie;
		$this->_urlImage = $urlImage;
	}

	public function get_idObjet() {
		return $this->_idObjet;
	}
	public function get_nomObjet() {
		return $this->_nomObjet;
	}
	public function get_idCategorie() {
		return $this->_idCategorie;
	}
	public function get_urlImage() {
		return $this->_urlImage;
	}

	public function set_idObjet($idObjet) {
		$this->_idObjet = $idObjet;
		return $this;
	}
	public function set_nomObjet($nomObjet) {
		$this->_nomObjet = $nomObjet;
		return $this;
	}
	public function set_idCategorie($idCategorie) {
		$this->_idCategorie = $idCategorie;
		return $this;
	}
	public function set_urlImage($urlImage) {
		$this->_urlImage = $urlImage;
		return $this;
	}


	public function affiche() {
    	echo " idObjet = " , $this->_idObjet , " , nomObjet = " , $this->_nomObjet , " , idCategorie = " , $this->_idCategorie , " , urlImage = " , $this->_urlImage , " .";
    }

    public function afficheHtml() {
    	echo '<div class="col-6 col-sm-3 col-md-3 contenu-carte">';
        echo '<img src="',$this->_urlImage,'">';
        echo '<h1>',$this->_nomObjet,'</h1>';
        echo '</div>';
    }	
}