<?php
session_start();
include('header.html');
?>

<div class="bg1">
	<div class="container-fluid">
		<div class="row">



			<div class="formulaire col-lg-offset-1 col-lg-4  col-md-6 col-sm-5 col-xs-12">
				<form action="valider.php" method="post">

				<p class="text-formu">Votre nom <br/>
				    <input type="text" name="nom"  size="40" class="requis"/></p>
				<p class="text-formu">Votre email<br />
				    <input type="email" name="email" size="40" class="requis"/></p>
				<p class="text-formu">Sujet<br />
				    <input type="text" name="sujet" size="40" class="requis" /></p>
				
				<p class="text-formu">Votre Téléphone<br/><input type="tel" name="phone" size="40" class="requis" /></p>

				<p class="btn-envoyer"><input type="submit" value="Envoyer" class="envoyer"/></p>
			

				</form>

			</div>

			<div class="box-formulaire  col-lg-offset-2 col-lg-5  col-md-6  col-sm-3  col-xs-12">
			<h1>Incrivez-vous vite pour participer à notre grand tirage au sort ! </h1>
			<p>Il vous suffit de rentrer votre Nom, Prenom et votre numero de téléphone pour valider votre iscription ! </p>
			
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<section class="col-lg-offset-4 col-lg-6 col-md-offset-4 col-md-6 col-sm-offset-2 col-sm-5 col-xs-offset-1 col-xs-6">
			
		</section>
	</div>
</div>

<?php
session_start();
include('footer.html');
?>
