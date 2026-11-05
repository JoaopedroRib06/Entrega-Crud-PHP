<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionário - Empresa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include_once("../menu.php"); ?>

    <div class="container mt-4">
        <h2>Cadastro de Funcionários</h2>
        <hr>

        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do funcionário" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Ex: Desenvolvedor, Analista..." required>
            </div>

            <div class="mb-3">
                <label for="salario" class="form-label">Salário (R$)</label>
                <input type="number" step="0.01" class="form-control" id="salario" name="salario" placeholder="Ex: 2500.00" required>
            </div>

            <div class="mb-3">
                <label for="admissao" class="form-label">Data de Admissão</label>
                <input type="date" class="form-control" id="admissao" name="admissao" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="listar.php" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
