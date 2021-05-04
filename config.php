<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('NOME_BANCO', 'aulaphp');

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, NOME_BANCO);

