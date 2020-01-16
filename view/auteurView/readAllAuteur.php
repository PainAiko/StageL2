<?php
use model\auteurModel\Auteur;
require_once '../../Controller/auteurController/readAllAuteur.php';

?>
<?php

require_once '../../assets/entete.php';
require_once '../../assets/navbar.php';

?>

<div>
    <?php if($auteurs===false): ?>
        <p>
            erreur
        </p>
    <?php else: ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <i class="fas fa-table"></i>
                Listes des clients</div>
            <div class="card-body">
                <div class="table-responsive" id="tb_client">

                    <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th  >Code </th>
                            <th >Nom </th>
                            <th >Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                        
                        <tr>
                            <th >Code </th>
                            <th >Nom </th>
                            <th >Action</th>
                        </tr>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php  foreach($auteurs as $client): ?>
                            <tr>
                                <td><?= $client->getIDAUTEUR() ?></td>
                                <td><?= $client->getNOMAUTEUR() ?></td>

                                <td class="text-center">
                                    <a class="btn btn-danger delete_data" id="<?= $client->getIDAUTEUR() ?>" href="" role="button" >
                                    <i class="fas fa-fw fa-trash-alt" data-toggle="tooltip" data-placement="rigth" title="Supprimer"></i>
	   				                    Supprimer
                                    </a>

                                    <a role="button"
                                       href=" "
                                       class="edit_data  btn btn-info " id="<?= $client->getIDAUTEUR() ?>">
                                       <i data-toggle="tooltip" data-placement="left" title="Modifier" class="fas fa-fw fa-user-edit"></i> 
                                        Editer
                                    </a>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>



                        </tbody>
                    </table>
                    <a href="#" role="button" id="ajouter" class="btn btn-success add_auteur"><i class="fas fa-fw fa-plus-circle"></i>Ajouter</a>
                    <?php require_once 'modalAuteur.php';?>
                </div>
            </div>

        </div>

    <?php endif; ?>


</div>

<?php require_once '../../assets/footer.php';?>




