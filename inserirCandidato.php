<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Candidato</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="php">
        <div class="php2">
            <?php
            if (!isset($_POST["nome"])) {
                header("Location: cadastrarCandidato.php");
                exit();
            }
            include 'conecta.php';
            $nome = $_POST["nome"];
            $partido = $_POST["partido"];
            $cargo = $_POST["cargo"];
            $numero = $_POST["numero"];
            $sql = "insert into candidato (nome, partido, cargo, numero) values('$nome', '$partido', '$cargo', $numero);";
            if (mysqli_query($conexao, $sql)) {
                echo "Candidado cadastrado com sucesso!";
            } else {
                echo "Provavel falha na comunicação no servidor";
            }
            ?>
        </div>
    </div>
</body>

</html>