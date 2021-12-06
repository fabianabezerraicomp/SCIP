<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCIP | Projeto</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <!-- <link rel="shortcut icon" type="image/png" href="../../dist/img/logo-project-control-1.png" data-original-href="../../dist/img/logo-project-control-1.png"> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <div header-include-html="../header.php"></div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">

            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content" id="data_inicio">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content" id="data_fim">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content" id="status">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-secondary card-tabs">
                                            <div class="card-header p-0 pt-1">
                                                <ul class="nav nav-tabs" id="custom-tabs-five-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="gantt-tab" data-toggle="pill" href="#gantt" role="tab" aria-controls="gantt" aria-selected="false">Gantt</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="tasks-tab" data-toggle="pill" href="#tasks" role="tab" aria-controls="tasks" aria-selected="false">Tarefas</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content" id="custom-tabs-five-tabContent">
                                                    <div class="tab-pane fade show active" id="gantt" role="tabpanel" aria-labelledby="gantt-tab">
                                                        <div class="card card-light">
                                                            <!-- /.card-header -->
                                                            <div class="card-header">
                                                            </div>
                                                            <div class="card-body table-responsive p-0">
                                                                <div id="chart_div" style="overflow: auto; width:100%; height:auto;"></div>
                                                            </div>
                                                            <!-- /.card-body -->
                                                            <div class="card-footer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tasks" role="tabpanel" aria-labelledby="tasks-tab">
                                                        <div class="col-md-12" read-task-html="../task/task_read.php"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                                <div class="row">
                                    <div class="text-left ml-2">
                                        <a href="project_read.php" class="btn btn-danger"><strong>VOLTAR</strong></a>
                                    </div>
                                    <div class="text-left ml-3">
                                        <a href="project_update.php" class="btn btn-primary"><strong>ATUALIZAR</strong></a>
                                    </div>
                                </div>
                                <hr>
                                </hr>
                                <h3 class="text-primary" id="nome">

                                </h3>
                                <p class="text-muted" id="descricao">

                                </p>
                                <hr>
                                </hr>
                                <p class="text-muted" id="prioridade">

                                </p>
                                <hr>
                                </hr>
                                <p class="text-muted" id="cliente">

                                </p>
                                <hr>
                                </hr>
                                <p class="text-muted" id="membros">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <div footer-include-html="../footer.php"></div>
    </div>

    <!-- Logout Modal-->
    <div logout-include-html="../logout.php"></div>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery UI -->
    <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- jquery-validation -->
    <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- Gantt Google -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Page specific script -->
    <script src="../../src/includes.js"></script>
    <script src="../../src/global.js"></script>
    <script src="../../src/logout.js"></script>
    <script src="../../src/task/includes.js"></script>
    <script src="../../src/project/project_visualize.js"></script>
    <script src="../../src/gantt/gantt_visualize.js"></script>
    <script src="../../src/task/task_read.js"></script>
</body>

</html>