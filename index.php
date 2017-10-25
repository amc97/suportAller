 <?php include("header.php");?>


 <header class="intro-header" style="background-image: url('img/pattern.svg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Abra um ticket</h1>
                        <hr class="small">
                        <span class="subheading">Você tem dúvidas? Eu possuo as respostas (talvez).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container ticket-form">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <p>Quer manter contato comigo? Preencha o formulário abaixo para enviar uma mensagem pra mim e tentarei lhe responder em 24 horas!</p>

                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nome">Seu nome</label>
                                <label for="nome" class="fa fa-check text-success" ng-show="ticket.userName"></label>
                                <a href="" data-toggle="tooltip" data-placement="right" title="Informe seu nome." class="badge badge-pill">i</a>
                                <input type="text" class="form-control" id="nome" ng-model="ticket.userName" required>
                            </div>
                        </div>
                        <div class="col-lg-6">                                
                            <label for="email">Seu email</label>
                            <label for="email" class="fa fa-check text-success" ng-show="ticket.userEmail"></label>
                            <label for="email" class="fa fa-times text-danger" ng-show="!ticket.userEmail && ticket.userEmail.lenght > 0"></label>
                            <a href="" data-toggle="tooltip" data-placement="right" title="Informe seu email." class="badge badge-pill">i</a>     
                            <input type="email" class="form-control" id="email" ng-model="ticket.userEmail" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label for="problems">Problema relacionado a:</label>
                                <label for="problems" class="fa fa-check text-success" ng-show="ticket.problem"></label>
                                 <a href="" data-toggle="tooltip" data-placement="right" title="Selecione a área a que o problema está relacionado." class="badge badge-pill">i</a>
                                <select class="form-control" ng-model="ticket.problem" required>
                                    <option value="">Selecione uma opção...</option>
                                    <option value="1">Atualização de Site</option>
                                    <option value="2">Manutenção de Site</option>
                                    <option value="3">Suporte</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label for="prioridade">Prioridade:</label>
                                 <a href="" data-toggle="tooltip" data-placement="right" title="Informe a prioridade para a resolução do problema." class="badge badge-pill">i</a>
                                <label for="prioridade" class="fa fa-check text-success" ng-show="ticket.priority"></label>
                                <select class="form-control" ng-model="ticket.priority" required>
                                    <option value="">Selecione uma opção...</option>
                                    <option value="1">Alta</option>
                                    <option value="2">Média</option>
                                    <option value="3">Baixa</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="titulo">Título do chamado</label>
                                <label for="title" class="fa fa-check text-success" ng-show="ticket.title"></label>
                                <a href="" data-toggle="tooltip" data-placement="right" title="Insira um título para o problema." class="badge badge-pill">i</a>                                
                                <input type="text" class="form-control" id="titulo" ng-model="ticket.title" required>
                            </div>
                        </div>
                    </div>
                   
                    
                   <div class="row">
                        <div class="col-lg-12">
                            <label for="desc">Descrição do problema</label>
                            <a href="" data-toggle="tooltip" data-placement="right" title="Faça uma descrição detalhada do problema." class="badge badge-pill">i</a>
                            <div id="summernote" ng-model="ticket.desc" ng-required></div>
                        </div>
                   </div>

                   <div class="row">                       
                       <div class="col-lg-12">                           
                           <label class="btn btn-primary" id="anexLabel">
                               <input type="file" id="anexos" style="display: none;">
                               Anexar arquivos 
                               <i class="fa fa-plus"></i>
                           </label>
                            <a href="" data-toggle="tooltip" data-placement="right" title="Adicione arquivos que possam ajudar na resolução ou detecção do problema, como prints, ou logs." class="badge badge-pill">i</a>
                       </div>
                   </div>
                    <br>
                   <div class="row">
                        <div class="col-lg-12 text-center">
                            <button onclick="showAlert();" type="submit" class="btn btn-primary btn-lg"
                                ng-disabled="!ticket.userName || !ticket.userEmail || !ticket.problem || !ticket.priority || !ticket.title">
                                Abrir Ticket 
                                <i class="fa fa-send"></i>
                            </button>
                        </div>
                   </div>                    
                </form>
                <div class="row">
                    <div class="alert alert-success" role="alert" style="display: none;" id="confirmAlert">
                        Sucesso! Esse é o código para você consultar o seu Ticket: <strong>98764590</strong> .
                        <a onclick="hideAlert();" href=""><span class="fa fa-times pull-right"></span></a>
                    </div>
                    <div class="alert alert-danger" role="alert" style="display: none;" id="confirmAlert">
                        Falha na abertuda do Ticket!
                        <a onclick="hideAlert();" href=""><span class="fa fa-times pull-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function showAlert(){
        document.getElementById("confirmAlert").style.display = 'block';
    }
    
    function hideAlert(){
        document.getElementById("confirmAlert").style.display = 'none';
    }
</script>


 <?php include("footer.php");?>