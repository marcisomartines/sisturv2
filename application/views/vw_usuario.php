<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 15/10/2016
 * Time: 10:37
 */
?>
<!DOCTYPE html>
<html>
<!-- HEAD -->
<?php
include_once "menu/l_head.php";
$usuario  = "active";
$listaUsuario =  $this->usuarios->listarUsuarios();

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
            Usuário
            <small>Listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-map-bus"></i> Usuário</a></li>
            <li class="active">Lista</li>
        </ol>
    </section>

    <div class="alert alert-danger alert-dismissable" style="display: none;" id="alertCadastroFalha">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-ban"></i> Erro ao cadastrar usuário!
    </div>

    <div class="alert alert-success alert-dismissable" style="display: none;" id="alertCadastroSucesso">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i> Usuário cadastrado com sucesso!
    </div>

    <div class="alert alert-danger alert-dismissable" style="display: none;" id="alertEditaFalha">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-ban"></i> Erro ao editar usuário!
    </div>

    <div class="alert alert-success alert-dismissable" style="display: none;" id="alertEditaSucesso">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i> Motorista editado com sucesso!
    </div>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo form_button([
                    "class"       =>"btn bg-purple",
                    "content"     =>"<i class='fa fa-plus'></i> Cadastrar Usuário",
                    "data-toggle" =>"modal",
                    "onclick"     => "$('#acao_cadastro').val(1);limpaUsuario();",
                    "data-target" =>'#cadastrarUsuario']);
                ?>
                <div id="usuarioLista">
                    <table class="table table-striped">
                        <tr>
                            <th>Nome</th>
                            <th>Nome Usuário</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Celular</th>
                            <th>Ação</th>
                        </tr>
                        <?php
                        foreach($listaUsuario as $usuario){
                            ?>
                            <tr>
                                <td><?=$usuario['nome_comp']?></td>
                                <td><?=$usuario['nome_user']?></td>
                                <td><?=$usuario['email']?></td>
                                <td><?=$usuario['telefone']?></td>
                                <td><?=$usuario['celular']?></td>
                                <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cadastrarUsuario" onclick="editaBuscaUsuario('<?=$usuario['id_users']?>');$('#acao_cadastro').val(2);limpaUsuario();"><i class="fa fa-pencil-square-o"></i> Editar</button></td>
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
<?php include_once "modal/vw_usuarioModal.php"; ?>
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