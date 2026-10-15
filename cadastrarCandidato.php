<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Candidato</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="cad1">
        <h1>Cadastro de Candidato</h1>
        <div class="cad2">
            <form action="inserirCandidato.php" method="post">
                <input type="text" name="nome" id="nomes" placeholder="Nome do Candidato" required>
                <input type="text" name="partido" id="partido" placeholder="Partido" required>
                <input type="text" name="cargo" id="cargo" placeholder="Cargo" required>
                <input type="number" name="numero" id="numero" placeholder="Número" required>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>

</html>