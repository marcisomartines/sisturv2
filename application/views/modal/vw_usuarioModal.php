<div class="modal fade" id="cadastrarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar Usuário</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class='row'>
                            <div class='col-md-4'>
                                <?=form_label('Nome: ')?>
                                <input type='text' name='nome' id='nome' class='form-control input-sm' required>
                            </div>
                            <div class='col-md-3'>
                                <?=form_label('Nome de Usuario: ')?>
                                <input type='text' name='usuario' id='usuario' class='form-control input-sm'>
                            </div>
                            <div class='col-md-4'>
                                <?=form_label('E-mail: ')?>
                                <input type='text' name='email' id='email' class='form-control input-sm'>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <?=form_label('Senha')?>
                                <input type='password' name='senha' id='senha' class='form-control input-sm'>
                            </div>
                           <div class='col-md-2'>
                               <?=form_label('Telefone: ')?>
                                <input type='text' name='telefone' id='telefone' class='form-control input-sm' value='67 '>
                           </div>
                           <div class='col-md-2'>
                               <?=form_label('Celular: ')?>
                                <input type='text' name='celular' id='celular' class='form-control input-sm' value='67 '>
                           </div>

                            <div class='col-md-2'>
                                <?php
                                $tipo = array(
                                    '0' => 'Usuário',
                                    '1' => 'Guia'
                                );
                                echo form_label('Tipo: ');
                                echo form_dropdown('tipo',$tipo,'0','class=form-control');
                                ?>
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