<!DOCTYPE html>
<html lang="en">
<head>


    <style type="text/css">
        li {
            margin-right: 1px;
        }
    </style>

    <style>
        .form-control {
            border-radius: 10px !important;
            border: 1px solid #0BB8F1 !important;
            color: #0281AB !important;
            font-weight: 600 !important;
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

    {{--Matarial Design Lite--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    {{--Matarial Design Lite Select--}}

    <link rel="stylesheet" href="/componentes/getmdl-select/getmdl-select.min.css">
    <script defer src="/componentes/getmdl-select/getmdl-select.min.js"></script>

   {{-- --}}{{--E-Signaturepad--}}{{--
    <link href="/componentes/signature/css/jquery.signaturepad.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="/componentes/signature/js/numeric-1.2.6.min.js"></script>
    <script src="/componentes/signature/js/bezier.js"></script>
    <script src="/componentes/signature/js/jquery.signaturepad.js"></script>
    <script type='text/javascript'
            src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
    <script src="/componentes/signature/js/json2.min.js"></script>
   --}}{{-- <script type='text/javascript' src="/componentes/signature/html2canvas.js"></script>--}}{{--
    <link href="/componentes/signature/css/app_style.css" rel="stylesheet">
--}}

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
                        <li><a href="/veste/crudveste">Cadastrar Vestes</a></li>


                    </ul>
                </li>

                <li>
                    <button href="#" class=" btn btn-default" data-toggle="dropdown">
                        Funcionários <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/funcionarios/create">Cadastrar Novo</a></li>
                        <li><a href="/funcionarios">Listar Todos</a></li>
                        <li><a href="/funcionarios/correcoes/index">Ajuste em Lote</a></li>
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

{{--

                <li>
                    <button href="#" class=" btn btn-default" data-toggle="dropdown">
                        Controle Veste <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/veste/entregarveste">Entregar</a></li>
                        <li><a href="/veste/devolverveste">Devolver</a></li>
                        <li><a href="/veste/listarentregarveste">Listar Entregas</a></li>
                        <li><a href="/veste/listardevolverveste">Listar Devoluções</a></li>
                    </ul>
                </li>
--}}

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


<footer>

    <div style="text-align: center">
        <img src="\logo.png" height="90px" width="130px">
    </div>
    <div class="container-fluid bg-primary py-3">
        <div class="container" style="margin-top: 22px; margin-bottom: 16px">
            {{--   <div class="text-center">
                   <label class="text-center"> E-mail: faleconosco@embrater.com</label>
               </div>
               <div class="text-center">
                   <label> Contato: (82) 3327-8358 </label>
               </div>--}}
            <div class="text-center">
                <p class="text-center"> Copyright © Embrater 2017. </p>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>


</body>
</html>



