<?php

    if(isset($_POST['cadastrar'])){
        $data = $_POST['data'];
        $ordenha = $_POST['ordenha'];
        $litros = $_POST['litros'];
        $vacas = $_POST['vacas'];
    }

    $host = 'localhost';
    $usuario = 'root';
    $pass = '';
    $banco = 'ordermik';

    $con = mysqli_connect($host, $usuario, $pass, $banco);

    if(!$con){
        die("Falha ao conectar ao banco de dados." . mysqli_connect_error());
    }

    $sql = "INSERT INTO registrar_ordenha (data, ordenha, litros, vacas) VALUES('$data', '$ordenha', '$litros', '$vacas')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Ordenha cadastrado com sucesso.";
    }

?>