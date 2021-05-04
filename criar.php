<?php
include 'config.php';
//criar as variáveis que vão receber os valores submitidos pelo formulário.
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    }
    if (isset($_POST['endereco'])) {
        $endereco = $_POST['endereco'];
    }
    if (isset($_POST['salario'])) {
        $salario = $_POST['salario'];
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
    }
    if (!empty($nome) && !empty($endereco) && !empty($salario) && !empty($data)) {
        $sql = "INSERT INTO funcionario (nome, endereco, salario, data) VALUES ('$nome', '$endereco', '$salario', '$data')";

        if (mysqli_query($conexao, $sql)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Algo deu errado!";
        }
    }

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Cadastar Funcionário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 800px;
            margin: 0 auto;
        }
    </style>
    <title>Document</title>
</head>

    <body>
        <div class="wrapper">
            <div class="conteiner-fluid">
                <div class="row">
                    <div class="col-md-12"></div>
                    <div>
                        <h2 class="mt-5">Criar Funcionário</h2>
                    </div>
                    <form action="criar.php" method="POST">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control">
                            <label>Endereço</label>
                            <input type="text" name="endereco" class="form-control">
                            <label>Salário</label>
                            <input type="text" name="salario" class="form-control">
                            <label>Data</label>
                            <input type="text" name="data" class="form-control">
                            <input type="submit" class="btn btn-primary" value="Cadastar">
                            <a href="index.php" class="btn btn-secondary">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>