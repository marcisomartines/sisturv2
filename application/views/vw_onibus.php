<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 17:11
 */
?>
<!DOCTYPE html>
<html>
<!-- HEAD -->
<?php
include_once "menu/l_head.php";
$onibus  = "active";
$listaOnibus =  $this->carros->listarOnibus();

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
            Ônibus
            <small>Listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-map-bus"></i> Ônibus</a></li>
            <li class="active">Lista</li>
        </ol>
    </section>
    <div class="alert alert-danger alert-dismissable" style="display: none;" id="alertCadastroFalha">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-ban"></i> Erro ao cadastrar ônibus!
    </div>

    <div class="alert alert-success alert-dismissable" style="display: none;" id="alertCadastroSucesso">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i> Ônibus cadastrado com sucesso!
    </div>

    <div class="alert alert-danger alert-dismissable" style="display: none;" id="alertEditaFalha">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-ban"></i> Erro ao editar ônibus!
    </div>

    <div class="alert alert-success alert-dismissable" style="display: none;" id="alertEditaSucesso">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i> Ônibus editado com sucesso!
    </div>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo form_button([
                    "class"       => "btn bg-purple",
                    "content"     => "<i class='fa fa-plus'></i> Cadastrar Ônibus",
                    "data-toggle" => "modal",
                    "onclick"     => "$('#acao_cadastro').val(1);limpaOnibus();",
                    "data-target" => '#cadastrarOnibus']);
                ?>
                <div id="onibusLista">
                    <table class="table table-striped">
                        <tr>
                        <th>Código</th>
                        <th>Modelo</th>
                        <th>N° Poltrona</th>
                        <th>Placa</th>
                        <th>Status</th>
                        <th>Ação</th>
                        </tr>
                        <?php
                        foreach($listaOnibus as $car){
                        ?>
                            <tr>
                            <td><?=$car['codigo']?></td>
                            <td><?=$car['modelo']?></td>
                            <td><?=$car['nr_poltrona']?></td>
                            <td><?=$car['placa']?></td>
                            <td><?=$car['status']=='A'?'ATIVO':'INATIVO'?></td>
                            <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cadastrarOnibus" onclick="editaBuscaOnibus('<?=$car['id_cars']?>');$('#acao_cadastro').val(2);limpaOnibus();"><i class="fa fa-pencil-square-o"></i> Editar</button></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
</div>
<!-- Modal -->
<div class="modal fade" id="cadastrarOnibus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><b>Cadastrar Ônibus</b></h4>
            </div>
            <div class="modal-body">
                <?php include('modal/vw_onibusModal.php'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                <button type="button" class="btn btn-success" onclick="acaoOnibus();"><i class="fa fa-check"></i> Salvar</button>
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