<!DOCTYPE html>
<html>
    <!-- HEAD -->
    <?php include_once "menu/l_head.php"; ?>
    <!-- END HEAD -->
    <!-- LEFT MENU -->
    <?php include_once "menu/l_menue.php"; ?>
    <?php
    $ausente = $this->passagem->reservaAusente();
    $confirmado = $this->passagem->reservaConfirmada();
    $reserva = $this->passagem->reservaFeita();
    $grafico = $this->passagem->reservaGrafico();
    ?>
    <!-- END LEFT MENU -->
      <!-- INICIO CONTEUDO -->
      <div class="content-wrapper" id="conteudo">
        <!-- CONTEUDO -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?=$reserva?></h3>
                  <p>Reservas no mês</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?=$confirmado?> <sup style="font-size: 15px">passagem(s)</sup></h3>
                  <p>Confirmadas</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?=$ausente?> <sup style="font-size: 15px">passagem(s)</sup></h3>
                  <p>Ausentes</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Mais informações<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                  <li class="pull-left header"><i class="fa fa-inbox"></i> Reservas</li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                </div>
              </div><!-- /.nav-tabs-custom -->

            </section><!-- /.Left col -->
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
//                    for ($i = 1; $i <= $lista['nr_poltrona']; $i++) {
//                      $this->db->where('id_tour', $lista['id_tour']);
//                      $this->db->where('nr_poltrona', $i);
//                      $livre = $this->db->get('tb_reservs');
//                      if ($livre->num_rows() > 0) {
//                        foreach ($livre->result() as $livre)
//                          if ($livre->tipo == 'i' || $livre->tipo == 'v') {
//                            $un_res++;
//                            if ($un_res == 2) {
//                              $reserva++;
//                              $un_res = 0;
//                            }
//                          }
//                        if ($livre->tipo == 'd') {
//                          $reserva++;
//                        }
//                      }
//                    }
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

              <!-- Calendar -->
              <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">Calendar</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->
                <div class="box-footer text-black">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Progress bars -->
                      <div class="clearfix">
                        <span class="pull-left">Task #1</span>
                        <small class="pull-right">90%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #2</span>
                        <small class="pull-right">70%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                      </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <div class="clearfix">
                        <span class="pull-left">Task #3</span>
                        <small class="pull-right">60%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #4</span>
                        <small class="pull-right">40%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.box -->

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
    <script>
      var months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
      var area = new Morris.Line({
        element: 'revenue-chart',
        resize: true,
        data: [
            <?php
            foreach($grafico as $graf){
              echo "{month: '".date('Y')."-".$graf['mes']."', item1: ".$graf['confirmado'].", item2: ".$graf['ausente']."},";
              }
            ?>
        ],
        xkey: 'month',
        ykeys: ['item1', 'item2'],
        labels: ['Confirmados', 'Ausente'],
        xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
          var month = months[x.getMonth()];
          return month;
        },
        dateFormat: function(x) {
          var month = months[new Date(x).getMonth()];
          return month;
        },
        lineColors: ['#33cc33', '#ff6600'],
        hideHover: 'auto'
      });
    </script>
  </body>
</html>
