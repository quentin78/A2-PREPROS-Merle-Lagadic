<?php
session_start();
include('header.html');
?>

<div class="body">

<div class="container-fluid">
		<div class="row">
		<div class="banniere">
		<p>Jouer comporte des risques : Edettement, Isolement, Dependance.<br> Pour etre aidé, Appelez le 09 74 75 13 13 (Appel non surtaxé)</p>
		</div>
	</div>
</div>
<div class="bg1">
	<div class="container-fluid">
		<div class="row">
			<div class=" col-lg-5  col-md-6 col-sm-5 col-xs-12">

			<div class="form">
      
      <ul class="tab-group">
        <img src="contenu/images/HTFile.png" style="width:140px;margin-left:115px;">
        
      </ul>
      
      
          
          <form action="valider.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
             
              <input type="text" required autocomplete="off" placeholder="Nom" />
            </div>
        
            <div class="field-wrap">
              
              <input type="text"required autocomplete="off" placeholder="Prénom"/>
            </div>
          </div>

          <div class="field-wrap">
           
            <input type="email"required autocomplete="off" placeholder="Email" />
          </div>
          
         <div class="field-wrap">
           
            <input type="phone"required autocomplete="off" placeholder="Téléphone " /> 
          </div>
          
          <button type="submit" class="button button-block"/>Envoyer</button>
          
          </form>

        </div>
		</div>



			<div class="box-formulaire  col-lg-offset-2 col-lg-4 col-lg-offset-1  col-md-6  col-sm-3  col-xs-12">
			<h2>Incrivez-vous vite pour participer à notre grand tirage au sort ! </h2>
			<p>Il vous suffit de rentrer votre Nom, Prenom, Adresse et votre numero de téléphone pour valider votre iscription ! </p>
			
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
</div>
<?php
session_start();
include('footer.html');
?>
