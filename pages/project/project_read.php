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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 200px;">
                                            <input id="txt_search_project" type="text" class="form-control" placeholder="Procurar por...">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table id="table_project" class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Nome
                                                </th>
                                                <th>
                                                    Cliente
                                                </th>
                                                <th>
                                                    Prioridade
                                                </th>
                                                <th>
                                                    Data de Entrega
                                                </th>
                                                <th>
                                                    Ações
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_tr_project">

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a href="project_create.php" class="btn btn-primary">
                                        <i class="nav-icon fas fa-archive"></i>
                                        <span><strong>NOVO PROJETO</strong></span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <div footer-include-html="../footer.php"></div>
    </div>

    <!-- Logout Modal-->
    <div logout-include-html="../logout.php"></div>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- jquery-validation -->
    <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script src="../../src/includes.js"></script>
    <script src="../../src/global.js"></script>
    <script src="../../src/logout.js"></script>
    <script src="../../src/project/project_read.js"></script>
</body>

</html>