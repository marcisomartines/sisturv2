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
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(01)')">01</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(02)')">02</button></td>
                        <td rowspan="12" align="center">CORREDOR</td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(04)')">04</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(03)')">03</button></td>
                    </tr>
                    <tr><!--2-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(05)')">05</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(06)')">06</button></td>
                        <td colspan="2">ESCADA</td>
                    </tr>
                    <tr><!--3-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(09)')">09</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(10)')">10</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(08)')">08</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(07)')">07</button></td>
                    </tr>
                    <tr><!--4-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(13)')">13</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(14)')">14</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(12)')">12</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(11)')">11</button></td>
                    </tr>
                    <tr><!--5-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(17)')">17</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(18)')">18</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(16)')">16</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(15)')">15</button></td>
                    </tr>
                    <tr><!--6-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(21)')">21</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(22)')">22</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(20)')">20</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(19)')">19</button></td>
                    </tr>
                    <tr><!--7-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(25)')">25</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(26)')">26</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(24)')">24</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(23)')">23</button></td>
                    </tr>
                    <tr><!--8-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(29)')">29</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(30)')">30</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(28)')">28</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(27)')">27</button></td>
                    </tr>
                    <tr><!--9-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(33)')">33</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(34)')">34</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(32)')">32</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(31)')">31</button></td>
                    </tr>
                    <tr><!--10-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(37)')">37</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(38)')">38</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(36)')">36</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(35)')">35</button></td>
                    </tr>
                    <tr><!--11-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(41)')">41</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(42)')">42</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(40)')">40</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(39)')">39</button></td>
                    </tr>
                    <tr><!--12-->
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(43)')">43</button></td>
                        <td class="success"><button class="btn btn-success" data-toggle="modal" data-target="#reservaModal" onclick="$('#assento').html('(44)')">44</button></td>
                        <td colspan="2">BANHEIRO</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<button onclick="carregarMapa(44);">recarregar</button>