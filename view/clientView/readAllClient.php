<?php
use model\clientModel\Client;
require_once '../../Controller/clientController/readAllClient.php';

?>
<?php

require_once '../../assets/entete.php';
require_once '../../assets/navbar.php';

?>

<div>
    <?php if($clients===false): ?>
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
                            <th >Prenom</th>
                            <th >lieu</th>
                            <th >Proffession</th>
                            <th>telephone</th>
                            <th >Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                        
                        <tr>
                            <th >Code </th>
                            <th >Nom </th>
                            <th >Prenom</th>
                            <th >lieu</th>
                            <th >Proffession</th>
                            <th>telephone</th>
                            <th >Action</th>
                        </tr>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php  foreach($clients as $client): ?>
                            <tr>
                                <td><?= $client->getIDCLIENT() ?></td>
                                <td><?= $client->getNOMCLIENT() ?></td>
                                <td><?= $client->getPRENOMCLIENT() ?></td>
                                <td><?= $client->getADRESSECLIENT() ?></td>
                                <td><?= $client->getPROFFESSION() ?></td>
                                <td><?= $client->getPHONECLIENT() ?></td>
                                <td class="text-center">
                                    <a class="btn btn-danger delete_data" id="<?= $client->getIDCLIENT() ?>" href="" role="button" >
                                    <i class="fas fa-fw fa-trash-alt" data-toggle="tooltip" data-placement="rigth" title="Supprimer"></i>
	   				                    Supprimer
                                    </a>

                                    <a role="button"
                                       href=" "
                                       class="edit_data  btn btn-info " id="<?= $client->getIDCLIENT()?>">
                                       <i data-toggle="tooltip" data-placement="left" title="Modifier" class="fas fa-fw fa-user-edit"></i> 
                                        Editer
                                    </a>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>



                        </tbody>
                    </table>
                    <a href="#" role="button" id="ajouter" class="btn btn-success add_client"><i class="fas fa-fw fa-plus-circle"></i>Ajouter</a>
                    <?php require_once 'modalClient.php';?>
                </div>
            </div>

        </div>

    <?php endif; ?>


</div>

<?php require_once '../../assets/footer.php';?>




