<?php
require_once '../../Controller/clientController/readClient.php';
?>

<form action="" method="post" id="form_up_client">
	   			 		<div class="form-group">
	   			 			<input  style="text-transform: uppercase;" type="hidden" class="form-control" id="numCli" name="numCli" value="<?= $client->getIDCLIENT() ?>" >
	   			 		</div>
	   			 		<div class="form-group">
	   			 			<label class="control-label">Nom</label>
	   			 			<input style="text-transform: uppercase;" type="text" class="form-control" name="nomCli" value="<?= $client->getNOMCLIENT() ?>">
	   			 			<span id="nomCliwarn" style="color:red;"></span>
	   			 		</div>
                        <div class="form-group">
	   			 			<label class="control-label">Prenom</label>
	   			 			<input style="text-transform: uppercase;" type="text" class="form-control" name="prenomCli" value="<?= $client->getPRENOMCLIENT() ?>"  >
	   			 			<span id="prenomCliwarn" style="color:red;"></span>
	   			 		</div>    
	   			 		<div class="form-group">
	   			 			<label class="control-label">Lieu</label>
	   			 			<input  style="text-transform: uppercase;"type="text" class="form-control" value="<?= $client->getADRESSECLIENT() ?>" name="lieuCli" >
	   			 			<span id="LieuCliwarn" style="color:red;"></span>
	   			 		</div>
	   			 		<div class="form-group">
	   			 			                    <label class="control-label">Profession</label>
	   			 			<input type="text" class="form-control" value="<?= $client->getPROFFESSION() ?>" name="profession"  >
	   			 			<span id="profCliwarn" style="color:red;"></span>
	   			 		</div>
                        <div class="form-group">
	   			 			<label class="control-label">Telephone</label>
	   			 			<input type="text" class="form-control" value="<?= $client->getPHONECLIENT() ?>" name="telephone"  >
	   			 			<span id="phoneCliwarn" style="color:red;"></span>
	   			 		</div>    
	   			 		<div>
	   			 			<button type="submit" class="btn btn-primary">Ajouter</button>
	   			 		</div>
	   			 </form>
	   		
