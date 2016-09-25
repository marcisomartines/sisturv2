<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/09/2016
 * Time: 22:25
 */
?>
<!DOCTYPE html>
<html>
<!-- HEAD -->
<?php
include_once "menu/l_head.php";
$destino  = "active";
$destinos =  $this->viagem->destinos();

?>
<!-- END HEAD -->
<!-- LEFT MENU -->
<?php include_once "menu/l_menue.php"; ?>

<!-- END LEFT MENU -->
<!-- INICIO CONTEUDO -->
<div class="content-wrapper" id="conteudo">
    <!-- CONTEUDO -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Destinos
            <small>Listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-map-marker"></i> Destinos</a></li>
            <li class="active">Lista</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-5">
                <?php
                    echo form_button([
                        "class"=>"btn bg-purple",
                        "content"=>"<i class='fa fa-plus'></i> Cadastrar Destino",
                        "data-toggle"=>"modal",
                        "data-target" =>'#cadastrarDestino']);
                ?> 
            <table class="table table-striped">
            <?php
            foreach($destinos as $des){
                ?>
                <tr>
                    <td><?=$des['destino']?></td>
                    <td><?php
                        echo form_button(array(
                            'class'=>'btn btn-primary',
                            'content'=>"<i class='fa fa-pencil-square-o'></i> Editar"
                        ));
                        ?></td>
                </tr>
                <?php
            }
            ?>
            </table>
                </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cadastrarDestino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Destino</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
            <?php
                echo form_label('Nome: ');
                echo form_input([
                    "name"  =>"destino",
                    "id"    =>"destino",
                    "class" =>"form-control input-sm",
                    "style" =>"text-transform:uppercase"
                    ]);
            ?>
            <input type="hidden" id="id_destino" name="id_destino" />
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Limpar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
<!-- FIM MODAL -->
<!-- FIM CONTEUDO -->
</div><!-- FIM CONTEUDO -->

<!-- FOOTER -->
<?php include_once "menu/l_footer.php"; ?>
<!-- END FOOTER -->

<!-- RIGHT MENU -->
<?php include_once "menu/l_menud.php"; ?>
<!-- END RIGHT -->

<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<!-- JAVASCRIPT -->
<?php include_once "menu/l_js.php"; ?>
<!-- END JAVASCRIPT -->

</body>
</html>