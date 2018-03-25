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
		echo "<tr><td>",$this->_idObjet,"</td>";
		echo "<td>",$this->_nomObjet,"</td>";
		echo "<td>",$this->_idCategorie,"</td>";
		echo "<td>",$this->_urlImage,"</td>";
		echo "<td><form method='POST'><input type='hidden' name='idObjetSup' value='",$this->_idObjet,"'/><button type='submit'>Suprimer</button></form></td></tr>";
    	//echo " idObjet = " , $this->_idObjet , " , nomObjet = " , $this->_nomObjet , " , idCategorie = " , $this->_idCategorie , " , urlImage = " , $this->_urlImage , " . <br/>";
    }

    public function afficheHtml() {
    	echo '<div class="col-6 col-sm-3 col-md-3 contenu-carte">';
        echo '<img src="',$this->_urlImage,'">';
        echo '<h1>',$this->_nomObjet,'</h1>';
        echo '</div>';
    }	
}