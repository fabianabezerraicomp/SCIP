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
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><strong>Atualizar Projeto</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="register">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input type="text" name="nome" class="form-control" id="nome" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Cliente</label>
                                                    <select class="form-control" name="cliente" id="cliente">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Descrição</label>
                                                    <textarea name="descricao" class="form-control" id="descricao" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Prioridade</label>
                                                    <select class="form-control" name="prioridade" id="prioridade">
                                                        <option selected value=""></option>
                                                        <option value="low">LOW</option>
                                                        <option value="medium">MEDIUM</option>
                                                        <option value="high">HIGH</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Membros</label>
                                                    <div class="card card-primary">
                                                        <div class="card-body">
                                                            <!-- Minimal style -->
                                                            <div class="col-sm-12">
                                                                <div class="row" id="membros">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Data Inicial</label>
                                                    <input type="date" placeholder="00/00/0000" min="1997-01-01" max="2030-12-31" maxlength="10" class="form-control" name="data_inicio" id="data_inicio" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Data Final</label>
                                                    <input type="date" placeholder="00/00/0000" min="1997-01-01" max="2030-12-31" maxlength="10" class="form-control" name="data_fim" id="data_fim" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="text-left ml-2">
                                                <a href="project_visualize.php" class="btn btn-danger mr-2"><strong>CANCELAR</strong></a>
                                            </div>
                                            <hr>
                                            </hr>
                                            <div class="text-right mr-2">
                                                <button type="submit" class="btn btn-primary"><strong>ATUALIZAR</strong></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <div footer-include-html="../footer.php"></div>
    </div>

    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informação do Sistema</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deseja atualizar este projeto?</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Não</button>
                    <button id="btn_update_project" class="btn btn-secondary" type="button" data-dismiss="modal">Sim</button>
                </div>
            </div>
        </div>
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
    <script src="../../src/project/project_update.js"></script>
</body>

</html>