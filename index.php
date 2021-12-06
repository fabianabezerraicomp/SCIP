<?php
include 'pages/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SCIP | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- <link rel="shortcut icon" type="image/png" href="dist/img/logo.png" data-original-href="dist/img/logo.png"> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <div class="wrapper">

    <div header-include-html="pages/index/header.php"></div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h4 class="m-0 text-secondary"><strong>Estatísticas do Usuário</strong></h4>
              <input style="display: none;" class="form-control" name="user_id" id="user_id" value="<?php echo $id ?>"></input>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <!-- DONUT CHART -->
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Tarefas em Projetos (Usuário)</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="taskChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-6">
              <!-- LINE CHART -->
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Lançamento de Atividades (Usuário)</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="timeChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
              </div>
              <!-- /.card -->

            </div>
            <!-- /.col (RIGHT) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <!------------------------------------------------------------------------------------>

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h4 class="m-0 text-secondary"><strong>Estatísticas do Sistema</strong></h4>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <!-- DONUT CHART -->
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Projetos</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="projectChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-6">
              <!-- DONUT CHART -->
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Usuários</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="userChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <div class="card-footer">
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
            <!-- /.col (RIGHT) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Add Content Here -->
    </aside>
    <!-- /.control-sidebar -->

    <div footer-include-html="pages/footer.php"></div>
  </div>
  <!-- ./wrapper -->

  <div logout-include-html="pages/logout.php"></div>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- Page specific script -->
  <script src="src/includes.js"></script>
  <script src="src/global.js"></script>
  <script src="src/index/logout.js"></script>
  <script src="src/index/dashboard.js"></script>

</body>

</html>