<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "calculadora";
    $table = "operacoes";

    $mysql = new mysqli($host, $usuario, $senha, $db);
    if ($mysql->connect_error) {
        print "Falha na conexão: <strong>(". $mysql->connect_errno .") ". $mysql->connect_error ."</strong>";
    }
?>