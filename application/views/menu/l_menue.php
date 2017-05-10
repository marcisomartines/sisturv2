<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 24/07/2016
 * Time: 13:11
 */
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="header">Menu Principal</li>
            <li class="<?=$principal?> treeview">
                <a href="<?=base_url()?>">
                    <i class="fa fa-dashboard"></i> <span>Principal</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="<?=$reserva?> treeview">
                <a href="<?=base_url()?>Reserva/">
                    <i class="fa fa-pie-chart"></i> <span>Reserva</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="<?=$clientemenu?> treeview">
                <a href="<?=base_url()?>Cliente/">
                    <i class="fa fa-user"></i> <span>Cliente</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="<?=$agenda?> treeview">
                <a href="<?=base_url()?>Agenda/">
                    <i class="fa fa-calendar"></i> <span>Agendamento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="<?=$onibus?> treeview">
                <a href="<?=base_url()?>Onibus/">
                    <i class="fa fa-bus"></i> <span>Onibus</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="<?=$destino?> treeview">
                <a href="<?=base_url()?>Destino/">
                    <i class="fa fa-map-marker"></i> <span>Destino</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="<?=$motorista?> treeview">
                <a href="<?=base_url()?>Motorista/">
                    <i class="fa fa-male"></i> <span>Motorista</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="<?=$guia?> treeview">
                <a href="<?=base_url()?>Guia/">
                    <i class="fa fa-street-view"></i> <span>Guia</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="<?=$usuario?> treeview">
                <a href="<?=base_url()?>Usuario/">
                    <i class="fa fa-user"></i> <span>Usuário</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="<?=$relatorio?> treeview">
                <a href="<?=base_url()?>index.php/Principal/relatorios">
                    <i class="fa fa-book"></i> <span>Relat&oacute;rios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
