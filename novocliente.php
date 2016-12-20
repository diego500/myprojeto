<?php

session_start();
 
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
<?php

if(isset($_POST['acao']) && $_POST['acao'] == "enviado"){



try{
  // Faz conexão com banco de daddos
  $pdo = new PDO("mysql:host=localhost;dbname=clinica;","root", "");
}catch(PDOException $e){
  // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
  echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
  die;
}
// Prepara uma sentença para ser executada
$statement = $pdo->prepare('INSERT INTO clientes (nome, convenio) VALUES (:nome, :convenio)');

// Filtra os dados e armazena em variáveis (o filtro padrão é FILTER_SANITIZE_STRING que remove tags HTML)

$nome  = $_POST['nome'];
$convenio = $_POST['convenio'];


// Adiciona os dados acima para serem executados na sentença
$statement->bindParam(':nome',     $nome);
$statement->bindParam(':convenio', $convenio);


// Executa a sentença já com os valores
if($statement->execute()){
  // Definimos a mensagem de sucesso
  echo '<script>alert("Parabens! Cliente Cadastrado com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
  
}else{
  // Definimos a mensagem de erro
  echo '<script>alert("0.0! Erro ao Cadastrar "); </script>'; 
  echo '<script> window.close(); </script>';
}
	
	
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
            <a href="inicio.php">Home</a>
        </li>
        <li>
            <a href="clientes.php">Clientes</a>
        </li>
         <li>
            <a href="novocliente.php">Novo Clientes</a>
        </li>
    </ul>
</div>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>     Cadastro de Clientes </h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
     <form role="form"  action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="nome" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome Completo">
                    </div>
                   <div class="box-content">
                <div class="control-group">
                    <label class="control-label" for="selectError">Convenio</label>
                    <div class="controls">
                        <select id="selectError" name="convenio" data-rel="chosen">
                    <?php
                  $username = "root";
                  $password="";

                  $conn = new PDO('mysql:host=localhost;dbname=clinica', $username, $password);	
// Seleciona o Banco de dados através da conexão acima
                 $sql = "SELECT * FROM convenios";
                 $resultado = $conn->query($sql);
                   while($row = $resultado->fetch()) {
				   
				   echo '<option name =nome value='.$row["id_convenios"].'>'.$row["nome_convenio"].'</option>';
				   
                            
	           }


				  ?>
                   </select>
                    </div>
                </div>      
                  
                  
                  
                  
                  
                  
                  
                  
	
                        </select>
                    </div>
                </div>
                <!--   <input type="hidden" name="acao" value="enviado"> -->
                    <input type="hidden" name="acao" value="enviado"> 
                    <button type="submit" value="acao" class="btn btn-default">Cadastrar</button>
                </form>

            </div>
        </div>
    </div> </div>
   

  

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
                    <h3></h3>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
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



<script>

function funcaoedita(get) {
	
	 window.open('http://localhost/Clinica/myprojeto/auteraclientes.php?id='+get+'', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=650, HEIGHT=400'
  ); 

	}

</script>

</body>
</html>