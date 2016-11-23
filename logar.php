<?PHP
$numero = 0;

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['crm'];
$senha = $_POST['password'];
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = "clinica"; 

 
//Conexão mysql
$conexao = mysql_connect($hostname, $username, $password) or die ("Erro na conexão do banco de dados.");
 
//Seleciona o banco de dados
$selecionabd = mysql_select_db($database,$conexao) or die ("Banco de dados inexistente.");
 
//Comando SQL de verificação de autenticação
$sql = "SELECT *
FROM usuarios
WHERE crm = '$login'
AND password = '$senha'";
 
$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");
 
//Caso consiga logar cria a sessão
if (mysql_num_rows ($resultado) > 0) {
    // session_start inicia a sessão
    session_start();
     
    $_SESSION['crm'] = $login;
    $_SESSION['password'] = $senha;
	
	header('location:inicio.php');
	$numero++;
}
 
//Caso contrário redireciona para a página de autenticação
else {
	
	
	
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['crm']);
    unset ($_SESSION['password']);
 
    //Redireciona para a página de autenticação
    header('location:/Clinica/myprojeto/index.php');
     
}
?>
