<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 17/03/2017
 * Time: 22:43
 */
?>
<div class="modal fade" id="cadastrarAgenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><b>Cadastrar Viagem</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="tipo_cadastro" value="0" />
                    <input type="hidden" id="acao_cadastro" value="1" />
                    <input type="hidden" id="id_tour" name="id_tour" />
                    <div class="col-md-12">
                        <?php
                        echo "<div class='row'>";
                        echo "<div class='col-md-2'>";

                        echo form_label('Ônibus: ');
                        echo form_dropdown('id_cars', $this->agendas->onibus(), '', 'id="id_cars" class=form-control');
                        echo '</div>';

                        echo "<div class='col-md-2'>";
                        echo form_label('Tipo: ');
                        echo form_dropdown('tipo',  $this->agendas->tipo(), 'v', 'id="tipo" class=form-control');
                        echo '</div>';

                        echo "<div class='col-md-4'>";
                        echo form_label('Destino: ');
                        echo form_dropdown('id_viagem', $this->agendas->destino(), '', 'id="id_viagem" class=form-control');
                        echo '</div>';
                        echo "<div class='col-md-4'>";
                        echo form_label('Motorista: ');
                        echo form_dropdown('id_motorista', $this->agendas->motorista(), '', 'id="id_motorista" class=form-control');
                        echo '</div>';
                        echo '</div>';//inicio de uma nova linha
                        echo "<div class='row'>";
                        echo "<div class='col-md-2'>";
                        echo form_label('Data Saida: ');
                        echo "<input type='text' name='data_saida' id='data_saida' class='form-control input-sm'>";
                        echo '</div>';
                        echo "<div class='col-md-2'>";
                        echo form_label('Data Retorno: ');
                        echo "<input type='text' name='data_retorno' id='data_retorno' class='form-control input-sm'>";
                        echo '</div>';
                        echo "<div class='col-md-2'>";
                        echo form_label('Preço: ');
                        echo "<input type='text' name='preco' id='preco' class='form-control input-sm'>";
                        echo '</div>';
                        echo "<div class='col-md-2'>";
                        echo form_label('Preço Un.: ');
                        echo "<input type='text' name='preco_un' id='preco_un' class='form-control input-sm'>";
                        echo '</div>';
                        echo '</div>';
                        echo "<div class='row'>";
                        echo "<div class='col-md-12'>";
                        echo form_label('Observação: ');
                        echo "<input type='text' name='observacao' id='observacao' class='form-control input-sm'>";
                        echo "</div>";
                        echo '</div>';

                        ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                <button type="button" class="btn btn-success" onclick="acaoAgenda();"><i class="fa fa-check"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>
