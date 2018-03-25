<!DOCTYPE html>
<html>
<head>
	<title>Adminisration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#"><img src="images/icon.png"> AphasiX</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	    </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link menu"  href="#box1">Ajouter un objet <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link menu"  href="#box2">Liste des objets</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link "  href="index.php">Retour à l'application</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<?php
	require "controleur/data.php";
	session_start();
	if (!isset($_SESSION['data'])) 
	        {
	            $_SESSION['data'] = new data();
	        }

	if(isset($_POST["nom_objet"]) && isset($_POST["id_categorie"]) && isset($_FILES['image']['name'])){
		$url = "images/{$_FILES['image']['name']}";
		$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$url);
		$_SESSION["data"]->addObjet($_POST["nom_objet"],$_POST["id_categorie"],$url);
		unset($_POST["nom_objet"]);
		unset($_POST["id_categorie"]);
		unset($url);
	}
	if(isset($_POST["idObjetSup"])){
		$_SESSION['data']->delObjet($_POST["idObjetSup"]);
		unset($_POST["idObjetSup"]);
	}
	?>

	<div class="boxes" id="box1">
		<div class="bloc">
			<div class="interieur">
				<form method="post" action="" <form method="post" action="page.php" enctype="multipart/form-data">
			   		<label>Saisissez le nom de l'objet</label> : <input type="text" name="nom_objet" />

			</div>
		</div>
		<div class="bloc">
			<div class="interieur">
					<label for="Jour">Choisissez une catégorie pour l'objet :</label>
			            <select id="categorie_objet" name="id_categorie" />
							<?php
								$_SESSION['data']->afficherOptionCategories();
							?>
			            </select>

			</div>
		</div>
		<div class="bloc">
			<div class="interieur">
				<label>Choisissez une image pour l'objet</label> 
				<input type="file" name="image" />
				<br/>
				<br/>
								<button type="submit">Enregistrer</button>		
			</div>
		</div>

		</form>
	</div>
	<div class="boxes" id="box2">
		<table>
			<tr>
				<td>
					Id Objet
				</td>
								<td>
					Nom Objet
				</td>
								<td>
					Catégorie Objet
				</td>
								<td>
					Url Image Objet
				</td>
				<td>Actions</td>
			</tr>
		<?php
			$_SESSION['data']->afficherObjets();
		?>
	</table>
	</div>

</body>
</html>