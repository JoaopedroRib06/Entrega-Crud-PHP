<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Funcionários</title>
</head>
<body>
    <?php
    include("./menu.php");?>
    <div class="container">
        <h1>Listagem de Funncionários</h1>
        <table class ="table table-stripped">
        <thead>
            <tr>
                <th>nome</th>
                <th>cargo</th>
                <th>salário</th>
                <th>operação</th>
            </tr>
        </thead>
    <tbody>
        <?php
        require_once("../conexao.php");
        $sql="select * FROM funcionario";
        $result= mysql_query($conexao, $sql);
        while($linha = mysql_fetch_assoc($result)) {
        
        }?>
        <tr>
            <td>
                <?php 
                echo "$linha['nome']";
                ?>
            </td>
</body>
</html>