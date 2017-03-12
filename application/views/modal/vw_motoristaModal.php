<div class="modal fade" id="cadastrarMotorista" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><b>Cadastrar Motorista</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <input type="hidden" id="tipo_cadastro" value="0" />
                <input type="hidden" id="acao_cadastro" value="1" />
                <input type="hidden" id="id_drivers" name="id_drivers" />
                    <div class="col-md-12">
                        <div class='row'>
                            <div class='col-md-4'>
                                <?=form_label('Nome: ')?>
                                <input type='text' name='nome' id='nome' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Data Nasc.: ')?>
                                <input type='text' name='data_nascimento' data-mask="00/00/0000" placeholder="__/__/____" id='data_nascimento' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?= form_label('RG: ')?>
                                <input type='text' name='rg' id='rg' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('CPF: ')?>
                                <input type='text' name='cpf' id='cpf' data-mask="00.000.000-00" placeholder="__.___.___-__" class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?= form_label('CNH: ')?>
                                <input type='text' name='cnh' id='cnh' class='form-control input-sm'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='col-md-2'>
                                <?= form_label('Validade CNH: ')?>
                                <input type='text' name='validade_cnh' id='validade_cnh' data-mask="00/00/0000" placeholder="__/__/____" class='form-control input-sm'>
                            </div>

                            <div class='col-md-5'>
                                <?= form_label('E-mail: ')?>
                                <input type='text' name='email' id='email' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?= form_label('Telefone: ')?>
                                <input type='text' name='telefone' id='telefone' data-mask="(00) 0000-0000" placeholder="(__) ____-____" class='form-control input-sm' value='67 '>
                            </div>

                            <div class='col-md-2'>
                                <?= form_label('Celular: ')?>
                                <input type='text' name='celular' id='celular' data-mask="(00) 00000-0000" placeholder="(__) _____-____" class='form-control input-sm' value='67 '>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='col-md-6'>
                                <?= form_label('Rua: ')?>
                                <input type='text' name='rua' id='rua' class='form-control input-sm'>
                            </div>

                            <div class='col-md-3'>
                                <?= form_label('Bairro: ')?>
                                <input type='text' name='bairro' id='bairro' class='form-control input-sm'>
                            </div>

                            <div class='col-md-3'>
                                <?= form_label('Cidade: ')?>
                                <input type='text' name='cidade' id='cidade' class='form-control input-sm'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='col-md-12'>
                                <?= form_label('Observação: ')?>
                                <input type='text' name='onservacao' id='observacao' class='form-control input-sm'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>