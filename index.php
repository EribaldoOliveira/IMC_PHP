
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IMC</title>
</head>
<body>

   <h1>IMC - Índice de Massa corpórea</h1>

        <div id="global">
            <div id="texto">
                <p>
                    Respeite o IMC ideal pra você e tenha uma melhor saúde!
                </p>
                
            </div>

            <div id="formulario">
                <form action="index.php" method="get">
                    <br> <h3> altura</h3>
                    <input type="text" name="altura" placeholder="Ex:1.70" required>

                    <br> <h3>Peso</h3>
                    <input type="text" name="peso" placeholder="Ex:70" required>

                    <br><button type="submit">IMC</button>

                </form>

                <?php 
                
                function calcularIMC() {
                    $altura = $_GET ['altura'];
                    $peso = $_GET ['peso'];

                    $multiplicar = ($altura ** 2);
                    $dividir = ($peso / $multiplicar);
                    // Arredonda o IMC para uma casa decimal
                    $imc_Arredondado = round($dividir, 1);

                    //echo "<h3>Seu IMC é: $dividir</h3>";
                    echo "<h3>Seu IMC é: $imc_Arredondado</h3>";
                   

                    if ($dividir < 18.5) {
                        echo ("<br>MAGREZA");
                    }

                    elseif ($dividir < 24.9){
                        echo ("<br>NORMAL");
                    }

                    elseif ($dividir < 29.9){
                        echo ("<br>SOBREPESO");
                    }

                    elseif ($dividir < 34.9){
                        echo ("<br>OBESIADE");
                    }    

                    elseif ($dividir < 39.9){
                        echo ("<br>SOBREPESO GRAU II");
                    }

                    elseif ($dividir > 40){
                        echo ("<br>SOBREPESO GRAU III");
                    }
                }
                calcularIMC(); //Chamada da função calcularIMC(): No final do código PHP, a função calcularIMC() é chamada para executar o cálculo e exibir os resultados na página.
                ?>

            </div>
        </div>
    
</body>
</html>
