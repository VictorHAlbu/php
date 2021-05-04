<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 800px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data_toogle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="conteiner-fluid">
            <div class="row">
                <div class="col-md-12"></div>
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Lista de Funcionários</h2>
                    <a href="criar.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Adicionar Funcionário</a>
                </div>
                <?php
                //inclui o script do banco
                include 'config.php';
                $consulta = 'SELECT * FROM funcionario';
                $resultado = mysqli_query($conexao, $consulta);

                if ($resultado) {
                    if (mysqli_num_rows($resultado) > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>Ordem</th>';
                        echo '<th>Nome</th>';
                        echo '<th>Endereço</th>';
                        echo '<th>Salário R$</th>';
                        echo '<th>Data </th>';
                        echo '<th>Ação </th>';
                        echo '</tr>';
                        echo '</thead>';

                        echo '<tbody>';
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo '<tr>';
                            echo '<td>' . $linha['id'] . '</td>';
                            echo '<td>' . $linha['nome'] . '</td>';
                            echo '<td>' . $linha['endereco'] . '</td>';
                            echo '<td>' . $linha['salario'] . '</td>';
                            echo '<td>' . $linha['data'] . '</td>';
                            echo '<td>';
                            echo '<a href="editar.php?id='.$linha['id'].'">Editar</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';

                        mysqli_free_result($resultado);
                    } else {
                        echo '<div class="alert alert-danger">Não foi encontrado nenhum resultado!</div>';
                    }
                }
                mysqli_close($conexao);
                ?>
            </div>
        </div>
    </div>
</body>

</html>