<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 10:09
 */
?>
<div>
    <ul class="nav nav-tabs" role="tablist">
        <li id='fisicoTab' class="active"><a href="#fisico" role="tab" data-toggle="tab" onclick="$('#tipo_cadastro').val(0);">Pessoa Física</a></li>
        <li id='juridicoTab'><a href="#juridica" role="tab" data-toggle="tab" onclick="$('#tipo_cadastro').val(1);">Pessoa Jurídica</a></li>
        <input type="hidden" id="tipo_cadastro" value="0" />
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="fisico"><!--Listagem de agendamentos-->
            <div class="row">
                <div class="col-md-12">
                <?php
                echo form_open('home/cadastroValidacaoCliente');
                ?>
                <div class='row'>
                    <div class='col-md-6' id="nomeDiv">
                        <?php
                        echo form_label('Nome: ');
                        echo form_input(['name'=>'nome',
                                        'id'=>'nome',
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
                            'class'=>'form-control input-sm']);
                        ?>
                    </div>
                    <div class='col-md-3'>
                        <?php
                        echo form_label('Bairro: ');
                        echo form_input(['name'=>'bairro',
                            'id'=>'bairro',
                            'class'=>'form-control input-sm']);
                        ?>
                    </div>
                    <div class='col-md-2'>
                        <?php
                        echo form_label('Cidade: ');
                        echo form_input(['name'=>'cidade',
                            'id'=>'cidade',
                            'class'=>'form-control input-sm']);
                        ?>
                    </div>
                    <div class='col-md-3'>
                        <?php
                        echo form_label('Local de Embarque: ');
                        echo form_input(['name'=>'loc_embarque',
                            'id'=>'loc_embarque',
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
                            'class'=>'form-control input-sm']);
                        ?>
                    </div>
                </div>
                <?php
                echo form_close();
                ?>
                <!--Fim da Panel verde-->
                </div>
            </div>
        </div><!--Pessoa fisica FIM-->
        <div class="tab-pane fade" id="juridica">
            <div class="row">
                <div class="col-md-12">
                <?php
                echo form_open('home/cadastroValidacaoClienteJuridico');

                echo validation_errors();
                echo "<div class='row'>";
                echo "<div class='col-md-6' id='razaoDiv'>";
                echo form_label('Razão Social: ');
                echo "<input type='text' name='nomej' id='nomej' class='form-control input-sm'>";
                echo '</div>';
                echo "<div class='col-md-6'>";
                echo form_label('Responsável: ');
                echo "<input type='text' name='responsavel' id='responsavel' class='form-control input-sm'>";
                echo '</div>';
                echo '</div>';
                echo "<div class='row'>";
                echo "<div class='col-md-3'>";
                echo form_label('CNPJ: ');
                echo "<input type='text' name='cnpj' id='cnpj' class='form-control input-sm'>";
                echo '</div>';
                echo "<div class='col-md-5'>";
                echo form_label('E-mail: ');
                echo "<input type='text' name='emailj' id='emailj' class='form-control input-sm'>";
                echo '</div>';
                echo "<div class='col-md-2'>";
                echo form_label('Telefone: ');
                echo "<input type='text' name='telefonej' id='telefonej' class='form-control input-sm' value='67 '>";
                echo '</div>';
                echo "<div class='col-md-2'>";
                echo form_label('Celular: ');
                echo "<input type='text' name='celularj' id='celularj' class='form-control input-sm' value='67 '>";
                echo '</div>';
                echo '</div>';
                echo "<div class='row'>";
                echo "<div class='col-md-6'>";
                echo form_label('Rua: ');
                echo "<input type='text' name='ruaj' id='ruaj' class='form-control input-sm'>";
                echo '</div>';
                echo "<div class='col-md-3'>";
                echo form_label('Bairro: ');
                echo "<input type='text' name='bairroj' id='bairroj' class='form-control input-sm'>";
                echo '</div>';
                echo "<div class='col-md-3'>";
                echo form_label('Cidade: ');
                echo "<input type='text' name='cidadej' id='cidadej' class='form-control input-sm'>";
                echo '</div>';
                echo "</div>";
                echo "<div class='row'>";
                echo "<div class='col-md-8'>";
                echo '<br>';
                echo form_label('Contatos: ');
                echo '<br>';
                echo '</div>';
                echo "</div>";
                echo "<div class='row'>";
                echo "<div class='col-md-5'>";
                echo form_label('Nome: ');
                echo "<input type='text' name='contato1' id='contato1' class='form-control input-sm'>";
                echo '</div>';
                echo "<div class='col-md-2'>";
                echo form_label('Telefone: ');
                echo "<input type='text' name='cont_tel1' id='cont_tel1' class='form-control input-sm' value='67 '>";
                echo '</div>';
                echo "<div class='col-md-5'>";
                echo form_label('E-mail: ');
                echo "<input type='text' name='cont_email1' id='cont_email1' class='form-control input-sm'>";
                echo '</div>';
                echo "</div>";
                echo "<div class='row'>";
                echo "<div class='col-md-5'>";
                echo form_label('Nome: ');
                echo "<input type='text' name='contato2' id='contato2' class='form-control input-sm'>";
                echo '</div>';
                echo "<div class='col-md-2'>";
                echo form_label('Telefone: ');
                echo "<input type='text' name='cont_tel2' id='cont_tel2' class='form-control input-sm' value='67 '>";
                echo '</div>';
                echo "<div class='col-md-5'>";
                echo form_label('E-mail: ');
                echo "<input type='text' name='cont_email2' id='cont_email2' class='form-control input-sm'>";
                echo '</div>';
                echo "</div>";
                echo "<div class='row'>";
                echo "<div class='col-md-5'>";
                echo form_label('Nome: ');
                echo "<input type='text' name='contato3' id='contato3' class='form-control input-sm'>";
                echo '</div>';
                echo "<div class='col-md-2'>";
                echo form_label('Telefone: ');
                echo "<input type='text' name='cont_tel3' id='cont_tel3' class='form-control input-sm' value='67 '>";
                echo '</div>';
                echo "<div class='col-md-5'>";
                echo form_label('E-mail: ');
                echo "<input type='text' name='cont_email3' id='cont_email3' class='form-control input-sm'>";
                echo '</div>';
                echo "</div>"; 
                echo form_close();
                ?>
                    </div>
                <!--Fim da Panel verde-->
            </div>
        </div>
    </div>
</div>
