<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 19/03/2017
 * Time: 00:00
 */
?>
<div class="row">

    <div class="col-lg-6">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Reservas</li>
                <li class="pull-right header">
                    <span class="label label-success">LIVRE</span>
                    <span class="label label-primary">IDA</span>
                    <span class="label label-warning">VOLTA</span>
                    <span class="label label-danger">IDA/VOLTA</span>
                </li>
            </ul>
            <div class="tab-content no-padding">
                <div  class="col-md-12">
                    <div class="col-md-3"><strong>Destino:</strong> Goiania</div>
                    <div class="col-md-3"><strong>Saída:</strong> 24/07/2016</div>
                    <div class="col-md-3"><strong>Retorno:</strong> 26/07/2016</div>
                    <div class="col-md-3"><strong>Motorista:</strong> Marciso Gonzalez Martines</div>
                </div>
                <table  class="table table-bordered table-hover table-striped tablesorter">
                    <tr><!--1-->
                        <?php
                        retornaSituacaoAssento(1,(array_key_exists(1,$reservas)?$reservas[1]:0));
                        retornaSituacaoAssento(2,(array_key_exists(2,$reservas)?$reservas[2]:0));
                        ?>
                        <td rowspan="12" align="center">CORREDOR</td>
                        <?php
                        retornaSituacaoAssento(4,(array_key_exists(4,$reservas)?$reservas[4]:0));
                        retornaSituacaoAssento(3,(array_key_exists(3,$reservas)?$reservas[3]:0));
                        ?>
                    </tr>
                    <tr><!--2-->
                        <?php
                        retornaSituacaoAssento(5,(array_key_exists(5,$reservas)?$reservas[5]:0));
                        retornaSituacaoAssento(6,(array_key_exists(6,$reservas)?$reservas[6]:0));
                        ?>
                        <td colspan="2">ESCADA</td>
                    </tr>
                    <tr><!--3-->
                        <?php
                        retornaSituacaoAssento(9,(array_key_exists(9,$reservas)?$reservas[9]:0));
                        retornaSituacaoAssento(10,(array_key_exists(10,$reservas)?$reservas[10]:0));
                        retornaSituacaoAssento(8,(array_key_exists(8,$reservas)?$reservas[8]:0));
                        retornaSituacaoAssento(7,(array_key_exists(7,$reservas)?$reservas[7]:0));
                        ?>
                    </tr>
                    <tr><!--4-->
                        <?php
                        retornaSituacaoAssento(13,(array_key_exists(13,$reservas)?$reservas[13]:0));
                        retornaSituacaoAssento(14,(array_key_exists(14,$reservas)?$reservas[14]:0));
                        retornaSituacaoAssento(12,(array_key_exists(12,$reservas)?$reservas[12]:0));
                        retornaSituacaoAssento(11,(array_key_exists(11,$reservas)?$reservas[11]:0));
                        ?>
                    </tr>
                    <tr><!--5-->
                        <?php
                        retornaSituacaoAssento(17,(array_key_exists(17,$reservas)?$reservas[17]:0));
                        retornaSituacaoAssento(18,(array_key_exists(18,$reservas)?$reservas[18]:0));
                        retornaSituacaoAssento(16,(array_key_exists(16,$reservas)?$reservas[16]:0));
                        retornaSituacaoAssento(15,(array_key_exists(15,$reservas)?$reservas[15]:0));
                        ?>
                    </tr>
                    <tr><!--6-->
                        <?php
                        retornaSituacaoAssento(21,(array_key_exists(21,$reservas)?$reservas[21]:0));
                        retornaSituacaoAssento(22,(array_key_exists(22,$reservas)?$reservas[22]:0));
                        retornaSituacaoAssento(20,(array_key_exists(20,$reservas)?$reservas[20]:0));
                        retornaSituacaoAssento(19,(array_key_exists(19,$reservas)?$reservas[19]:0));
                        ?>
                    </tr>
                    <tr><!--7-->
                        <?php
                        retornaSituacaoAssento(25,(array_key_exists(25,$reservas)?$reservas[25]:0));
                        retornaSituacaoAssento(26,(array_key_exists(26,$reservas)?$reservas[26]:0));
                        retornaSituacaoAssento(24,(array_key_exists(24,$reservas)?$reservas[24]:0));
                        retornaSituacaoAssento(23,(array_key_exists(23,$reservas)?$reservas[23]:0));
                        ?>
                    </tr>
                    <tr><!--8-->
                        <?php
                        retornaSituacaoAssento(29,(array_key_exists(29,$reservas)?$reservas[29]:0));
                        retornaSituacaoAssento(30,(array_key_exists(30,$reservas)?$reservas[30]:0));
                        retornaSituacaoAssento(28,(array_key_exists(28,$reservas)?$reservas[28]:0));
                        retornaSituacaoAssento(27,(array_key_exists(27,$reservas)?$reservas[27]:0));
                        ?>
                    </tr>
                    <tr><!--9-->
                        <?php
                        retornaSituacaoAssento(33,(array_key_exists(33,$reservas)?$reservas[33]:0));
                        retornaSituacaoAssento(34,(array_key_exists(34,$reservas)?$reservas[34]:0));
                        retornaSituacaoAssento(32,(array_key_exists(32,$reservas)?$reservas[32]:0));
                        retornaSituacaoAssento(31,(array_key_exists(31,$reservas)?$reservas[31]:0));
                        ?>
                    </tr>
                    <tr><!--10-->
                        <?php
                        retornaSituacaoAssento(37,(array_key_exists(37,$reservas)?$reservas[37]:0));
                        retornaSituacaoAssento(38,(array_key_exists(38,$reservas)?$reservas[38]:0));
                        retornaSituacaoAssento(36,(array_key_exists(36,$reservas)?$reservas[36]:0));
                        retornaSituacaoAssento(35,(array_key_exists(35,$reservas)?$reservas[35]:0));
                        ?>
                    </tr>
                    <tr><!--11-->
                        <?php
                        retornaSituacaoAssento(41,(array_key_exists(41,$reservas)?$reservas[41]:0));
                        retornaSituacaoAssento(42,(array_key_exists(42,$reservas)?$reservas[42]:0));
                        retornaSituacaoAssento(40,(array_key_exists(40,$reservas)?$reservas[40]:0));
                        retornaSituacaoAssento(39,(array_key_exists(39,$reservas)?$reservas[39]:0));
                        ?>
                    </tr>
                    <tr><!--12-->
                        <?php retornaSituacaoAssento(43,(array_key_exists(43,$reservas)?$reservas[43]:0)); ?>
                        <?php retornaSituacaoAssento(44,(array_key_exists(44,$reservas)?$reservas[44]:0)); ?>
                        <td colspan="2">BANHEIRO</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<a href="<?=base_url()?>Reserva/" class="btn btn-primary" role="button"><i class="fa fa-arrow-left"></i> Voltar</a>