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

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo form_button([
                    "class"       =>"btn bg-purple",
                    "content"     =>"<i class='fa fa-plus'></i> Cadastrar Ônibus",
                    "data-toggle" =>"modal",
                    "data-target" =>'#cadastrarOnibus']);
                ?>
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
                        <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cadastrarOnibus"><i class="fa fa-pencil-square-o"></i> Editar</button></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
</div>

<!-- Modal -->
<?php include "modal/vw_onibusModal.php"; ?>
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