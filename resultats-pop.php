<?php
session_start();
include('header.html');
?>

	<script>alert("<?php echo htmlspecialchars('Vous avez bien entendu perdu. Essayez de nouveau !', ENT_QUOTES); ?>")</script>




			<div class="">
	<div class="container-fluid">
		<div class="row">
			<div class="validé col-lg-offset-1 col-lg-10 ">
				<h1 >Vous avez malheureusement perdu! </h1>
				<p>Retentez votre chance en vous réinscrivant au prochain tirage au sort ! 
				Les inscription seront ouvertes le 1/10/2017 à 00h00 ! </p>
				<p><a href="inscription.php">CLIQUEZ ICI</a> pour vous réinscrire</p>
			</div>
			
		</div>	

	</div>
</div>

<div class="container">
	<div class="row">
	<div class="block2-valider">
		<div class="logo-valider col-lg-3  col-md-3  col-sm-3 col-xs-6">
			<img src="contenu/images/1.jpeg">
		</div>
		<div class="logo-valider col-lg-3  col-md-3  col-sm-3  col-xs-6">
			<img src="contenu/images/2.jpg">
		</div>
		<div class="logo-valider col-lg-3  col-md-3 col-sm-3  col-xs-6">
			<img src="contenu/images/3.jpg">
		</div>
		<div class="logo-valider col-lg-3 col-md-3 col-sm-3 col-xs-6">
			<img src="contenu/images/4.jpg">
		</div>
	</div>
	</div>
</div>



<?php
session_start();
include('footer.html');
?>