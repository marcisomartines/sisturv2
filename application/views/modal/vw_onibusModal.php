
    <div class="row">
        <input type="hidden" id="tipo_cadastro" value="0" />
        <input type="hidden" id="acao_cadastro" value="1" />
        <input type="hidden" id="id_cars" name="id_cars" />
        <div class="col-md-12">
            <div class='row'>
                <div class='col-md-2'>
                    <?=form_label('Código: ')?>
                    <input type='text' name='codigo' id='codigo' class='form-control input-sm'>
                </div>

                <div class='col-md-3'>
                    <?=form_label('Montadora: ')?>
                    <input type='text' name='montadora' id='montadora' class='form-control input-sm'>
                </div>

                <div class='col-md-2'>
                    <?=form_label('Modelo: ')?>
                    <input type='text' name='modelo' id='modelo' class='form-control input-sm'>
                </div>

                <div class='col-md-2'>
                    <?=form_label('Ano: ')?>
                    <input type='text' name='ano' id='ano' data-mask="0000/0000" placeholder="____/____" class='form-control input-sm'>
                </div>

                <div class='col-md-2'>
                    <?=form_label('Placa: ')?>
                    <input type='text' name='placa' id='placa' data-mask="AAA-0000" placeholder="___-____" class='form-control input-sm'>
                </div>

                <div class='col-md-3'>
                    <?=form_label('Chassis: ')?>
                    <input type='text' name='chassis' id='chassis'  data-mask="AAAAAAAAAAAAAAAAA" class='form-control input-sm'>
                </div>
           
                <div class='col-md-2'>
                    <?=form_label('N° Poltr.: ')?>
                    <input type='text' name='nr_poltrona' id='nr_poltrona' class='form-control input-sm'>
                </div>
                <div class='col-md-2'>
                    <?=form_label('ANTT/CRF: ')?>
                    <input type='text' name='antt' id='antt' data-mask="00/00/0000" placeholder="__/__/____" class='form-control input-sm'>
                </div>

                <div class='col-md-2'>
                    <?=form_label('Agepan: ')?>
                    <input type='text' name='agepan' id='agepan' data-mask="00/00/0000" placeholder="__/__/____" class='form-control input-sm'>
                </div>

                <div class='col-md-2'>
                    <?=form_label('Vistec: ')?>
                    <input type='text' name='vistec' id='vistec' data-mask="00/00/0000" placeholder="__/__/____" class='form-control input-sm'>
                </div>

                <div class='col-md-2'>
                    <?=form_label('INMETRO: ')?>
                    <input type='text' name='inmetro' id='inmetro' data-mask="00/00/0000" placeholder="__/__/____" class='form-control input-sm'>
                </div>

                <div class='col-md-2'>
                    <?=form_label('Seguro Início: ')?>
                    <input type='text' name='seguro_inicio' id='seguro_inicio' data-mask="00/00/0000" placeholder="__/__/____" class='form-control input-sm'>
                </div>
            
                <div class='col-md-2'>
                    <?=form_label('Seguro Final: ')?>
                    <input type='text' name='seguro_final' id='seguro_final' data-mask="00/00/0000" placeholder="__/__/____" class='form-control input-sm'>
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
                    echo form_dropdown('licenciamento', $opcao, $this->input->post('licenciamento'), "id='licenciamento' class=form-control");
                    ?>
                </div>
          
        </div>
    </div>