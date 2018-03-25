<?php
require "controleur/data.php";
session_start();
if (!isset($_SESSION['data'])) 
        {
            $_SESSION['data'] = new data();
        }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> AphasieANDcom</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">    
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <script>
          $(function(){ //On cache tout sauf "box1" qyu est le contenu par défaut
            var divs = $(".boxes");
            divs.not("#box1").hide();
            $(".menu").click(function(){ //On rend visible l'élément sur lequel on clic et on cache le reste
              divs.filter(":visible").hide();
              $($(this).attr("href")).show();
              return false;
            });
          });
		</script>


</head>
<body>
<!--*****************************************HEADER******************************************-->
<!--<div class="menu-demo2">
                         <ol>
                            <li><div id="btn"><a id="lieux" href="#box1">Lieux</a></div></li>
                            <li><div id="btn"><a id="personnes" href="#box2">Personnes</a></div></li>
                            <li><div id="btn"><a id="objets" href="#box3">Objets</a></div></li>
                            <li><div id="btn"><a id="actions" href="#box4">Actions</a></div></li>
                        </ol>-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="images/icon.png"> AphasiX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link menu" id="lieux" href="#box1">Lieux <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" id="personnes" href="#box2">Personnes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" id="objets" href="#box3">Objets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" id="actions" href="#box4">Actions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="admin" href="admin.php">Menu admin</a>
      </li>
    </ul>
  </div>
</nav>

</div>    

<div id="container_phrase">
      <h1>Veuillez sélectionner des mots afin de former une phrase</h1>
      <p id="phrase"></p>
      <button id="reinitialiser">Réinitialiser</button> <button id="lecture">Lire</button> 
</div>
<?php
//print_r($_SESSION['data']);
//$_SESSION['data']->afficherCategories();
?>
<!--*****************************************CONTAINIER******************************************-->
<div class="container-fluid">
  
      <div class="boxes" id="box1">
        <div class="lieux">
          <div class="row">
  	      	<?php
            $_SESSION['data']->afficherListeObjetsByCategorie("lieux");
	        ?>
          </div>
      </div>
    </div>
    <div class="boxes" id="box2">
        <div class="Personnes">
          <div class="row">
            <?php
            $_SESSION['data']->afficherListeObjetsByCategorie("personnes");
            ?>           
          </div>
      </div>
    </div>
    <div class="boxes" id="box3">
        <div class="Objets">
          <div class="row">
            <?php
            $_SESSION['data']->afficherListeObjetsByCategorie("objets");
            ?>
          </div>
      </div>
    </div>
    <div class="boxes" id="box4">
        <div class="Actions">
          <div class="row">
            <?php
            $_SESSION['data']->afficherListeObjetsByCategorie("actions");
            ?>
          </div>
      </div>
    </div>
</div>

</body>
<script>
  
    $('.boxes div div div').click ( function(){
      $(this).children().addClass('selected');
      $( "#phrase" ).append( $(this).text() + " " );
    })

</script>
<script>
	$(function(){       
            $("#lecture").click(function(){ //On rend visible l'élément sur lequel on clic et on cache le reste
            		ssu = new SpeechSynthesisUtterance()
				ssu.lang = "fr-FR"
				ssu.text = $("#phrase").text()
				speechSynthesis.speak(ssu)
            });
          });
	$(function(){       
            $("#reinitialiser").click(function(){ //On rend visible l'élément sur lequel on clic et on cache le reste
            	 $("#phrase").text("");
            });
          });

</script>
</html>