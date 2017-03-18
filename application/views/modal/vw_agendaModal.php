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
                        echo "<div class='col-md-4'>";
                        echo validation_errors();
                        $this->db->where('tipo_cliente',1);
                        $query = $this->db->get('tb_clients');
                        $cliente[] = '';
                        foreach ($query->result() as $clt) {
                            $cliente[$clt->id_clients] = $clt->nome;
                        }
                        echo form_label('Cliente: ');
                        echo form_dropdown('id_client', $cliente, 'v', 'class=form-control');
                        echo '</div>';
                        echo "<div class='col-md-2'>";
                        $this->db->where('status', 'A');
                        $query = $this->db->get('tb_cars');
                        $opcao[] = '';
                        foreach ($query->result() as $bus) {
                            $opcao[$bus->id_cars] = $bus->codigo . ' - ' . $bus->modelo;
                        }
                        echo form_label('Ônibus: ');
                        echo form_dropdown('id_car', $opcao, 'v', 'class=form-control');
                        echo '</div>';
                        $opcao = array(
                            'v' => 'Viagem',
                            'f' => 'Fretamento',
                            't' => 'Turismo',
                            'e' => 'Escursão'
                        );
                        echo "<div class='col-md-2'>";
                        echo form_label('Tipo: ');
                        echo form_dropdown('tipo', $opcao, 'v', 'class=form-control');
                        echo '</div>';
                        $query = $this->db->get('tb_viagem');
                        $viagem[] = '';
                        foreach ($query->result() as $vig) {
                            $viagem[$vig->id_viagem] = $vig->destino;
                        }
                        echo "<div class='col-md-4'>";
                        echo form_label('Destino: ');
                        echo form_dropdown('id_viagem', $viagem, 'v', 'class=form-control');
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
                        $this->db->where('status', 'A');
                        $query = $this->db->get('tb_drivers');
                        $opcao2[] = '';
                        foreach ($query->result() as $driver) {
                            $opcao2[$driver->id_drivers] = $driver->nome;
                        }
                        echo "<div class='col-md-4'>";
                        echo form_label('Motorista: ');
                        echo form_dropdown('id_motorista', $opcao2, 'v', 'class=form-control');
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
                <button type="button" class="btn btn-success" onclick="acaoMotorista();"><i class="fa fa-check"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>
