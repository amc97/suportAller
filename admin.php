<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Suporte ALLER</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/datatables.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Central de Suporte</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
           
            <div class="col-lg-3">
                <div class="data">
                    32
                </div>
                <div class="infos">
                    Tickets abertos
                </div>
            </div>

            <div class="col-lg-3">
                <div class="data">
                    4
                </div>
                <div class="infos">
                    Próx. a estourar o prazo
                </div>
            </div>

            <div class="col-lg-3">
                <div class="data">
                    1
                </div>
                <div class="infos">
                    Tickets atrasados
                </div>
            </div>

            <div class="col-lg-3">
                <div class="data">
                    320
                </div>
                <div class="infos">
                    Tickets no total
                </div>
            </div>

        </div>
    </div>
    </div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Todos os Tickets</h3>
                <hr>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <table id="tickets" class="display tickets-table table-striped" cellspacing="0" width="100%">
                    <thead>
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
                        <tr>
                            <td><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">98764590</a></td>
                            <td>RS2</td>
                            <td>Romeu Alencar</td>
                            <td>29/07/2017</td>
                            <td><span class="label label-success">Em tratamento</span></td>
                            <td><span class="label label-danger">Urgente</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">98764590</a></td>
                            <td>RS2</td>
                            <td>Romeu Alencar</td>
                            <td>29/07/2017</td>
                            <td><span class="label label-success">Em tratamento</span></td>
                            <td><span class="label label-danger">Urgente</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">98764590</a></td>
                            <td>RS2</td>
                            <td>Romeu Alencar</td>
                            <td>29/07/2017</td>
                            <td><span class="label label-success">Em tratamento</span></td>
                            <td><span class="label label-danger">Urgente</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- modal -->
<div class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><strong>Ticket: </strong>98765766</h4>
      </div>
       <div class="modal-body">

           <div class="row">
               <div class="col-lg-12">
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Dados do Ticket</a></li>
                    <li><a data-toggle="tab" href="#menu1">Anexos</a></li>
                </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="row ticket-status">
                                <div class="col-lg-12">
                                    <ul>
                                        <li><strong>Data de abertura: </strong>12/09/2017</li>
                                        <li><strong>Aberto por: </strong>Maria da Silva da Silva</li>
                                        <li><strong>Email: </strong>fulano@gmail.com</li>
                                        <li><strong>Relacionado a: </strong>Atualização de site</li>
                                        <li><strong>Prioridade: </strong>Médio</li>
                                        <li><strong>Título: </strong>Trocar banner da homepage</li>
                                        <li><strong>Descrição: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nulla vitae felis sollicitudin consectetur vel lobortis ante. Etiam imperdiet nulla sit amet justo feugiat, et eleifend augue cursus. Vestibulum non enim ac est facilisis vehicula. Suspendisse id augue sollicitudin, condimentum felis vitae, posuere lectus.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                <label for="">Previsão de Conclusão</label>
                                <input type="text" class="form-control">
                                </div>
                                
                                <div class="col-lg-3">
                                <label for="">Status</label>
                                <select class="form-control">
                                    <option value="">Aberto</option>
                                    <option value="">Em tratamento</option>
                                    <option value="">Aguardando definição do cliente</option>
                                    <option value="">Encerrado</option>
                                </select>
                                </div>

                                <div class="col-lg-6">
                                <label for="">Anexar mensagem</label>
                                <textarea rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                    </div>
                    
                    
                    <div id="menu1" class="tab-pane fade">
                       <div class="row">
                           <div class="col-lg-8 col-lg-offset-2">
                               <ul class="itens-download">
                                    <li><a href="">Nome do arquivo</a></li>
                                    <li><a href="">Nome do arquivo</a></li>
                                    <li><a href="">Nome do arquivo</a></li>
                                    <li><a href="">Nome do arquivo</a></li>
                                    <li><a href="">Nome do arquivo</a></li>
                                    <li><a href="">Nome do arquivo</a></li>
                                </ul>
                           </div>
                       </div>
                    </div>
                   
                </div>
             </div>
           </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Atualizar Ticket</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
    
<?php include("footer.php"); ?>
