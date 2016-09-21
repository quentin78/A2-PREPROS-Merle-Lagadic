<?php
session_start();
include('header.html');
?>

<div class="bg1">
<div class="container-fluid">
	<div class="row">
		<div class="formulaire col-lg-offset-4 col-lg-6 col-md-offset-4 col-md-6 col-sm-offset-2 col-sm-5 col-xs-offset-1 col-xs-6">
			<form action="resultats.php" method="post">

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
	</div>
</div>
</div>
<div class="container-fluid">
	<div class="row">
		<section class="col-lg-offset-4 col-lg-6 col-md-offset-4 col-md-6 col-sm-offset-2 col-sm-5 col-xs-offset-1 col-xs-6">
			<img src="contenu/images/compte.jpg">
		</section>
	</div>
</div>

<?php
session_start();
include('footer.html');
?>
