<?php
    include 'config.php';
    if(isset($_GET['id'])){
        $id = trim($_GET['id']);
    //recebe o ID passado via GET

    //prepara minha query
    $sql = "DELETE from funcionario WHERE id={$id} ";
    
    $resultado =  mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    
    if (mysqli_query($conexao, $sql)) {
        header("lacation:index.php");
        exit();
    } else {
        echo "Algo deu errado!";
    }

}   
?>