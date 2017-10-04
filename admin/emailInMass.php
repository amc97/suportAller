<!-- Cabeçalho e barra lateral -->
<?php include("views/admin_header.php");?>

<!-- Conteúdo -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h1>Email em massa</h1>
                    </div>                                        
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="text-center">
                                <a class="btn btn-primary text-light" data-toggle="modal" data-target="#selectClients" href="">
                                    Selecionar clientes 
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>                    
                            <hr>
                            <div class="form-group">
                                <label for="titulo"><strong>Título</strong></label>
                                <input type="text" class="form-control" id="titulo">
                            </div>
                            <div class="form-group">
                                <label for="conteudo"><strong>Conteúdo</strong></label>
                                <textarea name="conteudo" id="conteudo" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary">
                                    Enviar email 
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>                    
                </div>                
            </div>
        </div>
    </div>
</div>
<!-- Janela de seleção de clientes -->
<div class="modal fade" id="selectClients" tabindex="-1" role="dialog" aria-labelledby="selectClientsLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Selecionar clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                </div>
                <div class="modal-body">
                    <div class="checkbox">
                        <label><input type="checkbox"> Jackson do Pandeiro</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Zé das Couves</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Maria da Cocada</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> João Noia</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Chico Linguiça</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Concluir</button>                    
                </div>
            </div>
        </div>
    </div>

<!-- Rodapé -->
<?php include("views/admin_footer.php");?>