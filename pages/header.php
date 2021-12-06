<?php
include 'session.php';
?>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <h4 class="brand-text text-secondary mt-1 ml-2"><strong>SCIP</strong></h4>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="fas fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <h6 class="dropdown-header">Olá, <?php echo $nome ?></h6>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-id-badge text-secondary mr-2"></i> Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" data-toggle="modal" data-target="#logoutModal" class="dropdown-item">
                    <i class="fas fa-sign-out-alt text-secondary mr-2"></i> Sair
                </a>
                <div class="dropdown-divider"></div>
            </div>
        </li>

    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
        <img src="../../dist/img/logo.png" alt="SCIP Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <h6 class="brand-text" style="margin-top: 5px;"><strong> <?php echo $nome ?> </strong></h6>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="../../index.php" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            <strong>Início</strong>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../project/project_read.php" class="nav-link">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            <strong>Projetos</strong>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../timesheet/timesheet_general.php" class="nav-link">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                            <strong>Lançamento</strong>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../report/report_read.php" class="nav-link">
                        <i class="nav-icon fas fa-clipboard"></i>
                        <p>
                            <strong>Relatórios</strong>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../user/user_read.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            <strong>Usuários</strong>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../client/client_read.php" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            <strong>Clientes</strong>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>