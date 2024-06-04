<?php

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
    }

    $host = 'localhost';
    $usuario = 'root';
    $pass = '';
    $banco = 'ordermik';

    $con = mysqli_connect($host, $usuario, $pass, $banco);

    if(!$con){
        die("Falha ao conectar ao banco de dados." . mysqli_connect_error());
    }

    $sql = "INSERT INTO contato (nome, email, mensagem) VALUES('$nome', '$email', '$mensagem')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Usuário cadastrado com sucesso.";
    }

?>