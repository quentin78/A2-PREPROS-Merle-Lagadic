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


<div class="container-fluid">
	<div class="block2-jouer">
		<h1>Des cadeaux innimaginables sont a gagner !</h1>
		<div class="row">
				<div class="text-pub col-lg-3"> 	
					<table>
						<tr>
							<th>Cadeaux</th>
						</tr>
						<tr>
							<td>1 x <b>Airbus A380<b></td>
						</tr>
						<tr>
							<td>10 x <b>Porsche Cayenne<b> </td>
						</tr>
						<tr>
							<td>100 x <b>Monster Energy Drink<b></td>
						</tr>
					</table>
				</div>
				<div class="bg-pub col-lg-9"> 
		<div class="row">
		<div class="col-lg-offset-3 col-lg-5">
			<a class="lien-btn2" href="inscription.php"><i class="fa fa-dribbble"></i> Inscrivez-Vous !</a>
		</div>
	</div></div>


				
		</div>

	</div>
</div>

<?php
session_start();
include('footer.html');
?>


