<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="Teste.php" method="post">
        <div>
            <label for="nome">Valor 1(caso for Exponenciação este valor será o expoente):</label>
            <input type="text" id="valor1" name="valor1"/>
        </div>
        <div>
            <label for="email">Valor 2(caso for Exponenciação este valor será a base):</label>
            <input type="text" id="valor2" name="valor2"/>
        </div>
        <div class="buttonSoma">
            <button type="submit" name="operacao" value="soma">
                +
            </button>
        </div><br>
        <div class="buttonSubtracao">
            <button type="submit" name="operacao" value="subtracao">
                -
            </button>
</div><br>
        <div class="buttonMultiplicacao">
            <button type="submit" name="operacao" value="multiplicacao">
                *
            </button>
        </div><br>
            <div class="buttonDivisão">
            <button type="submit" name="operacao" value="divisao">
                /
            </button>
      
        </div><br>
        <div class="buttonExponenciacao">
            <button type="submit" name="operacao" value="exponenciacao">
                Exponenciação
            </button><br>
        </div>
    </form>
</body>
</html>