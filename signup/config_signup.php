<?php

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $nome_propriedade = $_POST['nome_propriedade'];
        $tamanho_propriedade = $_POST['tamanho_propriedade'];
        $cpf_cnpj = $_POST['cpf_cnpj'];
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

    $sql = "INSERT INTO cadastro_user (nome, sobrenome, email, nome_propriedade, tamanho_propriedade, cpf_cnpj, senha) VALUES('$nome', '$sobrenome', '$email', '$nome_propriedade', '$tamanho_propriedade', '$cpf_cnpj', '$senha')";

    $rs = mysqli_query($con, $sql);

    if($rs){
          header("Location: http://127.0.0.1:5501/signin/signin.html");
        exit();
    }

?>