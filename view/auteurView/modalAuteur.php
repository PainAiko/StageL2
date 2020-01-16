

<!---/modal a la fois insertion  et update -->
<div id="modal" class="modal fade">
     <div class="modal-dialog ">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 id="titre" class="modal-title"></h4>
                 <button type="button"  class="close" data-dismiss="modal" name="button">
                     <span aria-hidden="true">&times;</span>
                 </button>

             </div><!---/end modal-header-->

             <div class="modal-body" id="detail">

             </div><!---/end modal-header-->

             <div class="modal-footer">
                 <button type="button"  name="save" id="oui" class="btn btn-danger active">Oui</button>
                 <button type="button" name="button" id="non" class="btn btn-warning active" data-dismiss="modal">Non</button>
                 <button type="button" name="button" class="btn btn-warning active" id="annuler" data-dismiss="modal">Annuler</button>
             </div><!---/end modal-header-->
         </div><!---/end modal-content-->


     </div>
</div>
<!---/modal a la fois insertion  et update -->


    <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins 
  <script src="../../vendor/chart.js/Chart.min.js"></script>

  Page level custom scripts 
  <script src="..js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>-->
  
    <!-- Page level plugins -->
  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function ()
        {
        //affiche le formulaire modal pour saisir les informations à ajouter
     $(document).on('click','#ajouter',function(e){
            e.preventDefault();
            $('#modal').modal('show');
            $('#titre').html('Ajouter un auteur');
            $('#annuler,#Inserer').show();
            $('#oui,#non').hide();
            $.ajax(
                {
                    url:'saisiAuteur.php',
                    success:function (data) {
                        $('#detail').html(data).slideDown();
                    }
                });
    
            });
           //insert 
            $(document).on('submit','#form_ad_auteur',function (e) {
                e.preventDefault();
               var datas=$(this).serialize();
               var $numcli=$('#numCli').val();
               
               if($numcli != '')
            	   {
	            	   $.ajax({
	                       type: 'post',
	                        url:'../../Controller/auteurController/createAuteur.php',
	                        data:datas,
	                        success:function (data) {
	                            $('#tb_client').html(data).slideDown();
	                            //on rafraichit page pour avoir la modification
	                            setTimeout("document.location.reload()", 1);
	                        }
	                    });
            	   }
               else
            	   {
            	      $("#numSitewarn").html("completer le champs reference");
            	   }
            

            });
            //suppression d'une ligne dans la base de donner
            $(document).on('click','.delete_data',function (e) {

                e.preventDefault();
                $('#modal').modal('show');
                var numauteur= $(this).attr('id');
                $('#titre').html('Suppression d\'un client');
                $('#annuler').hide();
                $('#oui,#non').show();
                $('#detail').html('Vous etes sur  de supprimer le client numero '+numauteur);
               //on suprimme la ligne;
                $('#oui').click(function () {
                    $.ajax({
                        url:'../../Controller/auteurController/deleteAuteur.php',
                        type:'get',
                        data:{id:numauteur},
                        success:function (data) {
                            $('#tb_client').html(data).slideDown();
                            //on rafraichit page pour avoir la modification
                            setTimeout("document.location.reload()", 1);
                        }
                    });

                });

        });

            //formulaire modification
            $(document).on('click','.edit_data',function (e) {
                e.preventDefault();
                var id =$(this).attr('id');
                $('#modal').modal('show');
                   $('#titre').html('Modifier');
                   $('#annuler,#insertions').show();
                   $('#oui,#non').hide();

                   $.ajax({
                     type:'get',
                     url:'formUpdateAuteur.php',
                     data:{id:id},
                         success:function (data) {
                             $('#detail').html(data).slideDown();
                         }
                 }); 
                
            });
            
          //on effectue la modification
         $(document).on('submit','#form_up_auteur',function (e) {
                       e.preventDefault();
                       //var datas=$(this).serialize();
                           $.ajax({
                               url:'../../Controller/auteurController/updateAuteur.php',
                               type:'post',
                               data:$('#form_up_auteur').serialize(),
                               success:function (data) {
                                   $('#modal').modal('hide');
                                   $('#tb_client').html(data).slideDown();

                                   //on rafraichit page pour avoir la modification
                                   setTimeout("document.location.reload()",10000);
                               }
                          });
                      
                   });
    });
    </script>


