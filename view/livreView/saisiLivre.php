<?php
use model\auteurModel\Auteur;
require_once '../../Controller/auteurController/readAllAuteur.php';

?>
<form action="" method="post" id="form_ad_livre">
	   			 		<div class="form-group">
	   			 			<label class="control-label">code</label>
	   			 			<input  style="text-transform: uppercase;" type="text" class="form-control" id="idlivre" name="idLivre" value="">
	   			 			<span id="idwarn" style="color:red;"></span>
	   			 		</div>
	   			 		<div class="form-group">
	   			 			<label class="control-label">Titre</label>
	   			 			<input style="text-transform: uppercase;" type="text" class="form-control" name="titre" value=""  >
	   			 			<span id="titrewarn" style="color:red;"></span>
	   			 		</div>
	   			 		<div class="form-group">
	   			 			<label class="control-label">Auteur</label>
                            <select class="form-control" data-toggle="dropdown" name="idAuteur">
                                <?php  foreach($auteurs as $auteur): ?>
                                    <option value="<?= $auteur->getIDAUTEUR() ?>"><?= $auteur->getNOMAUTEUR() ?></option>
                                <?php endforeach; ?>
                            </select>
	   			 			<span id="LieuCliwarn" style="color:red;"></span>
	   			 		</div>

	   			 		<div>
	   			 			<button type="submit" class="btn btn-primary">Ajouter</button>
	   			 		</div>
	   			 </form>
	   		
