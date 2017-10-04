<!-- Cabeçalho e barra lateral -->
<?php include("views/admin_header.php");?>

<!-- Conteúdo -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h1>Cadastrar cliente</h1>
                    </div>
                    <div class="card-body">
                        <form action="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="empresa"> <strong>Nome da empresa</strong></label>
                                        <input type="text" id="empresa" class="form-control">                                        
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tel"> <strong>Telefone</strong></label>
                                        <input type="text" id="telefone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="responsavel"> <strong>Nome do responsável</strong></label>
                                <input type="text" id="responsavel" class="form-control">
                            </div>
                            <label class="text-center"> <strong>Emails de contato</strong></label>
                            <div class="row">                                
                                <div class="col-md-6">
                                    <div class="form-group">                                        
                                        <input type="text" id="email1" class="form-control" placeholder="Email 1">                                        
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">                                        
                                        <input type="text" id="email2" class="form-control" placeholder="Email 2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="url"><strong>URL do site</strong></label>
                                <input type="url" id="url" class="form-control">
                            </div>
                            <div class="row justify-content-center">
                                <button class="btn btn-primary">Cadastrar</button>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rodapé -->
<?php include("views/admin_footer.php");?>