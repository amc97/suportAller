<!-- Cabeçalho e barra lateral -->
<?php include("views/admin_header.php");?>

<!-- Conteúdo -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <h2>Tickets próximos do prazo</h2>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="tickets" class="table table-bordered">
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
                                    <td>AC Revolução</td>
                                    <td>Antonio Conselheiro</td>
                                    <td>27/10/2017</td>
                                    <td><span class="badge badge-pill badge-success">Em tratamento</span></td>
                                    <td><span class="badge badge-pill badge-danger">Urgente</span></td>
                                </tr>
                                <tr class="text-center">
                                    <td><a href="#">98764590</a></td>
                                    <td>Pesadão Vendas</td>
                                    <td>Nhegas</td>
                                    <td>28/10/2017</td>
                                    <td><span class="badge badge-pill badge-success">Em tratamento</span></td>
                                    <td><span class="badge badge-pill badge-danger">Urgente</span></td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>                
                </div>               
            </div>
        </div>
    </div>
</div>

<!-- Rodapé -->
<?php include("views/admin_footer.php");?>