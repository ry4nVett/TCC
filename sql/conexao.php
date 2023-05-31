<?php
    $dbHost = "localhost";
    $dbName = "work-tattoo";
    $dbUsername = "root";
    $dbPassword = "";

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    /*if($conexao->connect_errno){
        echo "Failed to connect to MySQL: " . $conexao -> connect_error;
    }

    else
    {
        echo 'Sucesso';
    }*/

    
?>