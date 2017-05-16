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
                <h4 class="modal-title" id="myModalLabel"><b>Reservar Assento (<span id="assento"></span>)</b></h4>
                <input type="hidden" id="acao_cadastro" value="1" />
                <input type="hidden" id="id_reservs" value="" />
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                            echo form_label("Nome:");
                            echo form_input([
                                "name"=>"course",
                                "id"=>"course",
                                "class"=>"form-control"
                            ]);

                            echo form_hidden([
                                "name"=>"cliente",
                                "id"=>"cliente"
                            ]);
                        ?>
                    </div>
                    <div class="col-md-1">
                        <i id="novo" class="fa fa-plus-circle fa-2x" style="margin-top:27px;margin-left: -13px;" onclick="$('#cadastraCliente').show();$('#normal').show();$('#novo').hide();"></i>
                        <i id="normal" class="fa fa-minus-circle fa-2x" style="margin-top:27px;margin-left: -13px;display: none;" onclick="$('#cadastraCliente').hide();$('#normal').hide();$('#novo').show();"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <?php
                        echo form_radio([
                            'name'          => 'tipo',
                            'id'            => 'tipo-i',
                            'value'         => 'i',
                            'checked'       => FALSE,
                            'style'         => 'margin-left:10px'
                        ]);
                        echo form_label('Ida');
                        echo form_radio([
                            'name'          => 'tipo',
                            'id'            => 'tipo-v',
                            'value'         => 'v',
                            'checked'       => FALSE,
                            'style'         => 'margin-left:10px'
                        ]);
                        echo form_label('Volta');
                        echo form_radio([
                            'name'          => 'tipo',
                            'id'            => 'tipo-d',
                            'value'         => 'd',
                            'checked'       => TRUE,
                            'style'         => 'margin-left:10px'
                        ]);
                        echo form_label('Ida/Volta')
                        ?>
                    </div>
                </div>
                <div class="row" style="display: none;" id="cadastraCliente">
                    <div class="col-md-12">
                        <div class='row'>
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
                            <div class='col-md-2'>
                                <?php
                                echo form_label('CPF: ');
                                echo form_input(['name'=>'cpf',
                                    'id'=>'cpf',
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
                            <div class='col-md-6'>
                                <?php
                                echo form_label('E-mail: ');
                                echo form_input(['name'=>'email',
                                    'id'=>'email',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-6'>
                                <?php
                                echo form_label('Rua: ');
                                echo form_input(['name'=>'rua',
                                    'id'=>'rua',
                                    'style'=>'text-transform: uppercase;',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                        </div>
                        <div class='row'>

                            <div class='col-md-3'>
                                <?php
                                echo form_label('Bairro: ');
                                echo form_input(['name'=>'bairro',
                                    'id'=>'bairro',
                                    'style'=>'text-transform: uppercase;',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-3'>
                                <?php
                                echo form_label('Cidade: ');
                                echo form_input(['name'=>'cidade',
                                    'id'=>'cidade',
                                    'style'=>'text-transform: uppercase;',
                                    'class'=>'form-control input-sm']);
                                ?>
                            </div>
                            <div class='col-md-6'>
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
                            <div class='col-md-12'>
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
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="limpaReserva();"><i class="fa fa-arrow-left"></i> Voltar</button>
                <button id="cancelarReserva" type="button" id="cancelaReserva" class="btn btn-danger" data-dismiss="modal" onclick="cancelaReserva();" ><i class="fa fa-close"></i> Cancelar Reserva</button>
                <button type="button" class="btn btn-success" onclick="acaoReserva();"><i class="fa fa-check"></i> Salvar Reserva</button>
            </div>
        </div>
    </div>
</div>
