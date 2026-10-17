<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="pai">
        <div class="container">
            <div class="paragrafo">
                <p>Crie aqui sua colinha</p>
                <a href="cadastrarCandidato.php">Cadastrar Candidato</a>
            </div>
            <form action="candidato.php" method="post">
                <!-- Deputado Federal -->

                <label for="deputadoF">Deputado Federal:</label>
                <input class="deputadoF-group" type="text" name="deputadoF1" id="deputadoF" maxlength="1" required>
                <input class="deputadoF-group" type="text" name="deputadoF2" id="deputadoF" maxlength="1" required>
                <input class="deputadoF-group" type="text" name="deputadoF3" id="deputadoF" maxlength="1" required>
                <input class="deputadoF-group" type="text" name="deputadoF4" id="deputadoF" maxlength="1" required>

                <div class="alinhar">
                    <input type="button" value="Confirma" id="btn">
                </div>

                <!-- Deputado Federal -->

                <label for="deputadoE">Deputado Estadual:</label>
                <input class="deputadoE-group" type="text" name="deputadoE1" id="deputadoE" maxlength="1" required>
                <input class="deputadoE-group" type="text" name="deputadoE2" id="deputadoE" maxlength="1" required>
                <input class="deputadoE-group" type="text" name="deputadoE3" id="deputadoE" maxlength="1" required>
                <input class="deputadoE-group" type="text" name="deputadoE4" id="deputadoE" maxlength="1" required>
                <input class="deputadoE-group" type="text" name="deputadoE5" id="deputadoE" maxlength="1" required>
                <div class="alinhar">
                    <input type="button" value="Confirma" id="btn">
                </div>


                <label for="senador1">Senador - 1° vaga:</label>
                <input class="senador1-group" type="text" name="senadorP1" id="senador1" maxlength="1" required>
                <input class="senador1-group" type="text" name="senadorP2" id="senador1" maxlength="1" required>
                <input class="senador1-group" type="text" name="senadorP3" id="senador1" maxlength="1" required>
                <div class="alinhar">
                    <input type="button" value="Confirma" id="btn">
                </div>
                <label for="senador2">Senador - 2° vaga:</label>
                <input class="senador2-group" type="text" name="senadorS1" id="senador2" maxlength="1" required>
                <input class="senador2-group" type="text" name="senadorS2" id="senador2" maxlength="1" required>
                <input class="senador2-group" type="text" name="senadorS3" id="senador2" maxlength="1" required>
                <div class="alinhar">
                    <input type="button" value="Confirma" id="btn" onclick="alert('Confirmado!');">
                </div>
                <label for="governador">Governador:</label>
                <input class="governador-group" type="text" name="governador1" id="governador" maxlength="1" required>
                <input class="governador-group" type="text" name="governador2" id="governador" maxlength="1" required>
                <div class="alinhar">
                    <input type="button" value="Confirma" id="btn">
                </div>
                <label for="presidente">Presidente:</label>
                <input class="presidente-group" type="text" name="presidente1" id="presidente" maxlength="1" required>
                <input class="presidente-group" type="text" name="presidente2" id="presidente " maxlength="1" required>
                <div class="alinhar">
                    <input type="button" value="Confirma" id="btn">
                </div>
                <div class="centroB">
                    <input type="submit" value="Confirmar todos" id="CT">
                </div>
            </form>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>

</html>