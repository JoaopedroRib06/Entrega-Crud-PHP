<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário - Empresa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include_once("../menu.php"); 
    
    $id= $_GET['id'];

    $sql= "Select * FROM funcionario where id=$id";
    require_once("../conexao.php");
    $result= mysqli_query($conexao, $sql);
    $funcionario = mysqli_fetch_assoc($result);
    ?>

    <div class="container mt-4">
        <h2>Edição de Funcionários</h2>
        <hr>

        <form action="atualizar.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome"  required value =<?php echo $funcionario['nome']?>>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required value=<?php echo $funcionario['email'] ?>>
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" required value=<?php echo $funcionario['cargo'] ?> >
            </div>

            <div class="mb-3">
                <label for="salario" class="form-label">Salário (R$)</label>
                <input type="number" step="0.01" class="form-control" id="salario" name="salário" rerquired value=<?php echo $funcionario['salario'] ?>>
            </div>

            <div class="mb-3">
                <label for="admissao" class="form-label">Data de Admissão</label>
                <input type="date" class="form-control" id="admissao" name="admissao" required value=<?php echo $funcionario['admissao'] ?>>
            </div>

            <div class="mb-3">
                <label for="ativo">Ativo</label>
                <input type="checkbox" name="ativo" <?php if ($funcionario['ativo' ==1]){
                    echo 'checked';
                }?>>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type= "submit" value="Atualizar">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
