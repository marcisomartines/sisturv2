<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 10/09/2016
 * Time: 19:34
 */
?>
<!DOCTYPE html>
<html>
<!-- HEAD -->
<?php
include_once "menu/l_head.php";
$reserva  = "active";
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
            Reservas
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
                <?php
                $viagens = $this->viagem->viagens();
                foreach($viagens as $via){
                    ?>
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th"></i>
                            <h3 class="box-title">Viagens - <?=$via['destino']?></h3>
                            <div class="box-tools pull-right">
                                <button class="btn bg-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn bg-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body border-radius-none">
                            <!--                  <div class="chart" id="line-chart" style="height: 250px;"></div>-->
                            <!--tabela-->
                            <table class="table table-bordered">
                                <?php
                                $listaViagem = $this->viagem->retornaListaViagem($via['id_viagem']);
                                foreach($listaViagem as $lista){
                                    $reserva = 0;
                                    $un_res = 0;

                                    $data_saida = implode("/", array_reverse(explode("-", $lista['data_saida'])));
                                    ?>
                                    <tr>
                                        <td>
                                            <!--                                        <a href="#" class="list-group-item">-->
                                            <i class="fa fa-calendar"></i> <?= $lista['destino'] ?> - <?php
                                            if ($lista['tipo'] == 'v')
                                                echo "Viagem";
                                            elseif ($lista['tipo'] == 'f')
                                                echo "Fretado";
                                            elseif ($lista['tipo'] == 't')
                                                echo "Turismo";
                                            elseif ($lista['tipo'] == 'e')
                                                echo "Excursão";
                                            ?> - <?= $data_saida ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($lista['nr_poltrona'] - $reserva > 0) {
                                                echo form_open('home/reservaMapa') . '<input type="hidden" name="id_tour" value="' . $lista['id_tour'] . '"><input type="submit" class="btn btn-success btn-xs" value="Disponivel"></form>';
                                            } else {
                                                echo form_open('home/reservaMapa') . '<input type="hidden" name="id_tour" value="' . $lista['id_tour'] . '"><input type="submit" class="btn btn-danger btn-xs" value="Esgotado"></form>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <!--                                        </a>-->
                                    <?php
                                }
                                ?>
                            </table>
                            <!--fim tabela-->
                        </div><!-- /.box-body -->
                    </div>
                    <?php
                }
                ?>
            </section><!-- right col -->
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
