<?php
    include 'config.php';

    $nome = $endereco = $salario = $data = '';
    if(isset($_POST['id']) && !empty($_POST['id'])){
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

    $sql = "UPDATE funcionario SET nome='{$nome}', endereco='{$endereco}', salario='{$salario}', data='{$data}' WHERE id ={$id}";
    
    if (mysqli_query($conexao, $sql)) {
            header("location:index.php");
            exit();
        } else {
            echo "Algo deu errado!";
        }
    }else{

    if(isset($_GET['id'])){
        $id = trim($_GET['id']);

        $sql = "SELECT * FROM funcionario WHERE id ={$id}";

        $resultado =  mysqli_query($conexao, $sql);

        $linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

        $nome = $linha['nome'];
        $endereco = $linha['endereco'];
        $salario = $linha['salario'];
        $data = $linha['data'];

    }else{
        echo "Error!";
    }
}

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Editar Funcionário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 800px;
            margin: 0 auto;
        }
    </style>
    <title>Editar</title>
</head>
    <body>
         <div class="wrapper">
             <div class="conteiner-fluid">
                   <div class="col-md-12"></div>
                        <h2 class="mt-5">Editar Funcionário</h2>
                        <form action="editar.php" method="POST">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" value='<?php echo $nome; ?>'>
                            <label>Endereço</label>
                            <input type="text" name="endereco" class="form-control" value='<?php echo $endereco; ?>'>
                            <label>Salário</label>
                            <input type="text" name="salario" class="form-control" value='<?php echo $salario; ?>'>
                            <label>Data</label>
                            <input type="text" name="data" class="form-control" value='<?php echo $data; ?>'>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" class="btn btn-primary" value="Atualizar">
                            <a href="index.php" class="btn btn-secondary">Voltar</a>
                        </form>
                    </div>
             </div>
         </div>
    </body>
   
</html>