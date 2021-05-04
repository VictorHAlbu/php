<?php
    include 'config.php';
    if(isset($_GET['id'])){
        $id = trim($_GET['id']);
    //recebe o ID passado via GET

    //prepara minha query
    $sql = "DELETE from funcionario WHERE id={$id}";
    
    if (mysqli_query($conexao, $sql)) {
        echo "Excluido com Sucesso!";
        header("lacation:index.php");
        exit();
    } else {
        echo "Algo deu errado!";
    }

}   
?>