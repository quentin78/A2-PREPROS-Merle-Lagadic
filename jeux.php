<?php
session_start();
include('header.html');
?>

<!-- SECTION COMMENT JOUER -->
<section class="section-container section-comment">
	<div class="section-content">
		<p class="commentjouer">Comment jouer ?</p>
		<ul class="instructions-container">
			<li class="instruction">
				<div class="puce">
					<div class="puce-inner">1</div>
				</div>
				<h4>Inscrivez-vous</h4>
				<p><b>Cliquez sur le bouton</b><br/>
				<span class=""><a href="inscription.php">S'inscrire</a></span> et remplir le formulaire</p>
			</li>
			<li class="instruction">
				<div class="puce"><div class="puce-inner">2</div></div>
				<h4>Tirage au sort</h4>
				<p>Envoyer-nous vous vos informations, un <b>tirage au sort</b> aura lieu dans peu de temps</p>
			</li>
			<li class="instruction">
				<div class="puce"><div class="puce-inner">3</div></div>
				<h4>Vérifiez vos gains </h4>
			
				<ul class="details">
					<li>> <b>1er Prix</b> &nbsp;Un Airbus A380 full tunné.
					</li>
					<li>> <b>2eme Prix</b> Une Porshe Cayenne sans moteur.
					</li>
					<li>> <b>3eme Prix</b>&nbsp;Une canette périmée de Monster Energy.<br></li>
				</ul>
			</li>
		</ul>
	</div>
</section>




<?php
session_start();
include('footer.html');
?>


