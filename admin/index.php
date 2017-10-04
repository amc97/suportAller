<!-- Cabeçalho e barra lateral -->
<?php include("views/admin_header.php");?>

<!-- Conteúdo -->
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
                        <h2>Tickets mais recentes</h2>
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

<!-- Rodapé -->
<?php include("views/admin_footer.php");?>