<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu candidato</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="conter">
        <div class="candidato">
            <img src="" alt="Deputado Federal">
            <p id="nome">Para Deputado Federal: <br><br>Nome do Candidato:
                <?php
                $nome1 = $_POST["deputadoF1"];
                $nome2 = $_POST["deputadoF2"];
                $nome3 = $_POST["deputadoF3"];
                $nome4 = $_POST["deputadoF4"];
                if ($nome1 == 2 && $nome2 == 3 && $nome3 == 4 && $nome4 == 5) {
                    echo "Lula";
                } else {
                    if ($nome1 == 3 && $nome2 == 3 && $nome3 == 5 && $nome4 == 2) {
                        echo "Bolsonaro";
                    } else {
                        if ($nome1 == 2 && $nome2 == 2 && $nome3 == 2 && $nome4 == 2) {
                            echo "Ricardão do feijão";
                        } else {
                            if ($nome1 == 5 && $nome2 == 5 && $nome3 == 5 && $nome4 == 5) {
                                echo "Costelinha";
                            } else {
                                echo "Candidato não encontrado";
                            }
                        }
                    }
                }
                ?>
            </p>
            <p id="numero">Número do Candidato:
                <?php
                echo "$nome1 $nome2 $nome3 $nome4";
                ?>
            </p>
            <p id="partido">Partido:
                <?php
                if ($nome1 == 2 && $nome2 == 3 && $nome3 == 4 && $nome4 == 5) {
                    echo "Mar esia";
                } else {
                    if ($nome1 == 3 && $nome2 == 3 && $nome3 == 5 && $nome4 == 2) {
                        echo "Peixeira";
                    } else {
                        if ($nome1 == 2 && $nome2 == 2 && $nome3 == 2 && $nome4 == 2) {
                            echo "Boiada";
                        } else {
                            if ($nome1 == 5 && $nome2 == 5 && $nome3 == 5 && $nome4 == 5) {
                                echo "Churrasco";
                            } else {
                                echo "Candidato não encontrado";
                            }
                        }
                    }
                }
                ?>
            </p>
        </div>

        <div class="candidato">
            <img src="" alt="Deputado Estadual">
            <p id="nome">Para Deputado Estadual <br><br> Nome do Candidato:
                <?php
                $nomeE1 = $_POST["deputadoE1"];
                $nomeE2 = $_POST["deputadoE2"];
                $nomeE3 = $_POST["deputadoE3"];
                $nomeE4 = $_POST["deputadoE4"];
                $nomeE5 = $_POST["deputadoE5"];
                if ($nomeE1 == 5 && $nomeE2 == 3 && $nomeE3 == 9 && $nomeE4 == 1 && $nomeE5 == 4) {
                    echo "João Grilo";
                } else {
                    if ($nomeE1 == 8 && $nomeE2 == 7 && $nomeE3 == 1 && $nomeE4 == 2 && $nomeE5 == 0) {
                        echo "Zé Carlos";
                    } else {
                        if ($nomeE1 == 4 && $nomeE2 == 1 && $nomeE3 == 2 && $nomeE4 == 7 && $nomeE5 == 3) {
                            echo "Seu João";
                        } else {
                            if ($nomeE1 == 5 && $nomeE2 == 4 && $nomeE3 == 4 && $nomeE4 == 8 && $nomeE5 == 1) {
                                echo "Frangolino";
                            } else {
                                if ($nomeE1 == 0 && $nomeE2 == 0 && $nomeE3 == 3 && $nomeE4 == 8 && $nomeE5 == 3) {
                                    echo "Galego Escuro";
                                } else {
                                    echo "Candidato não encontrado!";
                                    $existencia = 1;
                                }
                            }
                        }

                    }
                }
                ?>
            </p>
            <p id="numero">Número do Candidato:
                <?php
                echo "$nomeE1 $nomeE2 $nomeE3 $nomeE3 $nomeE4 $nomeE5";
                ?>
            </p>
            <p id="partido">Partido:
                <?php
                if ($nomeE1 == 5 && $nomeE2 == 3 && $nomeE3 == 9 && $nomeE4 == 1 && $nomeE5 == 4) {
                    echo "Galinhas Unidas";
                } else {
                    if ($nomeE1 == 8 && $nomeE2 == 7 && $nomeE3 == 1 && $nomeE4 == 2 && $nomeE5 == 0) {
                        echo "Donpo do galinhairo";
                    } else {
                        if ($nomeE1 == 4 && $nomeE2 == 1 && $nomeE3 == 2 && $nomeE4 == 7 && $nomeE5 == 3) {
                            echo "Festa Junina";
                        } else {
                            if ($nomeE1 == 5 && $nomeE2 == 4 && $nomeE3 == 4 && $nomeE4 == 8 && $nomeE5 == 1) {
                                echo "Direito dos galos";
                            } else {
                                if ($nomeE1 == 0 && $nomeE2 == 0 && $nomeE3 == 3 && $nomeE4 == 8 && $nomeE5 == 3) {
                                    echo "Preto Claro";
                                } else {
                                    echo "Candidato não encontrado";
                                }
                            }
                        }

                    }
                }
                ?>
            </p>
        </div>

        <div class="candidato">
            <?php
            $senadorP1 = $_POST["senadorP1"];
            $senadorP2 = $_POST["senadorP2"];
            $senadorP3 = $_POST["senadorP3"];
            ?>
            <img src="" alt="Senador 1° Vaga">
            <p id="nome">Para Senador 1° Vaga<br><br>Nome do Candidato:
                <?php
                if ($senadorP1 == 1 && $senadorP2 == 3 && $senadorP3 == 6) {
                    echo "Seu nador";
                } elseif ($senadorP1 == 9 && $senadorP2 == 2 && $senadorP3 == 4) {
                    echo "Pré sidente";
                } elseif ($senadorP1 == 2 && $senadorP2 == 0 && $senadorP3 == 7) {
                    echo "Cá Lango";
                } elseif ($senadorP1 == 1 && $senadorP2 == 0 && $senadorP3 == 9) {
                    echo "Sara Costa";
                } else {
                    echo "candidato não encontrado";
                }
                ?>
            </p>
            <p id="numero">Número do Candidato:
                <?php
                echo "$senadorP1 $senadorP2 $senadorP3";
                ?>
            </p>
            <p id="partido">Partido:
                <?php
                if ($senadorP1 == 1 && $senadorP2 == 3 && $senadorP3 == 6) {
                    echo "Meu Nada";
                } elseif ($senadorP1 == 9 && $senadorP2 == 2 && $senadorP3 == 4) {
                    echo "Antes da Eleição";
                } elseif ($senadorP1 == 2 && $senadorP2 == 0 && $senadorP3 == 7) {
                    echo "Sertão Gelado";
                } elseif ($senadorP1 == 1 && $senadorP2 == 0 && $senadorP3 == 9) {
                    echo "Médicos do SUS";
                } else {
                    echo "candidato não encontrado";
                }
                ?>
            </p>
        </div>

        <div class="candidato">
            <?php
            $senadorS1 = $_POST["senadorS1"];
            $senadorS2 = $_POST["senadorS2"];
            $senadorS3 = $_POST["senadorS3"];
            ?>
            <img src="" alt="Senador 2° Vaga">
            <p id="nome">Para Senador 2° Vaga
                <br><br>Nome do Candidato:
                <?php
                if ($senadorS1 == 1 && $senadorS2 == 4 && $senadorS3 == 6) {
                    echo "Sem Ideia";
                } elseif ($senadorS1 == 7 && $senadorS2 == 4 && $senadorS3 == 9) {
                    echo "Cleitinho do Vale";
                } elseif ($senadorS1 == 9 && $senadorS2 == 1 && $senadorS3 == 9) {
                    echo "Canavial";
                } elseif ($senadorS1 == 7 && $senadorS2 == 1 && $senadorS3 == 0) {
                    echo "Flavinho do Grau";
                } else {
                    echo "Candidato não encontrado";
                }
                ?>
            </p>
            <p id="numero">Número do Candidato:
                <?php
                echo "$senadorS1 $senadorS2 $senadorS3";
                ?>
            </p>
            <p id="partido">Partido:
                <?php
                if ($senadorS1 == 1 && $senadorS2 == 4 && $senadorS3 == 6) {
                    echo "Sem nada";
                } elseif ($senadorS1 == 7 && $senadorS2 == 4 && $senadorS3 == 9) {
                    echo "Vale Nada";
                } elseif ($senadorS1 == 9 && $senadorS2 == 1 && $senadorS3 == 9) {
                    echo "Roça";
                } elseif ($senadorS1 == 7 && $senadorS2 == 1 && $senadorS3 == 0) {
                    echo "Moto Grau";
                } else {
                    echo "Candidato não encontrado";
                }
                ?>
            </p>
        </div>

        <div class="candidato">
            <?php
            $governador1 = $_POST["governador1"];
            $governador2 = $_POST["governador2"];
            ?>
            <img src="" alt="Governador">
            <p id="nome">Para Governador
                <br><br>Nome do Candidato:
                <?php
                if ($governador1 == 1 && $governador2 == 4) {
                    echo "Minha Casa";
                } elseif ($governador1 == 1 && $governador2 == 0) {
                    echo "Neymar";
                } elseif ($governador1 == 6 && $governador2 == 9) {
                    echo "Cristiano";
                } elseif ($governador1 == 3 && $governador2 == 8) {
                    echo "Ronaldo";
                } else {
                    echo "Candidato não encontrado";
                }
                ?>
            </p>
            <p id="numero">Número do Candidato:
                <?php
                echo "$governador1 $governador2";
                ?>
            </p>
            <p id="partido">Partido:
                <?php
                if ($governador1 == 1 && $governador2 == 4) {
                    echo "Minha Vida";
                } elseif ($governador1 == 1 && $governador2 == 0) {
                    echo "Júnior";
                } elseif ($governador1 == 6 && $governador2 == 9) {
                    echo "Rnaldo";
                } elseif ($governador1 == 3 && $governador2 == 8) {
                    echo "Gaúcho";
                } else {
                    echo "Candidato não encontrado";
                }
                ?>
            </p>
        </div>

        <div class="candidato">
            <?php
            $presidente1 = $_POST["presidente1"];
            $presidente2 = $_POST["presidente2"];
            ?>
            <img src="" alt="Presidente">
            <p id="nome">Para Presidente
                <br><br>Nome do Candidato:
                <?php
                if ($presidente1 == 1 && $presidente2 == 7) {
                    echo "Portugal";
                } elseif ($presidente1 == 5 && $presidente2 == 8) {
                    echo "Iraque";
                } else {
                    echo "Candidato não encontrado";
                }
                ?>
            </p>
            <p id="numero">Número do Candidato:
                <?php
                echo "$presidente1 $presidente2";
                ?>
            </p>
            <p id="partido">Partido:
                <?php
                if ($presidente1 == 1 && $presidente2 == 7) {
                    echo "Ladrão";
                } elseif ($presidente1 == 5 && $presidente2 == 8) {
                    echo "Bomba";
                } else {
                    echo "Candidato não encontrado";
                }
                ?>
            </p>
        </div>
    </div>
</body>

</html>