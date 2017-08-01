<!DOCTYPE html>
<html lang="en">
<head>

    <style type="text/css">
        li {
            margin-right: 1px;
        }
    </style>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Embrater- Empresa Brasileira de Terceirização</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">Embrater</a>
        </div>


        <div id="navbar" class="collapse navbar-collapse" style="margin-top: 8px">
            <ul class="nav navbar-nav">


                <li>
                    <button href="#" class=" btn btn-default" data-toggle="dropdown">
                        Menu <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/home">Inicio</a></li>
                        <li><a href="/postos">Cadastrar Postos</a></li>
                        <li><a href="/motivos">Cadastrar Motivos</a></li>
                        <li><a href="/ocorrencias">Cadastrar Ocorrencias</a></li>

                    </ul>
                </li>

                <li>
                    <button href="#" class=" btn btn-default" data-toggle="dropdown">
                        Funcionários <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/funcionarios/create">Cadastrar Novo</a></li>
                        <li><a href="/funcionarios">Listar Todos</a></li>
                        <li><a href="/funcionarios/correcoes">Ajuste em Lote</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/relogio">Exportar Dados P/ Ponto</a></li>

                    </ul>
                </li>

                <li>
                    <button href="#" class=" btn btn-default" data-toggle="dropdown">
                        Atestados Medicos <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/atestadomedicos">Listar</a></li>
                    </ul>
                </li>

                <li>
                    <button href="#" class=" btn btn-default" data-toggle="dropdown">
                        Usuário <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/auth/logout">Logout</a></li>
                    </ul>
                </li>

                <!--   <li><a href="users">Usuários</a></li> -->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    @yield('header')
    @yield('content')
</div><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->


</body>
</html>



