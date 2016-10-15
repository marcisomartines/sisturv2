<div class="modal fade" id="cadastrarMotorista" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar Motorista</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class='row'>
                            <div class='col-md-4'>
                                <?=form_label('Nome: ')?>
                                <input type='text' name='nome' id='nome' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Data Nasc.: ')?>
                                <input type='text' name='data_nascimento' id='data_nascimento' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?= form_label('RG: ')?>
                                <input type='text' name='rg' id='rg' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('CPF: ')?>
                                <input type='text' name='cpf' id='cpf' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?= form_label('CNH: ')?>
                                <input type='text' name='cnh' id='cnh' class='form-control input-sm'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='col-md-2'>
                                <?= form_label('Validade CNH: ')?>
                                <input type='text' name='validade_cnh' id='validade_cnh' class='form-control input-sm'>
                            </div>

                            <div class='col-md-5'>
                                <?= form_label('E-mail: ')?>
                                <input type='text' name='email' id='email' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?= form_label('Telefone: ')?>
                                <input type='text' name='telefone' id='telefone' class='form-control input-sm' value='67 '>
                            </div>

                            <div class='col-md-2'>
                                <?= form_label('Celular: ')?>
                                <input type='text' name='celular' id='celular' class='form-control input-sm' value='67 '>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Limpar</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Cadastrar</button>
            </div>
        </div>
    </div>
</div>