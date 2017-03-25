<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 24/03/2017
 * Time: 23:17
 */
?>
<div class="modal fade" id="reservaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><b>Reservar Assento</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">

                        <?php
                        $query = $this->db->get('tb_clients');
                        $cliente[] = '';
                        foreach ($query->result() as $clt) {
                            $cliente[$clt->id_clients] = $clt->nome;
                        }
                        ?>

                        <input type="text" name="course" id="course" class="form-control" />
                        <input type="hidden" name="cliente" id="cliente" class="form-control" />
                    </div>
                    <div>

                    </div>
                </div>
                <div class="row" style="display: none;">
                    <div class="col-md-12">
                        <div class='row'>
                            <div class='col-md-6' id="nomeDiv">
                                <?php
                                echo form_label('Nome: ');
                                echo form_input(['name'=>'nome',
                                    'id'=>'nome',
                                    'style'=>'text-transform: uppercase;',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-2'>
                                <?php
                                echo form_label('Data Nasc.: ');
                                echo form_input(['name'=>'data_nascimento',
                                    'id'=>'data_nascimento',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-2'>
                                <?php
                                $opcao = array(
                                    'f' => 'Feminino',
                                    'm' => 'Masculino'
                                );
                                echo form_label('Sexo: ');
                                echo form_dropdown('sexo', $opcao, 'f', 'class=form-control');
                                ?>
                            </div>
                            <div class='col-md-2'>
                                <?php
                                echo form_label('RG: ');
                                echo form_input(['name'=>'rg',
                                    'id'=>'rg',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-2'>
                                <?php
                                echo form_label('CPF: ');
                                echo form_input(['name'=>'cpf',
                                    'id'=>'cpf',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-6'>
                                <?php
                                echo form_label('E-mail: ');
                                echo form_input(['name'=>'email',
                                    'id'=>'email',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-2'>
                                <?php
                                echo form_label('Telefone: ');
                                echo form_input(['name'=>'telefone',
                                    'id'=>'telefone',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-2'>
                                <?php
                                echo form_label('Celular: ');
                                echo form_input(['name'=>'celular',
                                    'id'=>'celular',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-4'>
                                <?php
                                echo form_label('Rua: ');
                                echo form_input(['name'=>'rua',
                                    'id'=>'rua',
                                    'style'=>'text-transform: uppercase;',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-3'>
                                <?php
                                echo form_label('Bairro: ');
                                echo form_input(['name'=>'bairro',
                                    'id'=>'bairro',
                                    'style'=>'text-transform: uppercase;',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-2'>
                                <?php
                                echo form_label('Cidade: ');
                                echo form_input(['name'=>'cidade',
                                    'id'=>'cidade',
                                    'style'=>'text-transform: uppercase;',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-3'>
                                <?php
                                echo form_label('Local de Embarque: ');
                                echo form_input(['name'=>'loc_embarque',
                                    'id'=>'loc_embarque',
                                    'style'=>'text-transform: uppercase;',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-8'>
                                <?php
                                echo form_label('Observação: ');
                                echo form_input(['name'=>'observacao',
                                    'id'=>'observacao',
                                    'style'=>'text-transform: uppercase;',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                        </div>

                        <!--Fim da Panel verde-->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="limpaCliente();"><i class="fa fa-close"></i> Cancelar</button>
                <button type="button" class="btn btn-success" onclick="acaoCliente();"><i class="fa fa-check"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>
