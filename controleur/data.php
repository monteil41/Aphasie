<?php
require('classObjet.php');
require('classCategorie.php');
/**
 * Description of data
 *
 * @author Alexandre
 */
class data {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "aphasie";
    private $connexion;
    private $listeObjets = array();
    private $listeCategories = array();

    public function __construct() {
        // Connexion à la base
        $this->connexion = new mysqli($this->servername, $this->username, $this->password, $this->db);
        if ($this->connexion->connect_error) {
            die("Connection failed: " . $connexion->connect_error);
        }

        // Récupération des Objets
        $Objets = $this->connexion->query("SELECT * FROM `objets`");
        while ($row = $Objets->fetch_assoc()) {
            //print_r($row); echo '<br>';            
            $this->listeObjets[] = new Objet($row['id_objet'], $row['nom_objet'], $row['id_categorie'], $row['url_image']);  
            //$idObjet, $nomObjet, $idCategorie, $urlImage         
        }

        $Categories = $this->connexion->query("SELECT * FROM `categories`");
        while ($row = $Categories->fetch_assoc()) {
            //print_r($row); echo '<br>';            
            $this->listeCategories[] = new Categorie($row['id_categorie'], $row['nom_categorie']);      
        }
    }

    public function afficherObjets() {    
    //print_r($this->listeObjets);    
        foreach ($this->listeObjets as $Objet) {
            $Objet->affiche();
        }
    }

    public function afficherListeObjets() {      
        foreach ($this->listeObjets as $Objet) {
            $Objet->afficheHtml();
        }
    }

    public function afficherListeObjetsByCategorie($nomCategorie) {      
        foreach ($this->listeObjets as $Objet) {
            foreach ($this->listeCategories as $Categorie) {            
                $ObjetIdCategorie = $Objet->get_idCategorie();
                if ($nomCategorie == $Categorie->get_nomCategorie()){
                    if($ObjetIdCategorie == $Categorie->get_idCategorie()){
                        $Objet->afficheHtml();
                    }
                }
            }            
        }
    }

        public function afficherCategories() {     
        foreach ($this->listeCategories as $Categorie) {
            $Categorie->affiche();
        }
    }

    public function afficherOptionCategories() {
        foreach ($this->listeCategories as $Categorie) {
            $Categorie->listeOptionCategorie();
        }
    }

    public function addObjet($nomObjet, $idCategorie, $urlImage) 
    {   
        // Ajout dans la base de données
        $this->connexion = new mysqli($this->servername, $this->username, $this->password, $this->db);
        if ($this->connexion->connect_error) {
            die("Connection failed: " . $connexion->connect_error);
        }
        $resultat = $this->connexion->query("INSERT objets (id_objet, nom_objet, id_categorie, url_image) VALUES (NULL, '" . data::test_input($nomObjet) . "', '" . data::test_input($idCategorie) . "', '" . $urlImage . "')");

        // On recupere la valeur ID
        if (!$resultat) {
            echo "La requete a échoué<br>";
        } else {
            echo 'La base a été actualisée<br>';
            $_SESSION['data'] = new data();
        }            
    }

    public static function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function delObjet($idObjet) {
        $this->connexion = new mysqli($this->servername, $this->username, $this->password, $this->db);
        if ($this->connexion->connect_error) {
            die("Connection failed: " . $connexion->connect_error);
        }
        $resultat = $this->connexion->query("DELETE FROM objets WHERE id_objet ='".$idObjet."'");

        if (!$resultat) {
            echo "La requete a échoué<br>";
        } else {
            echo 'La base a été actualisée<br>';
            $_SESSION['data'] = new data();
        }
    }

}

