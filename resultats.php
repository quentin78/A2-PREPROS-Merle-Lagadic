<?php
session_start();
include('header.html');
?>


<div class="container-fluid">
	<div class="row">
		<div class="block2-result">
			<div class="horloge col-lg-offset-8 col-lg-4">
				

						<div class="clock">
						<div class="numbers">
						<ul>
						  <li>12</li>
						  <li>3</li>
						  <li>6</li>
						  <li>9</li>
						</ul>
						</div>
						<div class="clockwise">
						<div class="center"></div>
						<div class="hand-second" id="analogsecond"></div>
						<div class="hand-minute" id="analogminute"></div>
						<div class="hand-hour" id="analoghour"></div>
						</div>
						</div>





			</div>
		</div>
	</div>
</div>



<div class="container-fluid" style="margin-bottom:50px">
	
	<div class="row">
		<div class="result1 col-lg-offset-1 col-lg-4 col-md-offset-2 col-md-8 col-md-offset-2 col-xs-offset-2 col-xs-8 col-xs-offset-2">
			<p>Entrez vite votre Nom pour vous rendre compte à quel point ce jeu est bidon et que vous n'avez aucune chance de gagner !</p>
			<form type="post" action="resultats-pop.php" class="form-verif">
			  <input type="text" placeholder="Entrez votre Nom" name="nom">
			  <button  name="btn-verif" class="btn-verif" type="submit">Vérifier</button>
			</form>

	

		</div>
		<div class="result2 col-lg-offset-1 col-lg-5 col-lg-offset-1 col-md-offset-2 col-md-8 col-md-offset-2  col-xs-12">

		        <h1 class="titre-result">Liste des derniers gagnants</h1>
				<p>MAJ le 22/09/16 à 23:38</p>
			<table>
			
				<tr>
					<th>Nom</th>
					<th>Penom</th>
					<th>Gains</th>
					<th>Date</th>
				</tr>
				<tr>
					<td>Jean-Yves</td>
					<td>Le drian</td>
					<td>Airbus A380</td>
					<td>Le 12/09/16 - 17:56</td>
				</tr>
				<tr>
					<td>Jean-Luc</td>
					<td>Mélanchon</td>
					<td>Un double des clés</td>
					<td>Le 12/09/16 - 17:54</td>
				</tr>
				<tr>
					<td>Jean-Louis</td>
					<td>Borloo</td>
					<td>Porshe Cayenne</td>
					<td>Le 11/09/16 - 21:26</td>
				</tr>
				<tr>
					<td>Jean-Cristophe</td>
					<td>Lagrde</td>
					<td>Canette Monster Energy</td>
					<td>Le 07/09/16 - 11:01</td>
				</tr>
				<tr>
					<td>Nicolas</td>
					<td>Sarkozy</td>
					<td>Canette d'Energy Drink Discount</td>
					<td>Le 04/09/16 - 23:53</td>
				</tr>
				<tr>
					<td>Marion-Maréchal</td>
					<td>LaTruie</td>
					<td>Canette Monster Energy (périmée)</td>
					<td>Le 25/09/16 - 19:49</td>
				</tr>
			</table>

		</div>
	</div>
</div>




<?php
session_start();
include('footer.html');
?>