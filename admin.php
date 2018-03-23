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
	  <a class="navbar-brand" href="#">AphasiX admin</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	    </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link menu" id="lieux" href="#box1">Ajouter un objet <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link menu" id="personnes" href="#box2">Supprimer un objet</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link menu" id="objets" href="#box3">Voir tous les objets</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="actions" href="index.php">Retour à l'application</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="boxes" id="box1">
		<div class="bloc">
			<div class="interieur">
				<form method="post" action="traitement.php">
			   		<label>Saisissez le nom de l'objet</label> : <input type="text" name="nom_objet" />
				</form>
			</div>
		</div>
		<div class="bloc">
			<div class="interieur">
				<form>
					<label for="Jour">Choisissez une catégorie pour l'objet :</label>
			            <select name="categorie_objet" id="categorie_objet" />
			                <option value="1">dynamique</option>
			                <option value="2">dynamique</option>
			                <option value="3">dynamique</option>
			            </select>
			    </form>
			</div>
		</div>
		<div class="bloc">
			<div class="interieur">
				<label>Choisissez une image pour l'objet</label> <button> Choisir une image</button>
			</div>
		</div>
	</div>
	<div class="boxes" id="box2">
	</div>
	<div class="boxes" id="box3">
	</div>

</body>
</html>