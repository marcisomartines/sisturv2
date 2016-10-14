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
$motorista  = "active";
$listaMotorista =  $this->carros->listarMotorista();

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
            Motorista
            <small>Listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-map-bus"></i> Motorista</a></li>
            <li class="active">Lista</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo form_button([
                    "class"       =>"btn bg-purple",
                    "content"     =>"<i class='fa fa-plus'></i> Cadastrar Motorista",
                    "data-toggle" =>"modal",
                    "data-target" =>'#cadastrarMotorista']);
                ?>
                <table class="table table-striped">
                    <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Status</th>
                    <th>Ação</th>
                    </tr>
                    <?php
                    foreach($listaMotorista as $motorista){
                        ?>
                        <tr>
                        <td><?=$motorista['nome']?></td>
                        <td><?=$motorista['email']?></td>
                        <td><?=$motorista['telefone']?></td>
                        <td><?=$motorista['celular']?></td>
                        <td><?=$motorista['status']=='A'?'ATIVO':'INATIVO'?></td>
                        <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cadastrarMotorista"><i class="fa fa-pencil-square-o"></i> Editar</button></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
</div>

<!-- Modal -->
<?php include_once "modal/vw_motoristaModal.php"; ?>
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