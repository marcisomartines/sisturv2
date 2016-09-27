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

                echo form_button(array(
                    'class'=>'btn btn-success',
                    'content'=>"<i class='fa fa-search-plus'></i> Ver todos"
                ));

                echo form_button(array(
                    'class'=>'btn bg-purple',
                    'content'=>"<i class='fa fa-plus'></i> Cadastrar Cliente"
                ));
                ?>
            </div>
        </div>
        <div class="col-lg-12">
            <table class="table table-hover">
                <tr>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Loc. Embarque</th>
                    <th>Ação</th>
                </tr>
                <tr>
                    <td>Marciso Gonzalez Martines</td>
                    <td>01334961</td>
                    <td>022.263.158-68</td>
                    <td>67 3388-0836</td>
                    <td>67 99203-8349</td>
                    <td>Rodoviaria Antiga</td>
                    <td><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Editar</button></td>
                </tr>
            </table>
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