<div class="modal fade" id="cadastrarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><b>Cadastrar Usuário</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="tipo_cadastro" value="0" />
                    <input type="hidden" id="acao_cadastro" value="1" />
                    <input type="hidden" id="id_users" name="id_users" />
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
                                <input type='text' name='telefone' id='telefone' data-mask="(00) 0000-0000" placeholder="(__) ____-____" class='form-control input-sm' value='67 '>
                           </div>
                           <div class='col-md-2'>
                               <?=form_label('Celular: ')?>
                                <input type='text' name='celular' id='celular' data-mask="(00) 00000-0000" placeholder="(__) _____-____" class='form-control input-sm' value='67 '>
                           </div>

                            <div class='col-md-2'>
                                <?php
                                $tipo = array(
                                    '0' => 'Usuário',
                                    '1' => 'Guia',
                                    '2' => 'Administrador'
                                );
                                echo form_label('Tipo: ');
                                echo form_dropdown('tipo',$tipo,'0','id="tipo" class=form-control');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                <button type="button" class="btn btn-success" onclick="acaoUsuario();"><i class="fa fa-check"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>