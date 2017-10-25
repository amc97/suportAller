<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard - Suporte ALLER</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin.css" rel="stylesheet">

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
                    <a class="nav-link" href="index.php">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tickets">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#tickets" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-list"></i>
                    <span class="nav-link-text">
                        Tickets</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="tickets">
                        <li>
                            <a href="ticketsAbertos.php">Tickets abertos</a>
                        </li>
                        <li>
                            <a href="ticketsProximos.php">Tickets próximos do prazo</a>
                        </li>
                        <li>
                            <a href="ticketsAtrasados.php">Tickets atrasados</a>
                        </li>
                        <li>
                            <a href="allTickets.php">Todos os Tickets</a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Clientes">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#clientes" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">
                        Clientes</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="clientes">
                        <li>
                            <a href="cadastrarCliente.php">Cadastrar clientes</a>
                        </li>
                        <li>
                            <a href="listarClientes.php">Listar clientes</a>
                        </li>                        
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                    <a class="nav-link" href="emailInMass.php">
                        <i class="fa fa-fw fa-envelope"></i>
                        <span class="nav-link-text">
                            Email em massa
                        </span>
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