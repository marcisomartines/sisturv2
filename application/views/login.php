<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 24/07/2016
 * Time: 14:49
 */
include_once "menu/l_css.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISTUR V2 | Entrar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <img class="col-xs-15 col-md-15 pull-center" src="<?=base_url()?>img/logo2.png">
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Faça o login para entrar no sistema</p>
        <?=form_open('Login/')?>
        <?php
        if(validation_errors()){
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Erro ao efetuar o login!</h4>
                <?=validation_errors()?>
            </div>
        <?php
        }
        ?>
            <div class="form-group has-feedback">
                <?=form_input(array(
                    'name'  =>  "nome",
                    'id'    =>  "nome",
                    'class' =>  "form-control",
                    'placeholder' => "Login"
                ))?>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <?=form_password(array(
                    'name'  =>  "password",
                    'id'    =>  "password",
                    'class' =>  "form-control",
                    'placeholder' => "Senha"
                ))?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">

                <div class="col-xs-4">
                    <?=form_button(array(
                        'type' => 'submit',
                        'content' => 'Entrar',
                        'class' => 'btn btn-primary btn-block btn-flat'
                    ))?>
                </div><!-- /.col -->
            </div>
        <?=form_close()?>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<?php include_once "menu/l_js.php"?>
</body>
</html>

