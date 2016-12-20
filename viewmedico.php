<?php
 $id = $_GET['id'];

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
    <!-- topbar ends -->
<div class="ch-container">
  <div class="row">
        
        <!-- left menu starts -->
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">&nbsp;</h4>

                <p>&nbsp;</p>
            </div>
    </noscript>

      <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    
</div>
<div class=" row"></div>
<?php
$link = mysql_connect('localhost','root','');

// Seleciona o Banco de dados através da conexão acima

$conexao = mysql_select_db('clinica',$link); if($conexao){



$sqlview = "SELECT clientes.convenio,clientes.id, clientes.nome, convenios.id_convenios, convenios.nome_convenio FROM clientes INNER JOIN convenios on clientes.id = $id and convenios.id_convenios= clientes.convenio";

$sql = "SELECT * FROM medicos WHERE id_medico=$id ";

$consulta = mysql_query($sql);

// Armazena os dados da consulta em um array 



while( $registro = mysql_fetch_assoc($consulta)){


echo '<div class="row">';
echo '<div class="col-lg-7 col-md-12">';
echo ' <h1><center> '.$registro["nome_medico"].' </center><br>';
echo ' </h1>';
echo ' <p><b>Nome:</b></p>';
echo '<p>'.$registro["nome_medico"].'</p>';
echo '<p><b>CRM:</b></p>';
echo '<p>'.$registro["crm_medico"].'</p>';
echo '<p><b>UF:</b></p>';
echo '<p>'.$registro["uf_crm_medico"].'';
echo '<p><b>Conselho:</b></p>';
echo '<p>'.$registro["conselho_medico"].'</p>';
echo ' </div>';

}
}

?>

    
                   
                      
                   
                   

                    
                    

                    
                   
               
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


</body>
</html>
