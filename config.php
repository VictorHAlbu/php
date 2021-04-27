<?php
/*
 * Criação de constantes com os valores a serem passados para a função mysqli
 * para comunicação com a base da dados
 */
define('SERVIDOR','localhost');
define('USUARIO','root');
define('SENHA','');
define('NOME_BANCO','aulaphp');
/*
 * Cria uma variável php que receba o valor retornado pela função mysqli_connect
 */
$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, NOME_BANCO);
/*
 * Verificar o resultado retornado pela função mysqli_connect e retornar uma
 * mensagem caso haja falha na conexão, mato o precedimento com um die e
 * concateno a mensagem de erro com o retorno do erro pela função mysqli_connect_error
 */
if($conexao === false){
    die("Erro de conexão: não foi possível conectar. ".mysqli_connect_error());
}

?>
