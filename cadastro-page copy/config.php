<?php

    if(isset($_POST['cadastrar'])){
        $brinco = $_POST['brinco'];
        $nome = $_POST['nomeAnimal'];
        $idade = $_POST['idade'];
        $lote = $_POST['lote'];
        $pai = $_POST['pai'];
        $mae = $_POST['mae'];
        $crias = $_POST['crias'];
    }

    $host = 'localhost';
    $usuario = 'root';
    $pass = '';
    $banco = 'ordermilk';

    $con = mysqli_connect($host, $usuario, $pass, $banco);

    if(!$con){
        die("Falha ao conectar ao banco de dados." . mysqli_connect_error());
    }

    $sql = "INSERT INTO cadastro_animal (nº_brinco, nome, id_lote, idade, crias, pai, mae) 
    VALUES('$brinco','$nome', '$idade', '$lote', '$pai', '$mae', '$crias')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Usuário cadastrado com sucesso.";
    }

?>