<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCIP | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">

    <!-- <link rel="shortcut icon" type="image/png" href="../dist/img/logo-project-control-1.png" data-original-href="../dist/img/logo-project-control-1.png"> -->
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="login.php" class="h1 text-secondary"><b>SCIP</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg text-secondary"><strong>Faça login para iniciar sua sessão no sistema</strong></p>
                <form id="register">
                    <div class="input-group mt-3 mb-3">
                        <input name="email" id="email" type="email" class="form-control" placeholder="E-mail">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-at"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <input name="senha" id="senha" type="password" class="form-control" placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block"><strong>LOGIN</strong></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-5">
                    <a href="forgot_password.php">Esqueci minha senha</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <div class="modal fade" id="loginErrorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content card-outline card-danger">
                <div class="modal-body">
                    <p class="login-box-msg text-secondary h2"><strong>Atenção</strong></p>
                    <p class="login-box-msg text-secondary h4"><strong>Usuário não encontrado</strong></p>
                    <p class="login-box-msg text-secondary"><strong>Obs: Por questões de segurança os dados inseridos foram deletados.</strong></p>
                </div>
                <div class="modal-footer">
                    <p class="mb-0 text-center">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Ok</button>
                    </p>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <div class="modal fade" id="invalidStatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content card-outline card-danger">
                <div class="modal-body">
                    <p class="login-box-msg text-secondary h4"><strong>Usuário encontra-se inativo</strong></p>
                    <p class="login-box-msg text-secondary"><strong>Por favor, entre em contato com gerente de projeto master.</strong></p>
                </div>
                <div class="modal-footer">
                    <p class="mb-0 text-center">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Ok</button>
                    </p>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- InputMask -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- jquery-validation -->
    <script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script src="../src/global.js"></script>
    <script src="../src/login.js"></script>
</body>

</html>