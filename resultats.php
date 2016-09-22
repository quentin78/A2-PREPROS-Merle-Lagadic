<?php
session_start();
include('header.html');
?>

<div class="container-fluid">
	<div class="bloc row col-lg-6">





	</div>
</div>




<div class="container-fluid" style="margin-bottom:50px">
	
	<div class="row">
		<div class="result1 col-lg-offset-1 col-lg-4 col-md-offset-2 col-md-8 col-md-offset-2 col-xs-offset-2 col-xs-8 col-xs-offset-2">
			<p>Entrez vite votre Nom pour vous rendre compte à quel point ce jeu est bidon et que vous n'avez aucune chance de gagner !</p>
			<form class="form-verif">
			  <input type="text" placeholder="Entrez votre Nom">
			  <button  class="btn-verif" type="submit">Vérifier</button>
			</form>

	

		</div>
		<div class="result2 col-lg-offset-1 col-lg-5 col-lg-offset-1 col-md-offset-2 col-md-8 col-md-offset-2 col-xs-offset-2 col-xs-8 col-xs-offset-2">

		        <h1 class="titre-result">Liste des derniers gagants</h1>
				<p>MAJ le 22/09/16 à 23:38</p>
			<table>
			
				<tr>
					<th>Nom</th>
					<th>Penom</th>
					<th>Gains</th>
				</tr>
				<tr>
					<td>Jean-Yves</td>
					<td>Le drian</td>
					<td>Airbus A380</td>
				</tr>
				<tr>
					<td>Jean-Luc</td>
					<td>Mélanchon</td>
					<td>Un double des clés</td>
				</tr>
				<tr>
					<td>Jean-Louis</td>
					<td>Borloo</td>
					<td>Porshe Cayenne</td>
				</tr>
				<tr>
					<td>Jean-Cristophe</td>
					<td>Lagrde</td>
					<td>Canette Monster Energy</td>
				</tr>
				<tr>
					<td>Nicolas</td>
					<td>Sarkozy</td>
					<td>Canette d'Energy Drink Discount</td>
				</tr>
				<tr>
					<td>Marion-Maréchal</td>
					<td>LaTruie</td>
					<td>Canette Monster Energy (périmée)</td>
				</tr>
			</table>

		</div>
	</div>
</div>



<?php
session_start();
include('footer.html');
?>