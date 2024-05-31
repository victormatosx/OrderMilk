<?php

    if(isset($_POST['cadastrar'])){
        $brinco = $_POST['brinco'];
        $nome = $_POST['nomeAnimal'];
        $lote = $_POST['lote'];
        $idade = $_POST['idade'];
        $crias = $_POST['crias'];
        $pai = $_POST['pai'];
        $mae = $_POST['mae'];
    }

    $host = 'localhost';
    $usuario = 'root';
    $pass = '';
    $banco = 'ordermik';

    $con = mysqli_connect($host, $usuario, $pass, $banco);

    if(!$con){
        die("Falha ao conectar ao banco de dados." . mysqli_connect_error());
    }

    $sql = "INSERT INTO cadastro_animal (nº_brinco, nome, lote, idade, crias, pai, mae) VALUES('$brinco', '$nome', '$lote', '$idade', '$crias', '$pai', '$mae')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Usuário cadastrado com sucesso.";
    }

?>