<?php
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $cargo=$_POST['cargo'];
    $salario=$_POST['salario'];
    $admissao=$_POST['admissao'];
    //criar a instrução SQL
    $sql="insert into funcionario(nome,email,cargo,salario,data_admissao)VALUES('$nome','$email','$cargo','$salario','$admissao')";
    require_once("../conexao.php");
    $reposta=mysql_query($conexao,$sql);

    if ($reposta == true){
        header("location:listar.php");
    }





?>