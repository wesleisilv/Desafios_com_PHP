<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $reais = $_GET["valor1"];
    ?>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="reais">Digite um valor em rais para converter á dolar e euro:</label>
            <input type="number" name="valor1" id="valor1">
            <input type="submit" value="Converter">
        </form>
    </main>
    <section>
        <?php 
        $dolar = $reais * 5.40;
        $euro = $reais * 6.30;
        echo "O valor digitado para ser convertido foi $reais";
        echo "<br>O  valor em dolar é $dolar";
        echo "<br>E em euro é $euro"
        ?>
    </section>
</body>
</html>