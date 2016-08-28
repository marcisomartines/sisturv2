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
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menu Principal</li>
            <li class="active treeview">
                <a href="#" onclick="getPage('index.php/Principal/inicio','conteudo');">
                    <i class="fa fa-dashboard"></i> <span>Principal</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#" onclick="getPage('index.php/Principal/teste','conteudo');">
                    <i class="fa fa-pie-chart"></i> <span>Reserva</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Cliente</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Agendamento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bus"></i> <span>Onibus</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-map-marker"></i> <span>Destino</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-male"></i> <span>Motorista</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-street-view"></i> <span>Guia</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Usuário</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Relat&oacute;rios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
