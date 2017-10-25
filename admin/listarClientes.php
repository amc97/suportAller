<!-- Cabeçalho e barra lateral -->
<?php include("views/admin_header.php");?>

<!-- Conteúdo -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <td>
                                        <strong>Cliente</strong>
                                    </td>
                                    <td>
                                        <strong>Empresa</strong>
                                    </td>
                                    <td>
                                        <strong>Email</strong>
                                    </td>
                                    <td>
                                        <strong>Opções</strong>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>José das Couves</td>
                                    <td>JC Couves</td>
                                    <td>jcouves@couve.com</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                        <a href="" class="btn btn-warning text-light"><span class="fa fa-pencil"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pablo Escobar</td>
                                    <td>P.E. Produtos Diferenciados</td>
                                    <td>escobar4.20@email.com</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                        <a href="" class="btn btn-warning text-light"><span class="fa fa-pencil"></span></a>
                                    </td>
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