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
                echo form_open('home/buscaCliente');
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
                    "type"=>"submit"
                ));

                echo form_button(array(
                    'class'=>'btn btn-success',
                    'content'=>"<i class='fa fa-search-plus'></i> Ver todos"
                ));

                echo form_button(array(
                    'class'=>'btn bg-purple',
                    'content'=>"<i class='fa fa-plus'></i> Cadastrar Cliente"
                ));
                echo form_close();
                ?>
            </div>
        </div>
        </div>
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