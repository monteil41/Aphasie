<!DOCTYPE html>

<?php
require "data.php";
session_start();
if (!isset($_SESSION['data'])) 
        {
            $_SESSION['data'] = new data();
        }
//print_r(  $_SESSION['data']);
?>

<html>
    <head>
        <title>UE3TC04 - Projet Tuteuré</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    </head>

	<body id="body" class="dark-mode">

		<ul id="menu-demo2">
			<li><a href="#">Lieux</a>
				<ul>
					<li><a href="#">Chambre</a></li>
					<li><a href="#">Cuisine</a></li>
					<li><a href="#">Garage</a></li>
					<li><a href="#">Salon</a></li>
				</ul>
			</li>
			<li><a href="#">Personnes</a>
				<ul>
					<li><a href="#">Maman</a></li>
					<li><a href="#">Papa</a></li>
					<li><a href="#">Jean-Charles</a></li>
					<li><a href="#">Séverine</a></li>
				</ul>
			</li>
			<li><a href="#">Objets</a>
				<ul>
					<li><a href="#">Voiture</a></li>
					<li><a href="#">Vélo</a></li>
					<li><a href="#">Table</a></li>
					<li><a href="#">Glace</a></li>
					<li><a href="#">Lampe</a></li>
					<li><a href="#">Couverts</a></li>
					<li><a href="#">Couverture</a></li>
					<li><a href="#">télévision</a></li>
				</ul>
			</li>
			<li><a href="#">Actions</a>
				<ul>
					<li><a href="#">Allumer</a></li>
					<li><a href="#">Mettre</a></li>
					<li><a href="#">Manger</a></li>
					<li><a href="#">Réparer</a></li>
				</ul>
			</li>
			
		</ul>

		<p>
			        <?php
        $_SESSION['data']->afficherObjets();
         $_SESSION['data']->affiche();
        //$_SESSION['data']->addObjet("toto","toto","toto");
        ?>
		</p>
		
		<div id="container_phrase">
			<h1>Veuillez sélectionner des mots afin de former une phrase</h1>
			<p id="phrase"></p>
		</div>
	</body>
	
	<script>
	
		$('#menu-demo2 li ul li').click ( function(){
			$(this).children().addClass('selected');
			$( "#phrase" ).append( $(this).text() + " " );
		})

	</script>
</html>