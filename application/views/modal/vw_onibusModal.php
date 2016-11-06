<div class="modal fade" id="cadastrarOnibus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar Ônibus</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class='row'>
                            <div class='col-md-2'>
                                <?=form_label('Código: ')?>
                                <input type='text' name='codigo' id='codigo' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Montadora: ')?>
                                <input type='text' name='montadora' id='montadora' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Modelo: ')?>
                                <input type='text' name='modelo' id='modelo' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Ano: ')?>
                                <input type='text' name='ano' id='ano' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Placa: ')?>
                                <input type='text' name='placa' id='placa' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Chassis: ')?>
                                <input type='text' name='chassis' id='chassis' class='form-control input-sm'>
                            </div>

                        </div>

                        <div class='row'>
                            <div class='col-md-2'>
                                <?=form_label('N° Poltr.: ')?>
                                <input type='text' name='nr_poltrona' id='nr_poltrona' class='form-control input-sm'>
                            </div>
                            <div class='col-md-2'>
                                <?=form_label('ANTT/CRF: ')?>
                                <input type='text' name='antt' id='antt' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Agepan: ')?>
                                <input type='text' name='agepan' id='agepan' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Vistec: ')?>
                                <input type='text' name='vistec' id='vistec' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('INMETRO: ')?>
                                <input type='text' name='inmetro' id='inmetro' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?=form_label('Seguro Início: ')?>
                                <input type='text' name='seguro_inicio' id='seguro_inicio' class='form-control input-sm'>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-2'>
                                <?=form_label('Seguro Final: ')?>
                                <input type='text' name='seguro_final' id='seguro_final' class='form-control input-sm'>
                            </div>

                            <div class='col-md-2'>
                                <?php
                                echo form_label('Licenciamento: ');
                                $opcao[] = 'Escolha...';
                                $opcao[1] = 'Janeiro';
                                $opcao[2] = 'Fevereiro';
                                $opcao[3] = 'Março';
                                $opcao[4] = 'Abril';
                                $opcao[5] = 'Maio';
                                $opcao[6] = 'Junho';
                                $opcao[7] = 'Julho';
                                $opcao[8] = 'Agosto';
                                $opcao[9] = 'Setembro';
                                $opcao[10] = 'Outubro';
                                $opcao[11] = 'Novembro';
                                $opcao[12] = 'Dezembro';
                                echo form_dropdown('licenciamento', $opcao, $this->input->post('licenciamento'), 'class=form-control');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#placa').mask('AAA-0000', {placeholder: "___-____"});
        $('#ano').mask('0000/0000', {placeholder: "____/____"});
        $('#chassis').mask('AAAAAAAAAAAAAAAAA');
        $('#antt').mask('00/00/0000', {placeholder: "__/__/____"});
        $('#agepan').mask('00/00/0000', {placeholder: "__/__/____"});
        $('#vistec').mask('00/00/0000', {placeholder: "__/__/____"});
        $('#inmetro').mask('00/00/0000', {placeholder: "__/__/____"});
        $('#seguro_inicio').mask('00/00/0000', {placeholder: "__/__/____"});
        $('#seguro_final').mask('00/00/0000', {placeholder: "__/__/____"});
    });
</script>