<?php

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $user = $_POST['usuario'];
        $senha = $_POST['senha'];
    }

    $host = 'localhost';
    $usuario = 'root';
    $pass = '';
    $banco = 'ordermik';

    $con = mysqli_connect($host, $usuario, $pass, $banco);

    if(!$con){
        die("Falha ao conectar ao banco de dados." . mysqli_connect_error());
    }

    $sql = "INSERT INTO usuarios (nome, usuario, senha) VALUES('$nome', '$user', '$senha')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Usuário cadastrado com sucesso.";
    }

?>