<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abs</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Função ABS</h1>
    <br><br>
    <p>A função abs() é uma função que está no php que é usada para retornar o valor absoluto de um número, ou seja, seu valor positivo. A função abs() em PHP é idêntica ao que chamamos de módulo em matemática. O módulo ou valor absoluto de um número negativo é positivo. Sintaxe:</p>
    <p class="sintaxe">number abs( value ) </p>   
    <p>Exemplo:</p>
    <p class="exemplo">Input : abs(-6)<br>Output : 6 </p>
    <form method="get">
        <label for="abs">Insira um número para calculo abs</label>
        <input type="number" name="abs" id="abs" class="calculos" required>
        <input type="submit" class="enviar" value="Enviar calculo" required>

        <?php
        $abs= $_GET["abs"];
        abs($abs)
        ?> 


</body>
</html>