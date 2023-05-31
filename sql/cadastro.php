<?php
    include ('conexao.php');

    $usuario= $_POST['usuario'];
    $password= $_POST['password'];
    $email= $_POST['email'];
    
    $sql= "INSERT INTO tb_usuario (usuario, senha, email) 
        VALUES('$usuario', '$password', '$email')";

    if(mysqli_query($conexao, $sql)){
        echo "usuario cadastrado";
    }
    else{
        // echo "Failed to connect to MySQL: " . mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>  