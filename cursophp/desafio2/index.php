<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada e cúbica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $n1 = $_GET["n1"];
    ?>
    <main>
        <h2>Calculos de Raizes</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
        <label for="n1">Informe um numero:</label>
        <input type="number" name="n1" id="n1">
        <input type="submit" value="Calcular">
    </form>
    </main>

    <section id="resultado">
        <h2>Resultado:</h2>
        <?php 
        $raiz_q = sqrt($n1);
        $raiz_c = $n1 ** (1/3);
        echo "O numero digitado foi $n1 .";
        echo "<br>Sua raiz quadrada é $raiz_q";
        echo "<br>Sua raiz cúbica é $raiz_c"
        ?> 
    </section>
</body>
</html>