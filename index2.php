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
                                <input type="text" class="form-control" id="nome" ng-model="ticket.userName" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                                <div class="form-group has-feedback" ng-class="{'has-success': ticket.userEmail}">
                                    <label for="email">Seu email</label>
                                    <input type="email" class="form-control" id="email" ng-model="ticket.userEmail" required>    
                                </div>                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label for="problems">Problema relacionado a:</label>
                                <select class="form-control" ng-model="ticket.problem" required>
                                    <option value="">Atualização de Site</option>
                                    <option value="">Atualização de Site</option>
                                    <option value="">Atualização de Site</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label for="prioridades">Prioridade:</label>
                                <select class="form-control" ng-model="ticket.priority" required>
                                    <option value="">Atualização de Site</option>
                                    <option value="">Atualização de Site</option>
                                    <option value="">Atualização de Site</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="titulo">Título do chamado</label>
                                <input type="text" class="form-control" id="titulo" ng-model="ticket.title" required>
                            </div>
                        </div>
                    </div>
                   
                    
                   <div class="row">
                        <div class="col-lg-12">
                            <label for="desc">Descrição do problema</label>
                            <div id="summernote" ng-model="ticket.desc">Descreva detalhadamente seu problema</div>
                        </div>
                   </div>

                   <div class="row">                       
                       <div class="col-lg-12">                           
                           <label class="btn btn-primary" id="anexLabel">
                               <input type="file" id="anexos" style="display: none;">
                               Anexar arquivos 
                               <i class="fa fa-plus"></i>
                           </label>                           
                       </div>
                   </div>
                    <br>
                   <div class="row">
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-primary">Abrir Ticket</button>
                        </div>
                   </div>
                </form>

            </div>
        </div>
    </div>



 <?php include("footer.php");?>