<?PHP
session_start();
 
include 'contagens.php'; 

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['crm']) and !isset($_SESSION['password']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['crm']);
    unset ($_SESSION['password']);
     
    //Redireciona para a página de autenticação
    header('location:index.php');
	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!--
  
        Clinica inteligente v0.0.0

        Copyright 2012-2014 Diego vieira
        desenvolvimento em  Apache Licensa 5.5
 
    -->
    <meta charset="utf-8">
    <title>Sistema de Clinica Inteligente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

  

    <!-- icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inicio.html"> <img alt="Sistema Clinica " src="img/" class="hidden-xs"/>
                <span>Clinica</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                 <!--   <li><a href="#">Profile</a></li> -->
                     <li class="divider"></li>
                    <li><a href="lagout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <!--<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Layout </span>
                    <span class="caret"></span>
                </button> -->
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <!--<ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i>Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i> Configurações <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="configuracao.php">Geral</a></li> -->
                      <!-- <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li> -->
                    </ul> 
                </li>
               <!-- <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li> -->
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
  <div class="row">
        
        <!-- left menu starts -->
       <!-- <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
              <div class="nav-canvas">
                <div class="nav-sm nav nav-stacked">

                </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="inicio.php"><i class="glyphicon glyphicon-home"></i><span> Sistema </span></a>
                        </li>
                        <li><a class="ajax-link" href="ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> Ações </span></a>
                        </li>
                        <li><a class="ajax-link" href="form.html"><i
                                    class="glyphicon glyphicon-edit"></i><span>Clientes</span></a></li>
                        <li><a class="ajax-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Médicos </span></a>
                        </li>
                        <li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Convenios </span></a>
                        </li>
                        <li><a class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Fornecedores </span></a>
                        </li>
                        <!--<li class="nav-header hidden-md">Sample Section</li> -->
                    </ul>
              </div>
            </div>
        </div> 
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

      <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Sistema</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Novo Cliente." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total de Clientes </div>
            <div><?php echo $NumeroLinhas;  ?></div>
           <!-- <span class="notification"></span>-->
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Novo Médico" class="well top-block" href="medicos.php">
            <i class="glyphicon  glyphicon-user blue"></i>

            <div>Total de Médicos </div>
            <div><?php echo $numeromedico; ?></div>
           <!-- <span class="notification green">0</span> -->
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Verificação de Finanças" class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>CBO</div>
            <div><?php echo $numerocbo; ?></div>
           <!-- <span class="notification yellow">$0</span> -->
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="30 novas mensagens ." class="well top-block" href="#">
            <i class="glyphicon glyphicon-envelope blue"></i>

            <div>Messages</div>
            <div>30</div>
            <span class="notification blue">0</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Clientes </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info"> <a class="btn btn-danger" onClick="funcaonova()" href="#">
 <i class="glyphicon glyphicon-edit icon-white"></i>
 Novo Cliente
</a> <a href="" target="_blank"></a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Convênio</th>
        <th>Status</th>
        <th>Configurações</th>
    </tr>
    </thead>
    <tbody>
   
    
    </tr>
   
   

<?php
// Conexão ao banco

include ('classe/conexao.php');

$conectar = new conexao(); 
$conectar -> conectar();


// Seleciona o Banco de dados através da conexão acima



if($conectar){

$sqlconvenios ="SELECT clientes.convenio, clientes.id, clientes.nome, convenios.id_convenios, convenios.nome_convenio FROM clientes INNER JOIN convenios on clientes.convenio = convenios.id_convenios";

$consulta = mysql_query($sqlconvenios);

// Armazena os dados da consulta em um array 



while( $registro = mysql_fetch_assoc($consulta)){

echo '<tr>';

echo '<td class="center"> '.$registro["id"].'</td>';

echo '<td class="center"> '.$registro["nome"].'</td>';

echo '<td class="center">'.$registro["nome_convenio"].'</td>';

echo ' <td class="center">';
echo ' <span class="label-warning label label-default">Pending</span>';
echo ' </td>';
echo ' <td class="center">';
echo ' <a class="btn btn-info" onclick="funcaoview('.$registro["id"].')" href="#">';
echo ' <i class="glyphicon glyphicon-zoom-in icon-white"></i>';
echo ' View'; 
echo ' </a>'; 
echo ' <a class="btn btn-info" onclick="funcaoedita('.$registro["id"].')" href="#">';
echo ' <i class="glyphicon glyphicon-edit icon-white"></i>';
echo ' Edit'; 
echo ' </a>';
echo ' <a class="btn btn-info" onclick="funcaodeleta('.$registro["id"].')" href="#">';
echo ' <i class="glyphicon glyphicon-trash icon-white"></i>';
echo ' Delete';
echo ' </a>';
echo ' </td>';
echo ' </tr>';


}


}

?>

<script>
function funcaoview(get) {
  
  window.open('http://localhost/Clinica/myprojeto/viewClientes.php?id='+get+'', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=650, HEIGHT=400'
  ); 
}

function funcaoedita(get) {
	
	 window.open('http://localhost/Clinica/myprojeto/editaclientes.php?id='+get+'', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=650, HEIGHT=400'
  ); 

	}

function funcaodeleta(get) {
	
	 window.open('http://localhost/Clinica/myprojeto/DELETACLIENTE.php?id='+get+'', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=650, HEIGHT=400'
  ); 

	}
	
	function funcaonova() {
	
	 window.location.assign("http://localhost/Clinica/myprojeto/novocliente.php");
	
	}
</script>

   
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
                    
                    
                    
                </div>
                <!-- Ads, you can remove these -->
                

                <div class="col-lg-5 col-md-12 visible-xs center-text">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Charisma Demo 5 -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:250px;height:250px"
                         data-ad-client="ca-pub-5108790028230107"
                         data-ad-slot="8957582309"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <!-- Ads end -->

            </div>
        </div>
    </div>
</div>

<div class="row">
  <!--/span-->
  <!--/span-->
    <!--/span-->
</div><!--/row-->

<div class="row">
  <!--/span-->
  <!--/span-->
  <!--/span-->
</div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    
        
            <!--End mc_embed_signup-->
        </div>

    </div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="#" target="_blank">Diego
                Vieira</a> 2016 - 2200</p>

      <!--  <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="">Clinicas</a></p> -->
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>





</body>
</html>
