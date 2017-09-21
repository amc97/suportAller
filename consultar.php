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

            <div class="ticket-details">

                <h2>Consulte seu ticket</h2>
                <h5>Insira o código do seu ticket abaixo para consultar seu atual status</h5>

            </div>

        </div>
    </div>

    <div class="row search-box">
        <div class="col-lg-8  col-lg-offset-2">
            <form class="" role="search">
                <div class="input-group add-on">
                    <input class="form-control search-input" placeholder="Número do Ticket" name="srch-term" id="srch-term" type="text">
                    <div class="input-group-btn">
                        <button class="btn btn-default btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row ticket-status">
        <div class="col-lg-8  col-lg-offset-2 box">
            <ul>
                <li><strong>Ticket: </strong>98765766</li>
                <li><strong>Data de abertura: </strong>12/09/2017</li>
                <li><strong>Aberto por: </strong>Maria da Silva da Silva</li>
                <li><strong>Email: </strong>fulano@gmail.com</li>
                <li><strong>Relacionado a: </strong>Atualização de site</li>
                <li><strong>Prioridade: </strong>Médio</li>
                <li><strong>Título: </strong>Trocar banner da homepage</li>
                <li><strong>Descrição: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nulla vitae felis sollicitudin consectetur vel lobortis ante. Etiam imperdiet nulla sit amet justo feugiat, et eleifend augue cursus. Vestibulum non enim ac est facilisis vehicula. Suspendisse id augue sollicitudin, condimentum felis vitae, posuere lectus.</li>
                <li><strong>Arquivos anexos: </strong>Sim</li>
                <li><strong>Status atual: </strong><span class="label label-success">Em tratamento</span></li>
                <li><strong>Técnico Responsável: </strong>Matheus Figueiredo</li>
                <li><strong>Previsão de conclusão: </strong><span class="label label-danger">19/07/2017</span></li>
            </ul>
        </div>
    </div>

</div>



<?php include("footer.php");?>