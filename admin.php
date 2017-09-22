<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suporte ALLER</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="#">Central de Suporte</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">
                Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-envelope"></i>
                        <span class="nav-link-text">
                Gerenciar Tickets</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-users"></i>
                        <span class="nav-link-text">
                Gerenciar Técnicos</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-link"></i>
                        <span class="nav-link-text">
                Outra opção</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i> Sair
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Icon Cards -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-envelope-open"></i>
                            </div>
                            <div class="mr-5">
                                32 Tickets abertos
                            </div>
                        </div>
                        <a href="#" class="card-footer text-white clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-warning"></i>
                            </div>
                            <div class="mr-5">
                                4 Tickets próximos de estourar o prazo
                            </div>
                        </div>
                        <a href="#" class="card-footer text-white clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </div>
                            <div class="mr-5">
                                1 Ticket Atrasado
                            </div>
                        </div>
                        <a href="#" class="card-footer text-white clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-tasks"></i>
                            </div>
                            <div class="mr-5">
                                320 Tickets no total
                            </div>
                        </div>
                        <a href="#" class="card-footer text-white clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <h2>Todos os tickets</h2>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="tickets" class="table table-bordered table-striped">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>Ticket</th>
                                    <th>Empresa</th>
                                    <th>Nome</th>
                                    <th>Data Abertura</th>
                                    <th>Status</th>
                                    <th>Prioridade</th>
                                </tr>
                            </thead>
                           <tbody>
                                <tr class="text-center">
                                    <td><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">98764590</a></td>
                                    <td>RS2</td>
                                    <td>Romeu Alencar</td>
                                    <td>29/07/2017</td>
                                    <td><span class="badge badge-pill badge-success">Em tratamento</span></td>
                                    <td><span class="badge badge-pill badge-danger">Urgente</span></td>
                                </tr>
                                <tr class="text-center">
                                    <td><a href="#">98764590</a></td>
                                    <td>RS2</td>
                                    <td>Romeu Alencar</td>
                                    <td>29/07/2017</td>
                                    <td><span class="badge badge-pill badge-success">Em tratamento</span></td>
                                    <td><span class="badge badge-pill badge-danger">Urgente</span></td>
                                </tr>
                                <tr class="text-center">
                                    <td><a href="#">98764590</a></td>
                                    <td>RS2</td>
                                    <td>Romeu Alencar</td>
                                    <td>29/07/2017</td>
                                    <td><span class="badge badge-pill badge-success">Em tratamento</span></td>
                                    <td><span class="badge badge-pill badge-danger">Urgente</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                
                </div>            
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright &copy; Suporte Aller.Co 2017</small>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                </div>
                <div class="modal-body">
                    Clique em "Sair" abaixo se você deseja encerrar sua sessão.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Sair</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/admin/jquery/jquery.min.js"></script>
    <script src="vendor/admin/popper/popper.min.js"></script>
    <script src="vendor/admin/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

</body>

</html>