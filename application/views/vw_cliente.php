<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 10/09/2016
 * Time: 21:28
 */
?>
<!DOCTYPE html>
<html>
<!-- HEAD -->
<?php
include_once "menu/l_head.php";
$clientemenu  = "active";
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
            Cliente
            <small>Listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Cliente</a></li>
            <li class="active">Lista</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-md-3">
                <?php 
                $query = $this->db->get('tb_clients');
                $cliente[] = '';
                foreach ($query->result() as $clt) {
                    $cliente[$clt->id_clients] = $clt->nome;
                }
                include 'ajaxCliente.php';
                ?>
            </div>
            <div class="col-md-5">
                <?php
                echo form_button(array(
                    "class"=>"btn btn-primary",
                    "content"=>"<i class='fa fa-search'></i> Pesquisar",
                    "onclick"=>"buscaCliente();"
                ));

//                echo form_button(array(
//                    'class'=>'btn btn-success',
//                    'content'=>"<i class='fa fa-search-plus'></i> Ver todos"
//                ));

                echo form_button(array(
                    'class'=>'btn bg-purple',
                    "data-toggle"=>"modal",
                    "data-target"=>"#myModal",
                    'content'=>"<i class='fa fa-plus'></i> Cadastrar Cliente"
                ));
                ?>
            </div>
        </div>
        <div class="col-lg-12" id="clienteLista">

        </div>
        </div>
        <!-- FIM CONTEUDO -->
</div><!-- FIM CONTEUDO -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar Cliente</h4>
            </div>
            <div class="modal-body">
               <?php include_once('modal/vw_clienteModal.php'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" onclick="cadastraCliente();"><i class="fa fa-check"></i> Cadastrar</button>
            </div>
        </div>
    </div>
</div>
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