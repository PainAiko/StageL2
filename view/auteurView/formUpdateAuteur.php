<?php
require_once '../../Controller/auteurController/readAuteur.php';
?>

<form action="" method="post" id="form_up_auteur">
	   			 		<div class="form-group">
	   			 			<input  style="text-transform: uppercase;" type="text" readOnly="" class="form-control" id="numAut" name="numAut" value="<?= $auteur->getIDAUTEUR() ?>" >
	   			 		</div>
							<div class="form-group">
	   			 			<label class="control-label">Nom</label>
	   			 			<input type="text" class="form-control" value="<?= $auteur->getNOMAUTEUR() ?>" name="nomAuteur">
	   			 			<span id="nomCliwarn" style="color:red;"></span>
	   			 		</div> 
	   			 		<div>
	   			 			<button type="submit" class="btn btn-primary">Ajouter</button>
	   			 		</div>
	   			 </form>
	   		
