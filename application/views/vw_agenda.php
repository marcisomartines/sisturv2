<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 17/03/2017
 * Time: 22:43
 */
?>
<!DOCTYPE html>
<html>
<!-- HEAD -->
<?php
include_once "menu/l_head.php";
$agenda  = "active";
$listaAgenda = $this->agendas->listarAgenda();
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
            Agenda
            <small>Listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-map-bus"></i> Agenda</a></li>
            <li class="active">Lista</li>
        </ol>
    </section>

    <div class="alert alert-danger alert-dismissable" style="display: none;" id="alertCadastroFalha">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-ban"></i> Erro ao cadastrar agenda!
    </div>

    <div class="alert alert-success alert-dismissable" style="display: none;" id="alertCadastroSucesso">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i> Agenda cadastrado com sucesso!
    </div>

    <div class="alert alert-danger alert-dismissable" style="display: none;" id="alertEditaFalha">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-ban"></i> Erro ao editar agenda!
    </div>

    <div class="alert alert-success alert-dismissable" style="display: none;" id="alertEditaSucesso">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i> Agenda editado com sucesso!
    </div>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo form_button([
                    "class"       =>"btn bg-purple",
                    "content"     =>"<i class='fa fa-plus'></i> Cadastrar Viagem",
                    "data-toggle" =>"modal",
                    "onclick"     => "$('#acao_cadastro').val(1);limpaAgenda();",
                    "data-target" =>'#cadastrarAgenda']);
                ?>
                <div id="agendaLista">
                    <table class="table table-striped">
                        <tr>
                            <th>Código</th>
                            <th>Ônibus</th>
                            <th>Destino</th>
                            <th>Saída</th>
                            <th>Retorno</th>
                            <th>Tipo</th>
                            <th>Situação</th>
                            <th>Ação</th>
                        </tr>
                        <?php
                        foreach($listaAgenda as $agenda){
                            ?>
                            <tr>
                                <td><?=$agenda['codigo']?></td>
                                <td><?=$agenda['modelo']?></td>
                                <td><?=$agenda['destino']?></td>
                                <td><?=$agenda['data_saida']?></td>
                                <td><?=$agenda['data_retorno']?></td>
                                <td><?=$agenda['tipo']?></td>
                                <td><?=$agenda['status']=='A'?'ATIVO':'FINALIZADO'?></td>
                                <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cadastrarAgenda" onclick="editaBuscaAgenda('<?=$agenda['id_tour']?>');$('#acao_cadastro').val(2);limpaAgenda();"><i class="fa fa-pencil-square-o"></i> Editar</button></td>
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
<?php include_once "modal/vw_agendaModal.php"; ?>
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